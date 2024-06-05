<?php

use App\Models\AdditionalClass;
use App\Models\Photo;
use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;

if (! function_exists('price')) {
    function price(string $slug): Price
    {
        if (cache()->has('prices')) {
            $prices = cache()->get('prices');
        } else {
            $prices = Price::all();
            cache()->put('prices', $prices, now()->addDay());
        }

        return $prices->where('slug', $slug)->first();
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
