<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // optional; can use global helper inertia()

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// vue pages are case sensitive with vite !

Route::get('/', function () {
//    return Inertia::render('Welcome');
    return inertia('Welcome'); // vue pages are case sensitive with vite !
});

Route::get('/badass', function () {
    return inertia('Badass', [
        'name' => 'Anya Taylor-Joy'
    ]);
});
