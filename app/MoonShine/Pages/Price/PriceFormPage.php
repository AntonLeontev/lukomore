<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Price;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Field;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Pages\Crud\FormPage;
use Throwable;

class PriceFormPage extends FormPage
{
    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Название тарифа', 'title')
                    ->required(),
                Number::make('Цена', 'amount')
                    ->min(0)
                    ->step(1)
                    ->expansion('₽')
                    ->required(),
                Checkbox::make('Цена за месяц', 'price_per_month')
                    ->hint('Если отмечено, то будет выведено "₽/мес" после цены. Если не отмечено - "₽"')
                    ->hideOnIndex(),
                Select::make('Цвет карточки', 'color_id')
                    ->options(tariff_colors()->mapWithKeys(fn ($item) => [$item['id'] => $item['primary']])->toArray())
                    ->optionProperties(fn () => [
                        1 => ['image' => '/vendor/moonshine/images/colors/1.svg'],
                        2 => ['image' => '/vendor/moonshine/images/colors/2.svg'],
                        3 => ['image' => '/vendor/moonshine/images/colors/3.svg'],
                        4 => ['image' => '/vendor/moonshine/images/colors/4.svg'],
                        5 => ['image' => '/vendor/moonshine/images/colors/5.svg'],
                        6 => ['image' => '/vendor/moonshine/images/colors/6.svg'],
                    ]),
                Text::make('Дни недели', 'weekdays')
                    ->placeholder('Например: Пн-Пт')
                    ->required(),
                Text::make('Часы работы', 'hours')
                    ->placeholder('Например: 8:00 - 19:00')
                    ->required(),
                Text::make('Альтернативные часы работы', 'or_hours')
                    ->placeholder('Например: 14:00 - 19:00')
                    ->hint('Для тарифов на половину дня'),
                Textarea::make('Опции тарифа', 'contains')
                    ->required()
                    ->customAttributes(['rows' => '8'])
                    ->hint('Для корректного отображения каждая опция должна быть с новой строки')
                    ->hideOnIndex(),
                Switcher::make('Включен', 'enabled')
                    ->updateOnPreview()
                    ->hideOnCreate(),
            ]),
        ];
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
