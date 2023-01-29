<?php

namespace App\Http\Controllers;

use App\Models\Assento;
use App\Http\Requests\StoreAssentoRequest;
use App\Http\Requests\UpdateAssentoRequest;

class AssentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assentos = Assento::OrderBy('id_onibus')
                    ->OrderBy('id_viagem')
                    ->OrderBy('num_assento')->get();
        return view('assento.index',['assentos'=>$assentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        for ($n=1; $n<44; $n++){
            $assento = new Assento();
            $assento->id_onibus = 4;
            $assento->id_viagem = 0;
            $assento->num_assento = $n;
            $assento->save();
        }
        */
        return redirect()->route('principal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssentoRequest $request)
    {
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Http\Response
     */
    public function show(Assento $assento)
    {
        return view('escolher_poltrona', ['assento'=>$assento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Http\Response
     */
    public function edit(Assento $assento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssentoRequest  $request
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssentoRequest $request, Assento $assento)
    {
        
        $assento->fill($request->all()); 
        $assento->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assento  $assento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assento $assento)
    {
        //
    }
}
