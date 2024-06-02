<?php

namespace App\Http\Controllers;

use App\Models\OpportunityRequest3;
use Illuminate\Http\Request;

class OpportunityRequest3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OpportunityRequest3::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = OpportunityRequest3::create($request->all());
        return response()->json(['message' => 'Request Created Successfuly' , 'data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OpportunityRequest3 $opportunityRequest3)
    {
        return $opportunityRequest3;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpportunityRequest3 $opportunityRequest3)
    {
        $opportunityRequest3->update($request->all());
        return response()->json(['message' => 'Request Updated Successfuly' , 'data' => $opportunityRequest3]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpportunityRequest3 $opportunityRequest3)
    {
        $opportunityRequest3->delete();
        return response()->json(['message' => 'Request Deleted Successfuly']);
    }
}
