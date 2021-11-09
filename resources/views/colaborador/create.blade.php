@extends('layouts.app')
@section('title')
    Cadastro de colaborador:
@endsection
@section('content')
<div class="container">
    <div class="row mt-4">
        @if(Session::has('flash_message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-dismiss="alert"></button>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Messagem de confirmação! </font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{Session::get('flash_message')}}</font></font><a href="{{route('departamento.create')}}" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Add um novo colaborador?</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
                </font></font>
        </div>
        @endif
    </div>
    <div class="row">
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Página, cadastro:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colaborador.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de departamento na ordem de cadastro.</font></font>
            <a class="btn btn-link" href="{{route('colaborador.index')}}">Voltar para lista de colaboradores</a>
        </p>
    </div>
    <div class="row">
<!-- Start Contact Form -->
<form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('colaborador.store')}}">
    {{ csrf_field() }}
    <div class="controls form-group{{ $errors->has('nome') ? ' has-error' : 'nome' }}">
    

        <div class="form-group">
            <fieldset>
              <label class="form-label" for="disabledInput">Nome:</label>
              <input class="form-control" id="nome"  name="nome" type="text" placeholder="Informe o nome do novo colaborador:">
              @if ($errors->has('nome'))
              <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
            @endif
            </fieldset>
          </div>
        <div class="form-group">
            <label for="cargo" class="form-label mt-4">Cargo:</label>
            <textarea class="form-control" id="cargo" name="cargo" value="{{ old('cargo') }}" autofocus placeholder="Descreva o nome do cargo do novo colaborador:" rows="3"></textarea>
            @if ($errors->has('cargo'))
                <span class="help-block">
                <strong>{{ $errors->first('cargo') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departamento:</font></font></label>
            <select class="form-select" name="departamento_id" id="departamento_id">
              <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecione o nome do departamento:</font></font></option>
              @foreach (App\Models\Departamento::all() as $item)
              <option value="{{$item->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->nome}}</font></font></option>   
              @endforeach
            </select>
          </div>

    </div>

    
</div>

<div class="row mt-4">

<button type="submit" class="btn btn-lg btn-dark">
    Salvar
</button>

</div>
</form>
<!-- End Contact Form -->
    </div>
</div>


@endsection
