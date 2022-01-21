<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
}) -> name('home');

Route::get('/comic', function () {
    return view('pages.comic');
}) -> name('comic');


