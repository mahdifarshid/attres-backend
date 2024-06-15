<?php

namespace App\Http\Controllers\api;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $like = Like::create($request->all());
        return response()->json($like, 201);
    }

    public function destroy($id)
    {
        Like::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}