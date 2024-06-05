<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/schedule', 'schedule')->name('schedule');
Route::view('/price', 'price')->name('price');
Route::view('/conditions', 'conditions')->name('conditions');
Route::view('/faq', 'faq')->name('faq');
Route::view('/groups/kittens', 'groups.kittens')->name('groups.kittens');
Route::view('/groups/cat', 'groups.cat')->name('groups.cat');
Route::view('/additional', 'additional')->name('additional');
Route::view('/sale', 'sale')->name('sale');
Route::view('/mother-capital', 'mothers-cap')->name('mothers-cap');
Route::view('/food', 'food')->name('food');

Route::controller(PostController::class)
    ->group(function () {
        Route::get('/blog', 'index')->name('posts.index');
        Route::get('/blog/{post:slug}', 'show')->name('posts.show');
    });

Route::post('request', [RequestController::class, 'send'])->name('request.send');
