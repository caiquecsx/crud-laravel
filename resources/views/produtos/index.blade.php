@extends('../layouts/app')

@section('content')
 <div class="container">
    <h1>Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
            <td>{{ $produto->id}}</td>
            <td>{{ $produto->nome}}</td>
            <td>{{ $produto->descricao}}</td>
            <td><a href="">Editar</a>
                <a href="#">Remover</a>
            </td>
          </td>
        @endforeach
      </tbody>
    </table>
 </div>
 @endsection
