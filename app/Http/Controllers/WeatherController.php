<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clima = Weather::all("date", "lat", "lon", "city", "state", "temperature");
        return response()->json($clima);
    }

    public function indexid()
    {
        $clima = Weather::all("id", "date", "lat", "lon", "city", "state", "temperature");
        return response()->json($clima);
    }

    public function findget($id)
    {
        $clima = Weather::find($id);
        if ($clima) {
            return response()->json($clima);
        } else {
            return response()->json("404");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $weather = new Weather;
        $weather->id = $request->id;
        $weather->date = $request->date;
        $weather->lat = $request->lat;
        $weather->lon = $request->lon;
        $weather->city = $request->city;
        $weather->state = $request->state;
        $weather->temperature = $request->temperature;

        $weather->save();
        return response()->json("201");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function edit(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        $clima = Weather::all("id", "date", "lat", "lon", "city", "state", "temperature");
        return response()->json($clima);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clima = Weather::find($id);
        if ($clima) {
            $clima = Weather::destroy($id);
            return response()->json("204");
        } else {
            return response()->json("404");
        }
    }
}
