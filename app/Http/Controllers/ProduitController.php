<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return Produit::with(['variantes', 'promotions', 'images'])->get();
    }

    public function store(Request $request)
    {
        $produit = Produit::create($request->all());
        return response()->json($produit, 201);
    }

    public function show($id)
    {
        return Produit::with(['variantes', 'promotions', 'images'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return response()->json($produit, 200);
    }

    public function destroy($id)
    {
        Produit::destroy($id);
        return response()->json(null, 204);
    }
}