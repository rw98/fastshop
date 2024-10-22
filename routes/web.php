<?php

use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'merchant','as' => 'merchant.'],__DIR__."/merchant/merchant.php");
});
