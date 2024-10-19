<?php

namespace App\Http\Controllers\Api;

use App\Models\Airport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lamamos a todos los registros de la tabla
        $airports = Airport::all();
        return $airports;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $airport = new Airport();
        $airport->city = $request->city;
        $airport->name = $request->name;
        $airport->country = $request->country;
        $airport->iata = $request->iata;

        $airport->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $airport = Airport::find($id);
        return $airport;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $airport = Airport::findOrFail($request->$id);
        $airport->city = $request->city;
        $airport->name = $request->name;
        $airport->country = $request->country;
        $airport->iata = $request->iata;

        $airport->save();
        return $airport;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $airport = Airport::destroy($id);
        return $airport;
    }
}
