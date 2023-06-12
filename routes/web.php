<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('bienvenida');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';


route::middleware('auth')->group(function(){
    route::resource('Projects',ProjectController::class);
});


route::get('/inicio',[ProjectController::class,'index']);
route::any('/crear',[ProjectController::class,'create']);
//route::POST('/crear',[ProjectController::class,'create']);
route::any('/actualizar',[ProjectController::class,'update']);
route::any('/insertar',[ProjectController::class,'store']);
route::any('/borrar',[ProjectController::class,'destroy']);
//route::resource('/Proyecto','Project');
route::any('/index',[ProjectController::class,'indexT']);
route::any('/ActualizarT',[ProjectController::class,'updateT']);

//route::get('/pdf',[App\Http\Controllers\ProjectController::class,'getPDF']->name('productos.pdf'));
//Route::name('getPDF')->get('/pdf', 'ProjectController@getPDF');
route::any('/pdf',[ProjectController::class,'getPDF']);
