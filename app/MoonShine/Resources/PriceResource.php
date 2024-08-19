<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Price;
use App\MoonShine\Pages\Price\PriceDetailPage;
use App\MoonShine\Pages\Price\PriceFormPage;
use App\MoonShine\Pages\Price\PriceIndexPage;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Enums\PageType;
use MoonShine\MoonShineRequest;
use MoonShine\Pages\Page;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Price1>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;

    protected string $title = 'Тарифы';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    protected string $sortColumn = 'position';

    protected string $sortDirection = 'ASC';

    /**
     * @return list<Page>
     */
    public function pages(): array
    {
        return [
            PriceIndexPage::make($this->title()),
            PriceFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            // PriceDetailPage::make(__('moonshine::ui.show')),
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
            'price_per_month' => ['required', 'boolean'],
            'weekdays' => ['required', 'string', 'max:50'],
            'hours' => ['required', 'string', 'max:50'],
            'or_hours' => ['nullable', 'string', 'max:50'],
            'contains' => ['required', 'string', 'max:255'],
            'color_id' => ['required', 'integer'],
            'enabled' => ['nullable', 'boolean'],
        ];
    }

    public function getActiveActions(): array
    {
        return ['update', 'create', 'delete'];
    }

    public function reorder(MoonShineRequest $request): void
    {
        $positions = $request->str('data')->explode(',')->flip();

        Price::get()
            ->each(static function (Price $price) use ($positions) {
                $price->position = $positions->get($price->id);
                $price->save();
            });
    }
}
