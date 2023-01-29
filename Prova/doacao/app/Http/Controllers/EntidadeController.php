<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use App\Http\Requests\StoreEntidadeRequest;
use App\Http\Requests\UpdateEntidadeRequest;
use Illuminate\Http\Request;
use App\Models\Item;


class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = Entidade::OrderBy('id')->get();
        $items = Item::OrderBy('id')->get();

        return view('entidades.index',['entidades'=>$entidades,'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entidade::create($request->all());
        session()->flash('alguma_mensagem','Entidade cadastrada com sucesso!'); 

        return redirect()->route('entidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        return view('entidades.show',['entidade'=> $entidade]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        return view('entidades.edit',['entidade'=>$entidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntidadeRequest  $request
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntidadeRequest $request, Entidade $entidade)
    {
        $entidade->fill($request->all()); //atualiza essa pessoa com os dados do request
        $entidade->save();
        session()->flash('alguma_mensagem','dados atualizados com sucesso!');
        return redirect()->route('entidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        $entidade->delete();
        session()->flash('alguma_mensagem','Entidade excluída com sucesso!');
        return redirect()->route('entidades.index');
    }
    
}
