<?php

namespace App\Http\Controllers;

use App\Models\VarianteProduit;
use Illuminate\Http\Request;

class VarianteProduitController extends Controller
{
    public function store(Request $request)
    {
        $variante = VarianteProduit::create($request->all());
        return response()->json($variante, 201);
    }

    public function destroy($id)
    {
        VarianteProduit::destroy($id);
        return response()->json(null, 204);
    }
}