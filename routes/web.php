<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name'=> 'ABD_ELHAQ AZROUR',
        'tecknologies' => [
          'Laravel_11', 'Vue3', 'ReactJs' , 'Docker'
        ],
    ]);
});
