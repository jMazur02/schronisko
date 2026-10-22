<?php
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('index');
});
Route::get('/zaadoptuj', function () {
    return view('zaadoptuj');
});
Route::get('/onas', function () {
    return view('onas');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/panel', [DashboardController::class, 'index']);
    Route::post('/panel/status/{id}', [DashboardController::class, 'updateStatus']);
    Route::delete('/panel/delete/{id}', [DashboardController::class, 'delete']);
});

Route::post('/zaadoptuj', [AdoptionController::class, 'store']);
Route::get('/zwierzaki', [PetController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
