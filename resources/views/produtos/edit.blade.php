@extends('../layouts/app')

@section('content')
  <div class="container">
    <h1>Editar Produto<h1>

      @if ($errors->any())
        <ul class="alert alert-warning">
          @foreach($errors->all() as $errors)
            <li>{{$errors}}</li>
          @endforeach
        </ul>
      @endif
      {!! Form::open(['route' => ['produtos.update', $produto->id], 'method'=>'put']) !!}

        <div class="form-group">
          {!! Form::label('nome', 'Nome:') !!}
          {!! Form::text('nome', $produto->nome, ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('descricao', 'Descrição:') !!}
          {!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
  </div>
@endsection
