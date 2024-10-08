<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\AdditionalClassResource;
use App\MoonShine\Resources\PhotoResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\PromotionResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\WorkerResource;
use Closure;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Pages\Page;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            // MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
            //    MenuItem::make(
            //        static fn() => __('moonshine::ui.resource.admins_title'),
            //        new MoonShineUserResource()
            //    ),
            //    MenuItem::make(
            //        static fn() => __('moonshine::ui.resource.role_title'),
            //        new MoonShineUserRoleResource()
            //    ),
            // ]),
            MenuItem::make(
                'Статьи',
                new PostResource
            )->icon('heroicons.book-open'),
            MenuItem::make(
                'Тарифы',
                new PriceResource
            )->icon('heroicons.banknotes'),
            MenuItem::make(
                'Галерея',
                new PhotoResource
            )->icon('heroicons.photo'),
            MenuItem::make(
                'Доп занятия',
                new AdditionalClassResource
            )->icon('heroicons.squares-plus'),
            MenuItem::make(
                'Команда',
                new WorkerResource
            )->icon('heroicons.users'),
            MenuItem::make(
                'Отзывы',
                new ReviewResource
            )->icon('heroicons.book-open'),
            MenuItem::make(
                'Спецпредложения',
                new PromotionResource
            )->icon('heroicons.currency-dollar'),
            MenuItem::make(
                'Вопросы и ответы',
                new QuestionResource
            )->icon('heroicons.question-mark-circle'),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
