<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports = Sport::all();
        return response()->json($sports);
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
            "name"=> "required|string|max:255",
            "category" => "nullable|string"
        ] );

        $sport = Sport::create( $validateData);
        return response()->json($sport,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sport = Sport::find($id);
        if(!$sport){
            return response()->json(["messege" => "Sport not found"], 404);
        }
        return response()->json($sport);
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
        $sport = Sport::find($id);
        if(!$sport){
            return response()->json(["messege" => "Sport not found"], 404);
        }
        $validateData = $request->validate([
            "name"=> "required|string|max:255",
            "category" => "nullable|string"
        ] );
        $sport->update( $validateData);
        return response()->json($sport,0);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){

        $sport = Sport::find($id);

        if(!$sport){

            return response()->json(["messege"=> "Sport not found"],404);
            
    }
            $sport->delete();

            return response()->json(["messege"=> "Sport deleted successfully"],200);
}
}