<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Date;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Отзывы';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'name';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Имя', 'name')
                    ->required(),
                Number::make('Рейтинг', 'rating')
                    ->required()
                    ->step(1)
                    ->min(1)
                    ->max(5),
                Textarea::make('Текст', 'text')
                    ->required(),
                Date::make('Дата', 'created_at')
                    ->format('d.m.Y'),
            ]),
        ];
    }

    /**
     * @param  Review  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'name' => ['required', 'string', 'max:245'],
            'text' => ['required', 'string', 'max:1000'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
        ];
    }
}
