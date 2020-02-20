@extends('template.app')

@section('content')
    <div class="cards">
        @foreach ($pessoas as $pessoa)
        <div class="ml-5 mt-5">
          <div class="card">
            <div class="card-body">
              <h3>{{$pessoa->nome}}</h3>
              @foreach ($pessoa->telefones as $telefone)
            <p><strong>Telefone: </strong>({{$telefone->ddd}}) {{$telefone->telefone}}</p>
              @endforeach
            </div>
          </div>  
        </div>
        
        @endforeach
    </div>
@endsection