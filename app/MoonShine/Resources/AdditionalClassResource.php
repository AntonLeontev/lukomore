<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\AdditionalClass;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<AdditionalClass>
 */
class AdditionalClassResource extends ModelResource
{
    protected string $model = AdditionalClass::class;

    protected string $title = 'Дополнителььные занятия';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make('Основное', [
                Text::make('Заголовок', 'title')
                    ->sortable()
                    ->required(),
                Textarea::make('Текст на превью', 'preview_text')
                    ->hint('Текст виден везде')
                    ->required()
                    ->hideOnIndex(),
                Textarea::make('Текст', 'text')
                    ->hint('Текст, под кнопокой "Развернуть"')
                    ->hideOnIndex(),
                Image::make('Картинка', 'image')
                    ->hint('Наилучший размер 374х262 пикселя')
                    ->accept('image/*')
                    ->dir('posts'),
                Image::make('Картинка на превью', 'thumbnail')
                    ->hint('Если оставить пустым, то будет использоваться основное изображение. (Наилучший размер 374х262 пикселя)')
                    ->accept('image/*')
                    ->dir('posts'),
            ])->customAttributes(['class' => 'mb-6']),
        ];
    }

    /**
     * @param  AdditionalClass  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:245'],
            'preview_text' => ['required', 'string', 'max:245'],
            'text' => ['nullable', 'string', 'max:65535'],
            'image' => ['image', 'max:1024'],
            'thumbnail' => ['nullable', 'image', 'max:1024'],
        ];
    }
}
