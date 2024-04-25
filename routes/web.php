<?php

use App\Livewire\Pages\AboutPage;
use App\Livewire\Pages\ContactPage;
use App\Livewire\Pages\ProjectsPage;
use App\Livewire\Pages\ResumePage;
use Illuminate\Support\Facades\Route;

Route::get('/', AboutPage::class)->name('about');
Route::get('/resume', ResumePage::class)->name('resume');
Route::get('/projects', ProjectsPage::class)->name('projects');
Route::get('/contact', ContactPage::class)->name('contact');
