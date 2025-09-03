<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/calendar', function () {
    return view('calendar.calendar');
})->name('calendar');