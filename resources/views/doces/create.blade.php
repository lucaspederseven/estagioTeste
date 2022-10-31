@extends('layouts.main')

@section('title', 'Doce doceria')

@section('content')
<form class="card p-3 bg-light" form=action="{{route('registrar_doce')}}" method="POST" >
    @csrf

    @if($errors->any())
    <div class="alert alert-danger">
        <br>
            @foreach ($errors->all() as $error)
                <br>{{$error}}</br>
            @endforeach
        </br>
    </div>
    @endif
    <div class="container mt-5 pt-5" >
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nome_produto">Nome do produto</label>
                    <input type="text" id="nome_produto" name="nome_produto" class="form-control" required />


                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="preco_produto">Preço de venda</label>
                    <input type="text" id="preco_produto" name="preco_produto" class="form-control" />

                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="peso">Peso do produto</label>
                    <input type="text" id="peso" placeholder="" name="peso"   class="form-control" />

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" class="form-control" />

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="data">Data de vencimento</label>
                    <input type="date" id="data"  name="data" class="form-control" />

                </div>
            </div>

            <div class="d-grid gap-2 d-md-block mt-5">
                <button class="btn btn-success" type="submit">Cadastrar</button>

            </div>
        </div>
    </div>
</form>
@endsection
