<?php

use Illuminate\Support\Facades\Route;


Route::name('home_path')->get('/','Pagescontroller@home');

Route::name('about_path')->get('/about','Pagescontroller@about');
