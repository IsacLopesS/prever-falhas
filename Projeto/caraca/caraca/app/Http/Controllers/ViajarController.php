<?php

namespace App\Http\Controllers;

use App\Models\Viajar;
use App\Models\Pessoa;
use App\Http\Requests\StoreViajarRequest;
use App\Http\Requests\UpdateViajarRequest;
use App\Models\Viagem;
use Illuminate\Http\Request;

class ViajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p = new Pessoa();
        $p->id = $_GET['idpessoa'];
        return view('dados',['pe'=>$p]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreViajarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Viajar::create($request->all());
        $v = new Viajar();
        $v->id_onibus = $request->id_onibus;
        $v->id_pessoa = $request->id_pessoa;
        $v->id_viagem = $request->id_viagem;
        $v->num_assento = $request->num_assento;
        session()->flash('alguma_mensagem','sucesso!'); 
        return view('pagar',['viajar'=>$v]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viajar  $viajar
     * @return \Illuminate\Http\Response
     */
    public function show(Viajar $viajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viajar  $viajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Viajar $viajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateViajarRequest  $request
     * @param  \App\Models\Viajar  $viajar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViajarRequest $request, Viajar $viajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viajar  $viajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viajar $viajar)
    {
        //
    }
}
