<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::OrderBy('nome')->get();
        return view('pessoas.index',['pessoas'=>$pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        /*
          abre o formulario para criar pessoas e envia esse formulario
          com os dados para o 'store'. A função store é responsavel por 
          persistir os dados no B.D.
        */
        return view('pessoas.create');
          
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         recebe o formulario preenchido pela função
         create e persiste os dados no B.D.
         */
        Pessoa::create($request->all()); //persiste todo o request no bd

        //dentro de 'session': cria uma variável chamada 'alguma_mensagem'.
        // alguma_mensagem = 'Pessoa cadastrada com sucesso!'
        session()->flash('alguma_mensagem','Pessoa cadastrada com sucesso!'); 

        return redirect()->route('pessoas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show',['pessoa'=> $pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit',['pessoa'=>$pessoa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->fill($request->all()); //atualiza essa pessoa com os dados do request
        $pessoa->save();
        session()->flash('alguma_mensagem','dados atualizados com sucesso!');
        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        session()->flash('alguma_mensagem','Pessoa excluída com sucesso!');
        return redirect()->route('pessoas.index');
    }
}
