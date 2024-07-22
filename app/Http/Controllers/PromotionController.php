<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        return response()->json($promotion, 201);
    }

    public function destroy($id)
    {
        Promotion::destroy($id);
        return response()->json(null, 204);
    }

}