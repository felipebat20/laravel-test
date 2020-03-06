@extends('template.app')

@section('content')
<div class="col-12">
    <h3>Novo contato</h3>
</div>
<div class="col-6 ">
    <form action="{{url('/pessoas/store')}}" method="POST">
        {{ csrf_field()}}
        <div class="form-group col-md-12 pr-0 mt-4">
            <label class="control-label">Nome: </label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="row col-md-12 mx-auto pr-0">
            <div class="form-group col-md-2 p-0 m-0 ">
                <label class="control-label">DDD: </label>
                <input type="text" name="ddd" class="form-control" placeholder="DDD">
            </div>
            <div class="form-group col-md-8 p-0 ml-auto mr-0">
                <label class="control-label">Telefone: </label>
                <input type="text" name="number" class="form-control" placeholder="Telefone">
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" style="float: right;" class="btn btn-primary justify-content-right">Salvar</button>
        </div>
    </form>
</div>
@endsection