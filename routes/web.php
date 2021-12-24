<?php

use App\Http\Livewire\Tabler\Index;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', Index::class)->name('tabler.index');
// Route::get('erp/clients', Index::class)->name('tabler.index');
// Route::get('erp/projets', Index::class)->name('tabler.index');
// Route::get('erp/projet', Index::class)->name('tabler.index');
// Route::get('erp/devis', Index::class)->name('tabler.index');
