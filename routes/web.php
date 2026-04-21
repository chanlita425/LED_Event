<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//=============== API ===============



//============= Frontend ===============
Route::get('/services', function () {
    return view('frontend.pages.services');
});
