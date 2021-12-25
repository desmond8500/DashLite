<?php

use App\Http\Livewire\Tabler\Erp\Clients;
use App\Http\Livewire\Tabler\Erp\Devis;
use App\Http\Livewire\Tabler\Erp\Projet;
use App\Http\Livewire\Tabler\Erp\Projets;
use App\Http\Livewire\Tabler\Index;
use App\Http\Livewire\Tabler\Stock\Article;
use App\Http\Livewire\Tabler\Stock\Articles;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', Index::class)->name('tabler.index');
Route::get('erp/clients', Clients::class)->name('tabler.clients');
Route::get('erp/projets', Projets::class)->name('tabler.projets');
Route::get('erp/projet', Projet::class)->name('tabler.projet');
Route::get('erp/devis', Devis::class)->name('tabler.devis');
Route::get('stock/articles', Articles::class)->name('tabler.articles');
Route::get('stock/articles', Article::class)->name('tabler.article');
