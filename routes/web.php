<?php

use App\Http\Livewire\Tabler\Index;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', Index::class)->name('index');
