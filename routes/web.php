<?php

use App\Http\Controllers\InicialController;
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

/* Vamos a routear a un controlador para obtener las variables en la vista */

// Route::get('/', function () {
//     return view('index', ['dato'=>5]);
// });

//sin LOGIN
Route::get('/', [InicialController::class, 'index']);

//con LOGIN
// Route::middleware(['auth:sanctum', 'verified'])->get('/', [InicialController::class, 'index']);