<?php

namespace App\Http\Controllers;

use App\Models\WorkOffer;
use Illuminate\Http\Request;

class WorkOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WorkOffer::all();
    }

    public function store(Request $request)
    {
        $WorkOffer = WorkOffer::create($request->all());
        return response()->json(['message'=> 'Opportunity Successfult Created' , 'data'=> $WorkOffer]);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkOffer $workOffer)
    {
        return $workOffer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkOffer $workOffer)
    {
        $workOffer->update($request->all());
        return response()->json(['message'=> 'Opportunity Successfully Updated' , 'data'=> $workOffer]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkOffer $workOffer)
    {
        $workOffer->delete();
        return response()->json(['message'=> 'Opportunity Successfult Deleted']);
    }
}
