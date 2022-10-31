@extends('layouts.main')

@section('title', 'Doce ')

@section('content')
<div class="container pt-5 " >
    <table class="table table-striped">
        <a class="btn btn-primary" href="{{URL::to('/doces/novo')}}">Novo Produto</a>
        <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Peso</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data de Vencimento</th>
            <th scope="col">Ações</th>

        </tr>
        </thead>
        <tbody   class="table-group-divider">

        <tr>    @foreach($cadastros as $cadastro)
                <td> {{$cadastro->nome_produto}}  </td>
                <td>{{$cadastro->preco_produto}}</td>
                <td>{{$cadastro->peso}}</td>
                <td>{{$cadastro->descricao}}</td>
                <td>{{date('d/m/Y', strtotime($cadastro->data))}}</td>
                <td><a href="/doces/editar/{{$cadastro->id}}" class="btn btn-warning btn-sm">Editar</a></td>

              <td><form action="/doces/{{$cadastro->id}}" method="POST">
                    @csrf
                   @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                </form>
        </td>
        </tr>
        </tbody>
        @endforeach
        @if(count($cadastros)>0)
        @else
            <h5 style="text-align: center">Nenhum registro cadastrado.
                <a href="{{URL::to('/doces/novo')}}"> Clique aqui </a> para cadastrar um produto</h5>
        @endif
    </table>
</div>
@endsection

