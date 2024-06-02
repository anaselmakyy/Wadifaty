<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function index()
    {
        $result = Work::all();
        if($result){
            return $result;
        }
        return response()->json(['message' => 'No Opportunity']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $work = Work::create($request->all());
        return response()->json(['message'=> 'Opportunity Successfult Created' , 'data'=> $work]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        $workfinded = $work;
        if($workfinded){
            return $work;
        }
        else{
            return response()->json(['message'=> 'No Opportunity With This ID']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        $work->update($request->all());
        return response()->json(['message'=> 'Opportunity Successfully Updated' , 'data'=> $work]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return response()->json(['message'=> 'Opportunity Successfult Deleted']);
    }
}
