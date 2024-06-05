<?php

use App\Models\Price;

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
