<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/services', 'pages.services')->name('services');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/mentions-legales', 'pages.legal')->name('mentions-legales');
Route::post('/contact', [ContactController::class, 'postContact'])->name('contact.post');
