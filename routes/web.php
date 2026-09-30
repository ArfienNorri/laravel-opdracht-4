<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Bestaande route voor het overzicht van alle planeten
Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System.',
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far inhabited by living things.',
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
        ],
    ];

    $collection = collect($planets);

    if (request()->has('planeet')) {
        $collection = $collection->where('name', ucfirst(request('planeet')));
    }

    return view('planets', ['planets' => $collection]);
});

Route::get('/planets/{planet}', function ($planet) {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System.',
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far inhabited by living things.',
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
        ],
    ];

    $collection = collect($planets);
    $selectedPlanet = $collection->firstWhere('name', ucfirst($planet));

    if (!$selectedPlanet) {
        abort(404);
    }

    return view('planet', ['planet' => $selectedPlanet]);
});