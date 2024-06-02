<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\WorkOppotunity;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Job::all();
        if($result){
            return $result;
        }
        return response()->json(['message' => 'No Jobs']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = Job::create($request->all());
        return response()->json(['message' => 'Job created successfully', 'data' => $job], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return $job;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
        return response()->json(['message' => 'Job updated successfully', 'data' => $job]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return response()->json(['message' => 'Job Deleted Successfuly' , 'data' => $job]);
    }
}
