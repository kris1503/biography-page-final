<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;

Route::prefix('biography')->group(function () 
{
    // Homepage or Biography page
    Route::get('/', [BioController::class, 'show'])->name('bio');

    // Skills page
    Route::get('/skills', [BioController::class, 'skills'])->name('skills');

    // Contact form page
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    // Handle contact form submission
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    // Show submitted contact messages (admin view)
    Route::get('/contacts', [ContactController::class, 'showContacts'])->name('contacts.index');
});
