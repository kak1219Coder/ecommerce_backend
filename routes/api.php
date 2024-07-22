<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VarianteProduitController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ImageProduitController;

Route::apiResource('produits', ProduitController::class);
Route::apiResource('variantes', VarianteProduitController::class);
Route::apiResource('promotions', PromotionController::class);
Route::apiResource('images', ImageProduitController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
