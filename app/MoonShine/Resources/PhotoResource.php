<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Photo>
 */
class PhotoResource extends ModelResource
{
    protected string $model = Photo::class;

    protected string $title = 'Галерея';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Подпись', 'title'),
                Image::make('Фото', 'path')
                    ->accept('image/*')
                    ->dir('gallary'),
            ]),
        ];
    }

    /**
     * @param  Photo  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['nullable', 'string', 'max:255'],
            'path' => ['required', 'image', 'max:1024'],
        ];
    }

    public function getActiveActions(): array
    {
        return ['create', 'delete'];
    }
}
