<?php

use App\Http\Controllers\Site\ClientController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contato', [HomeController::class, 'contact'])->name('contact');
Route::get('/Perguntas-frequentes', [HomeController::class, 'faq'])->name('faq');
Route::get('/sobre-nos', [HomeController::class, 'about'])->name('about');
Route::get('realizar-orcamento', [ClientController::class, 'budget'])->name('budget');

Route::post('/store', [ClientController::class, 'store'])->name('store');
Route::post('/store-budget', [ClientController::class, 'storeBudget'])->name('store-budget');


