@extends('template.app')

@section('content')
<div class="col-md-12">
  <h3>Editar contato</h3>
</div>
<div class="col-12 row">
  <div class="col-6">
    <form action="{{url('/pessoas/update')}}" method="POST">
      {{ csrf_field()}}
      <input type="hidden" name="id" value="{{ $pessoa->id}}">
      <div class="form-group col-md-12 pr-0 mt-4">
        <label class="control-label">Nome: </label>
        <input type="text" name="nome" value="{{$pessoa->nome}}" class="form-control" placeholder="Nome">
      </div>
      <div class="col-md-12">
        <button style="margin-top: 5px; float:right; " class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>
  <div class="col-6">
    <div class="card  m-3 ">
      <div class="card-header">
        <h5>{{$pessoa->nome}}</h5>
      </div>
      <div class="card-body">
        @foreach ($pessoa->telefones as $telefone)
        <p><strong>Telefone: </strong>({{$telefone->ddd}}) {{$telefone->telefone}}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>


@endsection