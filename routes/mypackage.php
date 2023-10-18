<?php

use Illuminate\Support\Facades\Route;

// :uc:package route
Route::get('/:lc:package', function () {
    return view('dgo:::lc:package');
});
