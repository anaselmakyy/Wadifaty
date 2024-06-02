<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return client::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = client::create($request->all());
        return response()->json(['message' => 'Client created successfully', 'data' => $client], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        return $client;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        $client->update($request->all());
        return response()->json(['message' => 'Client updated successfully', 'data' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $client->delete();
        return response()->json(['message' => 'Client deleted successfully']);
    }
}
