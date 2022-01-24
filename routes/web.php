<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'home@homePage') -> name('home');

Route::get('/comic', 'home@comicPage') -> name('comic');




