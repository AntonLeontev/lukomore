<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Post>
 */
class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Статьи';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            // ID::make()->sortable(),
            Block::make('Основное', [
                Text::make('Заголовок', 'title')
                    ->sortable()
                    ->required(),
                TinyMce::make('Текст', 'text')
                    ->menubar('')
                    ->toolbar('undo redo | bold italic underline | fontfamily fontsize lineheight | bullist numlist | table | alignleft aligncenter alignright | subscript superscript | removeformat')
                    ->required()
                    ->hideOnIndex(),
                Text::make('Автор', 'author')
                    ->sortable()
                    ->required(),
                Image::make('Картинка', 'image')
                    ->hint('Наилучший размер 830х526 пикселя')
                    ->accept('image/*')
                    ->dir('posts'),
            ])->customAttributes(['class' => 'mb-6']),
            Block::make('Превью', [
                Image::make('Картинка на превью', 'thumbnail')
                    ->hint('Если оставить пустым, то будет использоваться основное изображение. (Наилучший размер 370х203 пикселя)')
                    ->accept('image/*')
                    ->dir('posts'),
                Textarea::make('Текст на превью', 'preview_text')
                    ->hint('Если оставить пустым, то будет сгенерирован из текста автоматически')
                    ->hideOnIndex(),
            ]),
            Preview::make('Просмотры', 'views')
                ->sortable()
                ->hideOnForm(),
            Preview::make('Создана', 'created_at', fn ($item) => $item->created_at->translatedFormat('d F Y'))
                ->sortable()
                ->hideOnForm(),
        ];
    }

    /**
     * @param  Post  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:245'],
            'preview_text' => ['nullable', 'string', 'max:100'],
            'text' => ['required', 'string', 'max:65535'],
            'author' => ['required', 'string', 'max:50'],
            'thumbnail' => ['nullable', 'image', 'max:1024'],
            'image' => ['image', 'max:1024'],
        ];
    }

    public function indexButtons(): array
    {
        return [
            ActionButton::make('', static fn ($item) => route('posts.show', $item->slug))
                ->icon('heroicons.arrow-top-right-on-square')
                ->blank(),
        ];
    }

    public function search(): array
    {
        return ['title'];
    }

    public function getActiveActions(): array
    {
        return ['create', 'update', 'delete', 'massDelete'];
    }
}
