<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{   /**
 *
 * @return \Illuminate\Http\Response
 */


    public function index(){
        $cadastros = Cadastro::get();
        return view('doces.index', compact('cadastros'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $doce = Cadastro::findOrFail($id);
        return view('doces.show',['doce' => $doce]);
    }

public function create(){
    return view('doces.create');
}


    public function edit($id){
        $doce = Cadastro::findOrFail($id);
        return view('doces.edit',['doce' => $doce]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request){
    $dados = $request->validate([
            'nome_produto'=> 'required|string',
            'preco_produto'=> 'required|string',
            'peso'=> 'required|string|string',
            'descricao'=>'required|string',
            'data'=>'required|after:yesterday'
        ]);

      Cadastro::create($dados);
    return redirect('/');
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        Cadastro::findOrFail($request->id)->update($request->all());
       return redirect('/');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Cadastro::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Excluído com sucesso!');
    }
}
