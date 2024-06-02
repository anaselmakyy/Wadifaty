<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Opportunity::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Opportunity::create($request->all());
        return response()->json(['message' => 'Opportunity Created Successfuly' , 'data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Opportunity $opportunity)
    {
        return $opportunity;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Opportunity $opportunity)
    {
        $result = $opportunity->update($request->all());
        return response()->json(['message' => 'Opportunity Updated Successfuly' , 'data' => $opportunity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Opportunity $opportunity)
    {
        $opportunity->delete();
        return response()->json(['message' => 'Opportunity Deleted Successfuly']);
    }
}
