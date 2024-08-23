<?php

namespace App\Http\Controllers;

use App\Models\Huyloc;
use Illuminate\Http\Request;

class HuyLocApiController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $huylocs = Huyloc::all();
        return response()->json($huylocs);
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'pricedecimal' => 'required|numeric|between:0,999999.99',
            'image' => 'nullable|string|max:255',
        ]);

        $huyloc = Huyloc::create($request->all());

        return response()->json($huyloc, 201);
    }

    // Display the specified resource
    public function show(Huyloc $huyloc)
    {
        return response()->json($huyloc);
    }

    // Update the specified resource in storage
    public function update(Request $request, Huyloc $huyloc)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'pricedecimal' => 'required|numeric|between:0,999999.99',
            'image' => 'nullable|string|max:255',
        ]);

        $huyloc->update($request->all());

        return response()->json($huyloc);
    }

    // Remove the specified resource from storage
    public function destroy(Huyloc $huyloc)
    {
        $huyloc->delete();

        return response()->json(null, 204);
    }
}
