<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer; 

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all(); 
        return response()->json($trainers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required|string|max:255",
            "age" => "required|string|max:3", 
            "height" => "required|string|max:10", 
            "weight" => "required|string|max:10",
            "cpf" => "required|string|max:14", 
            "rg" => "required|string|max:20" 
        ]);

        $trainer = Trainer::create($validateData);
        return response()->json($trainer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::find($id);
        if (!$trainer) {
            return response()->json(["message" => "Trainer not found"], 404);
        }
        return response()->json($trainer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainer = Trainer::find($id);
        if (!$trainer) {
            return response()->json(["message" => "Trainer not found"], 404); 
        }

        $validateData = $request->validate([
            "name" => "required|string|max:255",
            "age" => "required|string|max:3", 
            "height" => "required|string|max:10", 
            "weight" => "required|string|max:10", 
            "cpf" => "required|string|max:14", 
            "rg" => "required|string|max:20" 
        ]);

        $trainer->update($validateData);
        return response()->json($trainer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        if (!$trainer) {
            return response()->json(["message" => "Trainer not found"], 404); 
        }
        
        $trainer->delete();
        return response()->json(["message" => "Trainer deleted successfully"], 200); 
    }
}
