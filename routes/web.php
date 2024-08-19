<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::view('/o-nas', 'about')->name('about');
Route::view('/programmy-raspisanie', 'schedule')->name('schedule');
Route::get('/stoimost', [PageController::class, 'price'])->name('price');
Route::view('/usloviya-priyema', 'conditions')->name('conditions');
Route::view('/faq', 'faq')->name('faq');
Route::view('/groups/kittens', 'groups.kittens')->name('groups.kittens');
Route::view('/groups/cat', 'groups.cat')->name('groups.cat');
Route::view('/zanyatiya', 'additional')->name('additional');
Route::view('/sale', 'sale')->name('sale');
Route::view('/materinskiy-kapital', 'mothers-cap')->name('mothers-cap');
Route::view('/menu', 'food')->name('food');

Route::controller(PostController::class)
    ->group(function () {
        Route::get('/blog', 'index')->name('posts.index');
        Route::get('/blog/{post:slug}', 'show')->name('posts.show');
    });

Route::post('request', [RequestController::class, 'send'])->name('request.send');
