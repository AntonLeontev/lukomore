<?php

use Illuminate\Support\Facades\Route;
use MoonShine\Http\Middleware\Authenticate;
use UniSharp\LaravelFilemanager\Lfm;

Route::middleware('moonshine', Authenticate::class)->group(function () {
    Route::prefix('laravel-filemanager')->group(function () {
        Lfm::routes();
    });
});
