<?php

use App\Http\Controllers\CalculatorController;
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

//Route::get('/', function () {
//    $number = 1234321;
//    return view('welcome');
//});

Route::get('/', [CalculatorController::class, 'showCalculator']);
Route::post('save', [CalculatorController::class, 'saveCalculator'])->name('save.calc');

Route::get('palindrome', [CalculatorController::class, 'palindrome'])->name('palindrome');
Route::get('reverse-string', [CalculatorController::class, 'reverseString']);
