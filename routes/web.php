<?php

use App\Livewire\Pages\ContactPage;
use App\Livewire\Pages\AboutPage;
use Illuminate\Support\Facades\Route;

Route::get('/', AboutPage::class)->name('about');
Route::get('/contact', ContactPage::class)->name('contact');

// Route::get('/', function () {
//     return view('home');
// });
