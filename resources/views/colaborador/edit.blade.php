@extends('layouts.app')
@section('title')
    Editar colaborador:
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
                    Página, Editar:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colaborador.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de departamento na ordem de cadastro.</font></font>
            <a class="btn btn-link" href="{{route('colaborador.index')}}">Voltar para lista de colaboradores</a>
        </p>
    </div>
    <div class="row">
<!-- Start Contact Form -->
<form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('colaborador.update',$colaborador->id)}}">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    <div class="controls form-group{{ $errors->has('nome') ? ' has-error' : 'nome' }}">


        <div class="form-group">
            <fieldset>
              <label class="form-label" for="disabledInput">Nome:</label>
              <input class="form-control" id="nome"  name="nome" type="text" value="{{ $colaborador->nome }}">
              @if ($errors->has('nome'))
              <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
            @endif
            </fieldset>
          </div>
        <div class="form-group">
            <label for="cargo" class="form-label mt-4">Cargo:</label>
            <input type="hidden" id="cargo" name="cargo" value="{{ $colaborador->cargo_at }}">
            <textarea class="form-control" id="cargo_at" name="cargo_at" value="{{ $colaborador->cargo_at }}" rows="3">{{ $colaborador->cargo_at }}</textarea>
            @if ($errors->has('cargo_at'))
                <span class="help-block">
                <strong>{{ $errors->first('cargo_at') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departamento:</font></font></label>
            <select class="form-select" name="departamento_id" id="departamento_id">
              <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $colaborador->departamento->nome }}</font></font></option>
              @foreach (App\Models\Departamento::all() as $item)
              <option value="{{$item->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->nome}}</font></font></option>
              @endforeach
            </select>
          </div>

    </div>


</div>

<div class="row mt-4">

<button type="submit" class="btn btn-lg btn-dark">
    Salvar edição
</button>
</div>
<div class="row mt-4">

    <input type="button" class="btn btn-lg btn-dark" value="Voltar" onClick="history.go(-1)">
</div>
</form>
<!-- End Contact Form -->
    </div>
</div>


@endsection

