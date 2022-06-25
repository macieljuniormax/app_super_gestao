<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PrincipalController::class, "principal"])->name('site.index');
Route::get("/sobre-nos", [SobreNosController::class, "sobreNos"])->name("site.sobrenos");
Route::get("/contato", [ContatoController::class, "contato"])->name("site.contato");

Route::get("/login", [LoginController::class, "contato"])->name("site.login");

Route::prefix("/app")->group(function () {
    Route::get("/clientes", [ClientesController::class, "clientes"])->name("app.clientes");
    Route::get("/forncecedores", [FornecedoresController::class, "fornecedores"])->name("app.fornecedores");
    Route::get("/produtos", [ProdutosController::class, "produtos"])->name("app.produtos");
});

Route::fallback(function () {
    echo "A rota acessada não existe. <a href='" . route('site.index') . "'>Clique aqui para voltar a página inicial</a>";
});
