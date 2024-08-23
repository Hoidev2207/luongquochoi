<?php

namespace App\Http\Controllers;

use App\Models\LuongQuocHoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LuongQuocHoiController extends Controller
{
    // GET /api/luongquochoi
    public function index()
    {
        $luongQuocHoi = LuongQuocHoi::all();
        return response()->json($luongQuocHoi);
    }

    // POST /api/luongquochoi
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $luongQuocHoi = LuongQuocHoi::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json($luongQuocHoi, 201);
    }

    // GET /api/luongquochoi/{id}
    public function show($id)
    {
        $luongQuocHoi = LuongQuocHoi::find($id);

        if (!$luongQuocHoi) {
            return response()->json(['error' => 'LuongQuocHoi not found'], 404);
        }

        return response()->json($luongQuocHoi);
    }

    // PUT /api/luongquochoi/{id}
    public function update(Request $request, $id)
    {
        $luongQuocHoi = LuongQuocHoi::find($id);

        if (!$luongQuocHoi) {
            return response()->json(['error' => 'LuongQuocHoi not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $luongQuocHoi->update($request->only([
            'name',
            'description',
        ]));

        return response()->json($luongQuocHoi);
    }

    // DELETE /api/luongquochoi/{id}
    public function destroy($id)
    {
        $luongQuocHoi = LuongQuocHoi::find($id);

        if (!$luongQuocHoi) {
            return response()->json(['error' => 'LuongQuocHoi not found'], 404);
        }

        $luongQuocHoi->delete();

        return response()->json(['message' => 'LuongQuocHoi deleted successfully'], 200);
    }
}
