<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('pages.signin');
});

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');

Route::get("/home", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'nameMhs' => $faker->name,
            'nameKry' => $faker->name,
        ];
    };
    return view("pages.home.index", ['contacts' => $contacts]);
})->name('home');