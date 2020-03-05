@extends('template.app')

@section('content')
<div class="col-12">
    <h3>Editar contato</h3>
</div>
<div class="col-6 ali">
<form action="{{url('/pessoas/update')}}" method="POST">
    {{ csrf_field()}}
        <div class="form-group col-md-12 pr-0 mt-4">
            <label class="control-label">Nome: </label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
        
       </form>
</div>
@endsection