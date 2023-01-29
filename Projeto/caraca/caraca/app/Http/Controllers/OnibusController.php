<?php

namespace App\Http\Controllers;

use App\Models\Onibus;
use Illuminate\Http\Request;

class OnibusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onibus = Onibus::OrderBy('id')->get();
        return view('onibus.index',['onibus'=>$onibus]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onibus  $onibus
     * @return \Illuminate\Http\Response
     */
    public function show(Onibus $onibus)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onibus  $onibus
     * @return \Illuminate\Http\Response
     */
    public function edit(Onibus $onibus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Onibus  $onibus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onibus $onibus)
    {
        $request->num_T_assentos -=1;
        $onibus->fill($request->all()); //atualiza esse onibus com os dados do request
        $onibus->save();
        session()->flash('alguma_mensagem','dados atualizados com sucesso!');
        return redirect()->route('onibus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onibus  $onibus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onibus $onibus)
    {
        //
    }
}
