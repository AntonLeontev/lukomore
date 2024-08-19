<?php

namespace App\Http\Controllers;

use App\Models\Price;

class PageController extends Controller
{
    public function price()
    {
        $tariffs = Price::where('enabled', true)
            ->orderBy('position')
            ->get();

        return view('price', compact('tariffs'));
    }
}
