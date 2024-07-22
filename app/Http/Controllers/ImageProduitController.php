<?php

namespace App\Http\Controllers;

use App\Models\ImageProduit;
use Illuminate\Http\Request;

class ImageProduitController extends Controller
{
    public function store(Request $request)
    {
        $image = ImageProduit::create($request->all());
        return response()->json($image, 201);
    }

    public function destroy($id)
    {
        ImageProduit::destroy($id);
        return response()->json(null, 204);
    }
}