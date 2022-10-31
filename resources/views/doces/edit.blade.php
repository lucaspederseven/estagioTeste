@extends('layouts.main')

@section('title', 'Doce doceria')

@section('content')
    <form class="card p-3 bg-light" form=action="/doces/editar/{{$doce->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container mt-5 pt-5">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="nome_produto">Nome do Produto</label>
                        <input type="text" id="nome_produto" name="nome_produto" value="{{$doce->nome_produto}}"
                               class="form-control"/>

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="preco_produto">Preço de venda</label>
                        <input type="text" id="preco_produto" name="preco_produto" value="{{$doce->preco_produto}}"
                               class="form-control"/>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="peso">Peso</label>
                        <input type="text" id="peso" placeholder="" name="peso" value="{{$doce->peso}}"
                               class="form-control"/>

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="descricao">Descrição</label>
                        <input type="text" id="descricao" name="descricao" value="{{$doce->descricao}}"
                               class="form-control"/>

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="data">Data de vencimento</label>
                        <input type="date" id="data" name="data" value="{{$doce->data}}" class="form-control"/>

                    </div>
                </div>


                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success mt-5" type="submit">alterar</button>

                </div>
            </div>
        </div>
    </form>

@endsection
