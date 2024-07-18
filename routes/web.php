<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;

Route::get('/search/local/{ceps}', [CepController::class, 'search']);

Route::get('/', function () {
    return "Teste API CEP - Laravel 11";
});
