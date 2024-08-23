<?php

namespace App\Http\Controllers;

use App\Models\Quy;
use Illuminate\Http\Request;

class QuyController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $quys = Quy::all();
        return response()->json($quys);
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|string',
        ]);

        $quy = Quy::create($request->all());
        return response()->json(['message' => 'Quy created successfully.', 'data' => $quy], 201);
    }

    // Display the specified resource
    public function show(Quy $quy)
    {
        return response()->json($quy);
    }

    // Update the specified resource in storage
    public function update(Request $request, Quy $quy)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|string',
        ]);

        $quy->update($request->all());
        return response()->json(['message' => 'Quy updated successfully.', 'data' => $quy]);
    }

    // Remove the specified resource from storage
    public function destroy(Quy $quy)
    {
        $quy->delete();
        return response()->json(['message' => 'Quy deleted successfully.']);
    }
}
