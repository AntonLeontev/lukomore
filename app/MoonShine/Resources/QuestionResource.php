<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Field;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Question>
 */
class QuestionResource extends ModelResource
{
    protected string $model = Question::class;

    protected string $title = 'Вопросы и ответы';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Textarea::make('Вопрос', 'question')
                    ->required(),
                Textarea::make('Ответ', 'answer')
                    ->required(),
            ]),
        ];
    }

    /**
     * @param  Question  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'question' => ['required', 'string', 'max:1000'],
            'answer' => ['required', 'string', 'max:1000'],
        ];
    }

    protected function resolveOrder(): static
    {
        $this->query()
            ->orderBy('id', 'asc');

        return $this;
    }
}
