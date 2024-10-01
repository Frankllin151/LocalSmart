<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Manutencao;

Route::get('/', function () {
    return view('welcome');
});

// Rota protegida para administradores
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Outras rotas protegidas para admins
    Route::get('/admin/adicionar' , [AdminController::class, 'adicionarApartamento'])->name('admin.adicionar');
    Route::post('/admin/adicionar' , [AdminController::class, 'adicionarImoveis'])->name('admin.adicionarpost');
    Route::get('/admin/todosap' , [AdminController::class, 'todosAp'])->name('admin.todosap');
    /// editar apartamento
    Route::get('/admin/{id}/editar', [AdminController::class, 'editarAp'])->name('admin.editar');
    Route::put('/admin/{id}/atualizar', [AdminController::class, 'Atualizar'])->name('admin.atualizar');
    // excluir apartamento
    Route::delete('/admin/{id}/excluir', [AdminController::class, 'excluirAp'])->name('admin.excluir');

    // inquilinos 
    Route::get('/admin/inquilinos' , [AdminController::class , 'inquIlinos'])
    ->name('admin.inquilinos');

    // contralto inquilino 
    Route::get('/admin/contralto' , [AdminController::class, 'contraltoInquilino'])->name('admin.contralto');
    Route::get('/admin/addcontralto' , [AdminController::class, 'armazernaContralto'])->name('admin.addcontralto');
    Route::post('/admin/armazendadoscontralto', [AdminController::class , 'salveContralto'])->name('admin.postcontralto');
});

Route::get('/dashboard', [HomeController::class , 'PainelAdmin'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard/manutencaoinquilino' , [Manutencao::class , 'index'])->name('manutencaoinquilino');
});

require __DIR__.'/auth.php';