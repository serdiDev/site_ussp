<?php

use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\PreinscriptionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/dashboard', [PreinscriptionController::class, 'listPresc'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//FORMATION
Route::get('/cours', [ProgrammeController::class, 'index']);
Route::get('/detailFormation/{id}', [ProgrammeController::class, 'ProgOpt']);

//ACTUALITE
Route::get('/evenements', function () { return view('pages.events'); });

//ETABLISSEMENT 
Route::get('/departements', [EcoleController::class, 'index']);
Route::get('/detail/{id}', [EcoleController::class, 'EcoleProg']);

//AUTRES
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/message_du_recteur', function () { return view('pages.aboutrectormessage'); });
Route::get('/nos_missions', function () { return view('pages.aboutvisionmission'); });
Route::get('/la_galerie', function () { return view('pages.gallery'); });
Route::post('/inscription', [RegisteredUserController::class, 'store']);
Route::post('/connexion', [AuthenticatedSessionController::class, 'store']);

//PREINSCRIPTION 
Route::get('/admissions', [PreinscriptionController::class, 'index']);
Route::post('/validerForm', [PreinscriptionController::class, 'store']);
