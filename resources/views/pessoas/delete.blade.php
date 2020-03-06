@extends('template.app')

@section('content')
<div class="row col-12">
    <div class="col-md-6 well">
    <div class="col-md-12 p-2">
        <h3>Deseja excluir esse contato?</h3>
        <div style="float:right;" class="mt-4">
        <a class="btn btn-primary" href="{{ url("pessoas/index")}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Voltar&nbsp;
            
        </a>
        <a class="btn btn-danger" href="{{ url("pessoas/$pessoa->id/destroy")}}">
            Excluir&nbsp;
            <i class="fa fa-close" aria-hidden="true"></i>
        </a>
        </div>
    </div>

</div>

<div class="col-6">
    <div class="card  m-3 border-danger">
      <div class="card-header border-danger text-center bg-danger text-light">
        <h4>{{$pessoa->nome}}</h4>
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