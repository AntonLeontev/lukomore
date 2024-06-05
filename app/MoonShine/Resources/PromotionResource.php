<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Promotion>
 */
class PromotionResource extends ModelResource
{
    protected string $model = Promotion::class;

    protected string $title = 'Спецпредложения';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Текст', 'title')->required(),
            ]),
        ];
    }

    /**
     * @param  Promotion  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }
}
