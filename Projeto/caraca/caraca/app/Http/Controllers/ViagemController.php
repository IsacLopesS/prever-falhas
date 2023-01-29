<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use App\Http\Requests\StoreViagemRequest;
use App\Http\Requests\UpdateViagemRequest;

class ViagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viagem = Viagem::OrderBy('data_hora')->get();
        return view('viagem.index',['viagem'=>$viagem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$viagem = new Viagem;
        $viagem->data_hora = '2022-07-02 18:30:00';
        $viagem->destino = 'Joao Monlevade';
        $viagem->id_onibus = 1;
        $viagem->origem = 'Belo Horizonte';
        $viagem->preço = 'R$ 60,00';
        $viagem->save();

        $viagem2 = new Viagem;
        $viagem2->data_hora = '2022-07-02 18:30:00';
        $viagem2->destino = 'Vitória ES';
        $viagem2->id_onibus = 1;
        $viagem2->origem = 'Belo Horizonte';
        $viagem2->preço = 'R$ 170,00';
        $viagem2->save();*/

        return redirect()->route('principal');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreViagemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViagemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function show(Viagem $viagem)
    {
        return view('escolher_poltrona',['viagem'=>$viagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Viagem $viagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateViagemRequest  $request
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViagemRequest $request, Viagem $viagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viagem $viagem)
    {
        //
    }
}
