@extends('layouts.app')
@section('title')
    Lista de colaboradores
@endsection
@section('content')
<div class="container">
    <div class="row">
        @if(Session::has('flash_message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-dismiss="alert"></button>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Messagem de confirmação! </font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{Session::get('flash_message')}}</font></font><a href="{{route('departamento.create')}}" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Add um novo colaborador?</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
            </font></font>
        </div>
        @endif
    </div>

    <div class="row">
        <p></p>
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Página, lista:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colaboradores.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exemplo de layout no laravel.</font></font></p>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Type</th>
                <th scope="col">Nome:</th>
                <th scope="col">Cargo:</th>
                <th scope="col">Departamento:</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($colaboradores as $item)
               

                
                <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cargo}}</td>
                    <td>{{$item->departamento->nome}}</td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection