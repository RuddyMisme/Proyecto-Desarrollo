<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\ListarCursoController;
use App\Http\Controllers\ListarExpositorController;
use App\Http\Controllers\MetricasController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[MetricasController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/metricas', [MetricasController::class, 'index'])->name('metricas.index');
    Route::get('/prueba', [MetricasController::class, 'prueba'])->name('prueba');

    // Rutas para API
Route::resource('usuarios', UsuarioController::class);
Route::resource('areas', AreaController::class);
Route::resource('cursos', CursoController::class);
Route::resource('pagos', PagoController::class);
Route::resource('inscripciones', InscripcionController::class);
Route::resource('certificados', CertificadoController::class);
Route::resource('listar_cursos', ListarCursoController::class);
Route::resource('listar_expositores', ListarExpositorController::class);

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');
Route::put('/password', [PasswordController::class, 'update'])->name('password.update');

});


require __DIR__.'/auth.php';