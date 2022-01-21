<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $comics;
    $comics = [
        [
            'name' => 'spiderman 1',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 2 ',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 3',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 4',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 5',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 6',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 7',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 8',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 9',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 10',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 11',
            'img' => 'img/spiderman.png'
        ],
        [
            'name' => 'spiderman 12',
            'img' => 'img/spiderman.png'
        ],
    ];
    $name = "Maurizio";
    return view('pages.home', compact('comics'));
}) -> name('home');

Route::get('/comic', function () {
    return view('pages.comic');
}) -> name('comic');




