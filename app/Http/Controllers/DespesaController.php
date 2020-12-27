<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despesas = Despesa::all();
        return view('despesa.home', ['despesas'=>$despesas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('despesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $despesa = new Despesa;

        $despesa->descricao = $request->descricao;
        $despesa->categoria = $request->categoria;
        $despesa->save();

        return redirect()->route('despesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despesa = Despesa::find($id);
        return view('despesa.show', ['despesa'=>$despesa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despesa = Despesa::find($id);
        return view('despesa.edit', ['despesa'=>$despesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $despesa = Despesa::find($id);

        $despesa->descricao = $request->descricao;
        $despesa->categoria = $request->categoria;
        $despesa->save();

        return redirect()->route('despesas.show', ['despesa'=>$despesa->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despesa = Despesa::find($id);
        $despesa->delete();

        return redirect()->route('despesas.index');
    }
}
