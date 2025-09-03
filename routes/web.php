<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
    'oiiii'
});

require __DIR__.'/auth.php';
