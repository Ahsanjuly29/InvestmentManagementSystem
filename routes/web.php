<?php

use App\Http\Controllers\Investment\LenderController;
use Illuminate\Support\Facades\Route;

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
use App\Livewire\Counter;

Route::get('/counter', Counter::class);

Route::get('/', function () {
    return view('master');
});

Route::get('/c', [LenderController::class, 'x']);


use Illuminate\Support\Facades\Cache;

Route::get('/cache-test', function () {

    Cache::put('my-key', 'Hello, Redis!', 60);
    $value = Cache::get('my-key');
    return $value;
});
