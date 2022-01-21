<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $comics;
    $comics = [
        [
            'name' => 'spiderman',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman',
            'img' => 'img/spiderman.png'
        ],
    ];
    $name = "Maurizio";
    return view('pages.home', compact('comics'));
}) -> name('home');

Route::get('/comic', function () {
    return view('pages.comic');
}) -> name('comic');




