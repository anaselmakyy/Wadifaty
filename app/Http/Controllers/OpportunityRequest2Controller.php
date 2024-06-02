<?php

namespace App\Http\Controllers;

use App\Models\OpportunityRequest2;
use Illuminate\Http\Request;

class OpportunityRequest2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OpportunityRequest2::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = OpportunityRequest2::create($request->all());
        return response()->json(['message' => 'Request Created Successfuly' , 'data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OpportunityRequest2 $opportunityRequest2)
    {
        return $opportunityRequest2;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpportunityRequest2 $opportunityRequest2)
    {
        $opportunityRequest2->update($request->all());
        return response()->json(['message' => 'Request Updated Successfuly' , 'data' => $opportunityRequest2]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpportunityRequest2 $opportunityRequest2)
    {
        $opportunityRequest2->delete();
        return response()->json(['message' => 'Request Deleted Successfuly']);
    }
}
