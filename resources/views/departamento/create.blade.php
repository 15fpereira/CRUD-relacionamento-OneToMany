@extends('layouts.app')
@section('title')
    Cadastro de departamento:
@endsection
@section('content')
<div class="container">
    <div class="row">
        @if(Session::has('flash_message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-dismiss="alert"></button>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Messagem de confirmação! </font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{Session::get('flash_message')}}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Add Outro Contato?</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
                </font></font>
        </div>
        @endif
    </div>
    <div class="row">
        <p></p>
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Página, cadastro:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departamento.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de departamento na ordem de cadastro.</font></font>
            <a class="btn btn-link" href="{{route('departamento.index')}}">Voltar para lista de departamento</a>
        </p>
    </div>
    <div class="row">
<!-- Start Contact Form -->
<form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('departamento.store')}}">
    {{ csrf_field() }}
    <div class="controls form-group{{ $errors->has('nome') ? ' has-error' : 'nome' }}">
    

        <div class="form-group">
            <fieldset>
              <label class="form-label" for="disabledInput">Nome:</label>
              <input class="form-control" id="nome"  name="nome" type="text" placeholder="Nome">
              @if ($errors->has('nome'))
              <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
            @endif
            </fieldset>
          </div>
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" value="{{ old('descricao') }}" autofocus placeholder="Descrição:" rows="3"></textarea>
            @if ($errors->has('descricao'))
                <span class="help-block">
                <strong>{{ $errors->first('descricao') }}</strong>
            </span>
            @endif
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
