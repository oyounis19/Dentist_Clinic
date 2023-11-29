<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showhomePage'])->name('home');

Route::get('/about',[UserController::class, 'showAboutUsPage'])->name('about');

Route::get('/contact',[UserController::class, 'showcontactPage'])->name('contact');

Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/service/exams', function(){
    return view('service_single');
})->name('service.exams');

Route::get('/service/cleaning', function(){
    return view('service_single');
})->name('service.cleaning');

Route::get('/service/tooth-extraction', function(){
    return view('service_single');
})->name('service.tooth-extraction');

Route::get('/service/root-canal', function(){
    return view('service_single');
})->name('service.root-canal');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/contact/submit', [AppointmentController::class, 'reserve'])->name('contact.submit');

Route::get('/user/{id}/appointments', [AppointmentController::class, 'list'])->name('appointments');
