@extends('template.app')

@section('content')
    <div class="row col-12 justify-content-center">
        @foreach ($pessoas as $pessoa)
          <div class="card col-3 m-3 ">
            <div class="card-header">
              <h3>{{$pessoa->nome}}</h3>
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