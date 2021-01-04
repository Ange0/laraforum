<?php

use App\Http\Controllers\TopicController;
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
Route::get('/',[TopicController::class,'index']);
/* Route::get('/',[TopicController::class,'show'])->name('topics.index'); */ // je gere ici la methode index manuellement ici
Route::resource('topics',TopicController::class)->except(['index']); // JE VEUX PAS MAPPER AUSSI LA METHODE INDEX PAR CE QUE JE VEUX PAS PARTI CHAQUE FOIS SUR localhost:8000/topics pour avoir la liste des topics suivant la methode get
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
