<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Http\Requests\StoreColetaRequest;
use App\Http\Requests\UpdateColetaRequest;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Entidade;


class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $coletas = Coleta::OrderBy('id')->get();
        return view('coletas.index',['coletas'=>$coletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::OrderBy('id')->get();
        $entidades = Entidade::OrderBy('id')->get();
        return view('coletas.create',['items'=>$items],['entidades'=>$entidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coleta::create($request->all());
        session()->flash('alguma_mensagem','Coleta cadastrada com sucesso!'); 

        return redirect()->route('coletas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        return view('coletas.show',['coleta'=> $coleta]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta)
    {
        return view('coletas.edit',['coleta'=>$coleta]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColetaRequest  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColetaRequest $request, Coleta $coleta)
    {
        $coleta->fill($request->all()); //atualiza essa pessoa com os dados do request
        $coleta->save();
        session()->flash('alguma_mensagem','dados atualizados com sucesso!');
        return redirect()->route('coletas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta)
    {
        $coleta->delete();
        session()->flash('alguma_mensagem','Coletas excluída com sucesso!');
        return redirect()->route('coletas.index');
    }
}
