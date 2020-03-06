@extends('template.app')

@section('content')
<div class="row col-12 justify-content-center">
  @foreach ($pessoas as $pessoa)
  <div class="card col-3 mr-2 mt-3 p-0">
    <div class="card-header pt-2 pb-2 pl-3 pr-0">
      <div class="col-12 row pr-0 ">
        <div class="col-md-6 p-0 form-inline align-middle ">
          {{$pessoa->nome}}
        </div>
        <div class="col-md-6  row float-right">
          <div class="col-6 ">
            <a href="{{url("/pessoas/$pessoa->id/editar")}}" class="btn btn-primary "><i class="fa fa-pencil"
                aria-hidden="true"></i></a>
          </div>
          <div class="col-6">
            <a href="{{url("/pessoas/$pessoa->id/excluir")}}" class="btn btn-danger "><i class="fa fa-trash"
                aria-hidden="true"></i></i></a>
          </div>


        </div>
      </div>
    </div>
    <div class="card-body">
      @foreach ($pessoa->telefones as $telefone)
      <p><strong>Telefone: </strong>({{$telefone->ddd}}) {{$telefone->telefone}}</p>
      @endforeach
    </div>
  </div>
  @endforeach
</div>
@endsection