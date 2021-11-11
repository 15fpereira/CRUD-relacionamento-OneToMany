<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     * Versão curta: php artisan make:model -mc test --resource
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colaboradores = Colaborador::all();
        return view('colaborador.index',compact('colaboradores'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all('nome'));
        Colaborador::create($request->all());
        Session::flash('flash_message', 'Novo colaborado criado com sucesso!'); //messagem de sucesso!
        return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaborador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {
        // edit em uma linha
        return view('colaborador.edit', compact('colaborador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaborador $colaborador)
    {
        //
        $colaborador->nome = $request->nome;
        $colaborador->cargo = $request->cargo;
        $colaborador->cargo_at = $request->cargo_at;
        $colaborador->departamento_id = $request->departamento_id;
        $colaborador->save();
        Session::flash('flash_message', 'Colaborador atualizado com sucesso!');
        return redirect()->route('colaborador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        //
    }
}
