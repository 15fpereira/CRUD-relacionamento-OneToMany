@extends('layouts.app')
@section('title')
    Lista de colaboradores
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
                    Página, lista:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colaboradores.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deseja cadastrar um novo colaborador?</font></font>
            <a class="btn btn-link" href="{{route('colaborador.create')}}">Click aqui!</a>
        </p>

    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Type</th>
                <th scope="col">Nome:</th>
                <th scope="col">Cargo:</th>
                <th scope="col">Departamento:</th>
                <th scope="col">Ações:</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($colaboradores as $item)



                <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cargo}}</td>
                    <td>{{$item->departamento->nome}}</td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <ul class="nav nav-pills">

                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle show" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ação:</font></font></a>
                              <div class="dropdown-menu" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 42px);">
                                <a class="dropdown-item" href="{{route('colaborador.edit',$item->id)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar</font></font></a>
                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deletar</font></font></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Link separado</font></font></a>
                              </div>
                            </li>

                        </ul>
                    </font></font></td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
