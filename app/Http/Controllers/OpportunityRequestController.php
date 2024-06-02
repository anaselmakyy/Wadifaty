<?php

namespace App\Http\Controllers;

use App\Models\OpportunityRequest;
use Illuminate\Http\Request;

class OpportunityRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OpportunityRequest::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = OpportunityRequest::create($request->all());
        return response()->json(['message' => 'Request Created Successfuly' , 'data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OpportunityRequest $opportunityRequest)
    {
        return $opportunityRequest;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpportunityRequest $opportunityRequest)
    {
        $opportunityRequest->update($request->all());
        return response()->json(['message' => 'Request Updated Successfuly' , 'data' => $opportunityRequest]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpportunityRequest $opportunityRequest)
    {
        $opportunityRequest->delete();
        return response()->json(['message' => 'Request Deleted Successfuly']);
    }
}
