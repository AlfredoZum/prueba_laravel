<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/employee', [EmployeeController::class, 'index'] )->name('employee');
Route::middleware(['auth:sanctum', 'verified'])->get('/employee/create', [EmployeeController::class, 'create'] )->name('employee.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/employee/store', [EmployeeController::class, 'store'] )->name('employee.store');

