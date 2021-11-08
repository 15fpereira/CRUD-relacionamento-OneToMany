@extends('layouts.app')
@section('title')
    Cadastro de departamento:
@endsection
@section('content')
<div class="container">
    
    <div class="row">
        <p></p>
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Página, editar:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departamento.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de departamento.</font></font>
            <a class="btn btn-link" href="{{route('departamento.index')}}">Voltar para lista de departamento?</a>
        </p>
    </div>
    <div class="row">
        <!-- Start Contact Form -->
        <form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('departamento.update',$departamento->id)}}">
            {{ csrf_field() }}
            <div class="controls form-group{{ $errors->has('nome') ? ' has-error' : 'nome' }}">
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <fieldset>
                    <label class="form-label" for="disabledInput">Nome:</label>
                    <input class="form-control" id="nome"  name="nome" type="text" value="{{$departamento->nome}}">

                    </fieldset>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Descrição:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" value="{{$departamento->descricao}}" >{{$departamento->descricao}}</textarea>
   
                </div>

            </div>

        </div>

        <div class="row">
        <button type="button" class="btn btn-link"></button>

        <button type="submit" class="btn btn-lg btn-dark">
            Salvar
        </button>

        </div>
        </form>
        <!-- End Contact Form -->
    </div>
</div>

@endsection
