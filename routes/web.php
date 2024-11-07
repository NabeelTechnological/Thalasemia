<?php
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteStatisticController;

Route::get('/', [WebsiteStatisticController::class, 'addView'])->name('home');
Route::post('/button-click', [WebsiteStatisticController::class, 'addButtonClick'])->name('button.click');


Route::get('/', function () {
    return view('home');
})->name('welcome');
Route::get('/donors', function () {
    return view('donors');
})->name('donors');
Route::get('/donor', function () {
    return view('donor');
})->name('donor');
Route::get('/rangking', function () {
    return view('rangking');
})->name('rangking');
Route::get('/ulasan', function () {
    return view('ulasan');
})->name('ulasan');

