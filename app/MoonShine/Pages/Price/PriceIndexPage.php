<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Price;

use MoonShine\Components\Icon;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Components\TableBuilder;
use MoonShine\Contracts\MoonShineRenderable;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\Fields;
use MoonShine\Fields\Number;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\IndexPage;
use Throwable;

class PriceIndexPage extends IndexPage
{
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Preview::make(formatted: fn ($value, int $index) => Icon::make('heroicons.outline.bars-3')),
                Text::make('Название тарифа', 'title')
                    ->required(),
                Number::make('Цена', 'amount', fn ($item) => $item->getAmountFormat().' ₽')
                    ->min(0)
                    ->step(1)
                    ->expansion('₽')
                    ->required(),
                Text::make('Дни недели', 'weekdays')
                    ->placeholder('Например: Пн-Пт')
                    ->required(),
                Text::make('Часы работы', 'hours')
                    ->placeholder('Например: 8:00 - 19:00')
                    ->required(),
                Text::make('Альтернативные часы работы', 'or_hours')
                    ->placeholder('Например: 14:00 - 19:00')
                    ->hint('Для тарифов на половину дня'),
            ]),
        ];
    }

    protected function itemsComponent(iterable $items, Fields $fields): MoonShineRenderable
    {
        return TableBuilder::make(items: $items)
            ->name($this->listComponentName())
            ->fields($fields)
            ->cast($this->getResource()->getModelCast())
            ->withNotFound()
            ->buttons($this->getResource()->getIndexItemButtons())
            ->sortable($this->asyncMethodUrl('reorder'));
    }

    /**
     * @return list<MoonShineComponent>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<MoonShineComponent>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<MoonShineComponent>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}
