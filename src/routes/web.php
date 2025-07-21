<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Alumni;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/alumni', function () {
    return view('alumni');
});
