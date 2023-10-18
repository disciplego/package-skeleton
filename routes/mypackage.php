<?php

use Illuminate\Support\Facades\Route;

// :uc:package route
Route::get('/:lc:package.txt', function () {
    return response(view('dgo:::lc:package'), 200, ['Content-Type' => 'text/plain']);
});
