<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.app');
Route::view('/Appointment', 'pages.Appointment')->name( 'pages.Appointment');
