<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgProduit\Controllers\ProductController;




Route::get('/' , function(){
    return view('PkgProduit::test');
});




Route::get('/produits', [ProductController::class, 'index'])->name('produits.index');


