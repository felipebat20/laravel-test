@extends('template.app')

@section('content')
    <div class="col-12">
        <h3>Novo contato</h3>
    </div>
    <div class="col-6 ali">
    <form action="{{url('/pessoas/store')}}" method="POST">
        {{ csrf_field()}}
            <div class="form-group col-md-12 pr-0 mt-4">
                <label class="control-label">Nome: </label>
                <input type="text" name="nome" class="form-control">
            </div>
           <button type="submit" style="float: right;" class="btn btn-primary justify-content-right">Salvar</button>
        </form>
    </div>
@endsection

