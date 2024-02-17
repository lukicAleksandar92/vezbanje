<?php

use App\Http\Controllers\OceneController;
use App\Models\Ocene;
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

Route::get('/', function () {
    $ocene = Ocene::orderBy('id', 'desc')->get()->all();

    return view('welcome', compact('ocene'));
});

Route:: view('/dodaj-ocenu', 'addGrade');


Route::post("/sacuvaj-ocenu", [OceneController::class, 'sacuvajNovuOcenu']);
