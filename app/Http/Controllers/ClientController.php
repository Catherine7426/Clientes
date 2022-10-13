<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveClientRequest;

use App\Models\City;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ClientController extends Controller
{
    public function __construct()
    
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    
     {  
  
     
        $buscarpor=$request->get('buscarpor');
        //$clients = DB::table('clients')->select('id','name','city_id')->where('city_id','LIKE','%'.$buscarpor.'%')->paginate(10);
        
        $clients = DB::table("clients")->join("cities", "clients.city_id", "=", "cities.id")->select("clients.*", "cities.name as city_name")->where('cities.name','LIKE','%'.$buscarpor.'%')->paginate(10);


        // $clients = Client::where('city_id','LIKE','%'.$buscarpor.'%')->paginate(10);
        
        
        //return $buscarpor;
       
 
        //return view('clientes.index', ['clients' => $clients,'cities'=>$cities] );
        return view ('clientes.index', compact('clients','buscarpor'));

        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();

        return view('clientes.create', compact('cities'),['client'=> new Client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(SaveClientRequest $request)

    {
        //  SE ENVIA AL SAVECLIENTREQUEST Q SE CREO

        // $validated=$request->validate([
            
        //     // 'name'=>['required'],
        //     // 'city_id'=>['required'],
        // ]);

          //SIN PONER VALIDATED AL INICIO DE REQUEST
        // $client = new Client;
        // $client->name=$request->input('name');
        // $client->city_id=$request->input('city_id');
        // $client->save();

          //O ASI MAS CORTO
        // Client::create([
        //     'name'=> $request->input('name'),
        //     'city_id'=> $request->input('city_id'),
        // ]);

          //PONIENDO VALIDATED
        Client::create($request->validated());



        //session()->flash('estado', 'Cliente creado satisfactoriamente');// Se reemplaza con el whith de abajo

        return to_route('clientes.index')->with('estado','Cliente creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Client $client,City $city)
    {
        $cities=City::all();

         return view('clientes.show',compact('cities'),['client'=>$client,'city'=>$city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client,City $city)
    {
        $cities=City::all();
        return view('clientes.edit', compact('cities'),['client'=>$client,'city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveClientRequest $request,Client $client,City $city)
    {
        //  SE ENVIA AL SAVECLIENTREQUEST Q SE CREO
        // $validated=$request->validate([

            
        //     // 'name'=>['required'],
        //     // 'city_id'=>['required'],
        // ]);


            //SIN PONER VALIDATED AL INICIO DE REQUEST
        // $client->name=$request->input('name');
        // $client->city_id=$request->input('city_id');
        // $client->save();

            //O ASI MAS CORTO
        // $client->update([
        //     'name'=>$request->input('name'),
        //     'city_id'=>$request->input('city_id'),
        // ]);

            //PONIENDO VALIDATED
        $client->update($request->validated());

        //session()->flash('estado', 'Cliente actualizado satisfactoriamente');//se pone abajo con whit

        return to_route('clientes.index')->with('estado','Cliente actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clientes.index')->with('estado','Cliente eliminado satisfactoriamente');
    }
}
