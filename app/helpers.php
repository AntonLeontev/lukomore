<?php

use App\DTO\TariffColor;
use App\Models\AdditionalClass;
use App\Models\Photo;
use App\Models\Promotion;
use App\Models\Question;
use App\Models\Review;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

if (! function_exists('tariff_colors')) {
    function tariff_colors(): SupportCollection
    {
        return collect(config('setup.tariffs_colors'));
    }
}

if (! function_exists('tariff_color')) {
    function tariff_color(int $id): TariffColor
    {
        $colors = collect(config('setup.tariffs_colors'));

        $color = $colors->where('id', $id)->first();

        return TariffColor::fromConfig($color);
    }
}

if (! function_exists('gallary')) {
    function gallary(): Collection
    {
        if (cache()->has('gallary')) {
            $gallary = cache()->get('gallary');
        } else {
            $gallary = Photo::all();
            cache()->put('gallary', $gallary, now()->addDay());
        }

        return $gallary;
    }
}

if (! function_exists('additional_classes')) {
    function additional_classes(): Collection
    {
        if (cache()->has('additional_classes')) {
            $classes = cache()->get('additional_classes');
        } else {
            $classes = AdditionalClass::all();
            cache()->put('additional_classes', $classes, now()->addDay());
        }

        return $classes;
    }
}

if (! function_exists('team')) {
    function team(): Collection
    {
        if (cache()->has('team')) {
            $team = cache()->get('team');
        } else {
            $team = Worker::all();
            cache()->put('team', $team, now()->addDay());
        }

        return $team;
    }
}

if (! function_exists('reviews')) {
    function reviews(): Collection
    {
        if (cache()->has('reviews')) {
            $reviews = cache()->get('reviews');
        } else {
            $reviews = Review::all();
            cache()->put('reviews', $reviews, now()->addDay());
        }

        return $reviews;
    }
}

if (! function_exists('promotions')) {
    function promotions(): Collection
    {
        if (cache()->has('promotions')) {
            $promotions = cache()->get('promotions');
        } else {
            $promotions = Promotion::all();
            cache()->put('promotions', $promotions, now()->addDay());
        }

        return $promotions;
    }
}

if (! function_exists('questions')) {
    function questions(): Collection
    {
        if (cache()->has('questions')) {
            $questions = cache()->get('questions');
        } else {
            $questions = Question::all();
            cache()->put('questions', $questions, now()->addDay());
        }

        return $questions;
    }
}
