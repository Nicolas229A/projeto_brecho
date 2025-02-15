<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iten;

class ItensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens = Iten::all();
        return view('itens.index', ['itens' => $itens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('itens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Iten();
        $item->nome = $request->nome;
        $item->especificacoes = $request->especificacoes;
        $item->classificacao = $request->classificacao;
        $item->preco = $request->preco;
        $item->preco_novo = $request->preco_novo;
        $item->tempo_de_uso = $request->tempo_de_uso;
        $item->danos = $request->danos;
        $item->link = $request->link;
        $item->foto = $request->file('foto')->store('fotos_itens', 'public');
        $item->save();

        return redirect('/itens'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $item = Iten::find($id);
        return view('itens.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $item = Iten::find($request->id);
        $item->nome = $request->nome;
        $item->especificacoes = $request->especificacoes;
        $item->classificacao = $request->classificacao;
        $item->preco = $request->preco;
        $item->preco_novo = $request->preco_novo;
        $item->tempo_de_uso = $request->tempo_de_uso;
        $item->danos = $request->danos;
        $item->link = $request->link;
        $item->foto = $request->file('foto')->store('fotos_itens', 'public');
        $item->save();

        return redirect('/itens');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Iten::destroy($request->id);
        return redirect('/itens');
    }
}
