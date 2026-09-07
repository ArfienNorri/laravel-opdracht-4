<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    return [
        "Uranus",
        "Jupiter",
        "Mars",
        "Aarde",
        "Saturnus",
        "Pluto",
        "Neptunus",
        "Venus"
    ];
});