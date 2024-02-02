<?php


use App\Http\Controllers\GestionProduitsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GestionProduitsController::class,'acceuil'])->name('produits.acceuil');
Route::get('/cart', [GestionProduitsController::class,'cart'])->name('produits.cart');
Route::post('/addtocart/{produit}', [GestionProduitsController::class,'addtocart'])->name('produits.addtocart');
Route::get('/produits/export', [GestionProduitsController::class,'export'])->name('produits.export');
Route::post('/produits/import', [GestionProduitsController::class,'import'])->name('produits.import');
Route::resource('/produits', GestionProduitsController::class);
