<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtributoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HabilidadeController;
use App\Http\Controllers\ConceitoController;
use App\Http\Controllers\PredadorController;
use App\Http\Controllers\DisciplinaController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [UsuarioController::class, 'principal'])->name('site.index'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('atributo', AtributoController::class);
    Route::get('/atributos', [AtributoController::class, 'listar'])->name('atributo.listar');
    Route::resource('habilidade', HabilidadeController::class);
    Route::get('/habilidades', [HabilidadeController::class, 'listar'])->name('habilidade.listar');
    Route::resource('conceito', ConceitoController::class);
    Route::get('/conceitos', [ConceitoController::class, 'listar'])->name('conceito.listar');
    Route::resource('predador', PredadorController::class);
    Route::get('/predadores', [PredadorController::class, 'listar'])->name('predador.listar');
    Route::resource('cla', ClaController::class);
    Route::get('/clas', [ClaController::class, 'listar'])->name('cla.listar');
    Route::resource('disciplina', DisciplinaController::class);
    Route::get('/disciplinas', [DisciplinaController::class, 'listar'])->name('disciplina.listar');

    
    
});






require __DIR__.'/auth.php';
