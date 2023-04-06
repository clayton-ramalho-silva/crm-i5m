<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Painel\Index as PainelIndex;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'painel', 'as' => 'painel.'], function(){
        Route::get('/', PainelIndex::class);
    });
});
