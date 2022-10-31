<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class ApiCadastroController extends Controller
{   /**
 *
 * @return \Illuminate\Http\Response
 */


    public function index(){

     return Cadastro::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return Cadastro::find($id);
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

        return  Cadastro::create($dados);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $doce = Cadastro::findOrFail($id);
        $doce->update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        return Cadastro::destroy($id);

    }
}
