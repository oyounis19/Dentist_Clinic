<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/service/exams', function(){
    return view('services');
});

Route::get('/service/cleaning', function(){
    return view('services');
});

Route::get('/service/tooth-extraction', function(){
    return view('services');
});

Route::get('/service/root-canal', function(){
    return view('services');
});
