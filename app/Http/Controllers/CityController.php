<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCityRequest;
use App\Models\City;
use Illuminate\Http\Request;




class CityController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        
        return view ('ciudades.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ciudades.create',['city'=> new City]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCityRequest $request)
    {
        City::create($request->validated());
        return to_route('ciudades.index')->with('estado','Ciudad creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        
         return view('ciudades.show',['city'=>$city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)

    {
      
        return view('ciudades.edit',['city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCityRequest $request,City $city)
    {
        $city->update($request->validated());

        return to_route('ciudades.index')->with('estado','Ciudad actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return to_route('ciudades.index')->with('estado','Ciudad eliminada satisfactoriamente');
    }
}
