<?php

use Illuminate\Support\Facades\Route;

// Dynamic robots.txt route
Route::get('/robots.txt', function () {
    return response(view('dgo::robots'), 200, ['Content-Type' => 'text/plain']);
});
