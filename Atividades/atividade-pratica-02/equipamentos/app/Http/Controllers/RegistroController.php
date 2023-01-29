<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Models\User;
use App\Models\Equipamento;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::OrderBy('datalimite')->get();
        return view('registros.index',['registros'=>$registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $users = User::OrderBy('name')->get();
        $equipamentos = Equipamento::OrderBy('nome')->get();
        return view('registros.create',['users'=>$users],
                                        ['equipamentos'=>$equipamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistroRequest $request)
    {
        Registro::create($request->all());
        session()->flash('alguma_mensagem','registro cadastrado com sucesso!'); 

        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.show',['registro'=> $registro]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $users = User::OrderBy('name')->get();
        $equipamentos = Equipamento::OrderBy('nome')->get();
        return view('registros.edit',['registro'=>$registro,
        'users'=>$users,'equipamentos'=>$equipamentos]);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistroRequest  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->fill($request->all()); //atualiza essa pessoa com os dados do request
        $registro->save();
        session()->flash('alguma_mensagem','dados atualizados com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        session()->flash('alguma_mensagem','registro excluído com sucesso!');
        return redirect()->route('registros.index');
    }
}
