<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Price;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Price>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;

    protected string $title = 'Цены';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Название', 'title')
                    ->required(),
                Number::make('Цена', 'amount', fn ($item) => $item->amount.' ₽')
                    ->min(0)
                    ->step(1)
                    ->expansion('₽')
                    ->required(),
            ]),
        ];
    }

    /**
     * @param  Price  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:245'],
            'amount' => ['required', 'integer', 'min:0'],
        ];
    }

    public function getActiveActions(): array
    {
        return ['update'];
    }
}
