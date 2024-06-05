<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Worker>
 */
class WorkerResource extends ModelResource
{
    protected string $model = Worker::class;

    protected string $title = 'Workers';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'name';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Имя', 'name')
                    ->sortable()
                    ->required(),
                TinyMce::make('Описание', 'description')
                    ->menubar('')
                    ->toolbar('undo redo | bold italic underline | bullist numlist | alignleft aligncenter alignright | subscript superscript | removeformat')
                    ->hideOnIndex(),
                Text::make('Должность', 'profession')
                    ->sortable()
                    ->required(),
                Image::make('Фото', 'photo')
                    ->hint('Наилучший размер 370х500 пикселей')
                    ->accept('image/*')
                    ->dir('team'),
            ]),
        ];
    }

    /**
     * @param  Worker  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'profession' => ['required', 'string', 'max:255'],
            'photo' => ['image', 'max:1024'],
        ];
    }
}
