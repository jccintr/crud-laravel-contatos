<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Categoria;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::with('categoria')->orderBy('nome')->get();
        //$contatos = Contato::orderBy('nome')->get();
        $contatos = Contato::orderBy('nome')->paginate(7);
        
        return view('index',['contatos' => $contatos]);
        //return view('index',compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::All();

        return view('contatos.novo',['categorias' => $categorias]);
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
        $novoContato = new Contato();
        $novoContato->nome = $request->nome;
        $novoContato->telefone = $request->telefone;
        $novoContato->foto = $request->foto;
        $novoContato->categoria_id = $request->categoria_id;
        $novoContato->save();
        */

        // ou
        $novoContato = $request->only(['nome','telefone','foto','categoria_id']);
        Contato::create($novoContato);

        return redirect("/");
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contato::find($id);
        $categorias = Categoria::All();
        return view('contatos.edit',['contato' => $contato,'categorias' => $categorias]);
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
        $contato = Contato::find($id);
        $contato->update($request->only(['nome','telefone','foto','categoria_id']));
        
        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();
        return redirect("/");
    }
}
