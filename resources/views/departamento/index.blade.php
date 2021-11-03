@extends('layouts.app')
@section('title')
    Lista de departamento:
@endsection
@section('content')
<div class="container">

    <div class="row">
        <p></p>
        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Página, lista:
                </font></font><small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departamento.</font></font></small>
        </h3>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de departamento na ordem de cadastro.</font></font>
            <button type="button" class="btn btn-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar novo Departamento</font></font></button>
        </p>
        
    </div>
    <div class="row">

<table class="table table-hover">
  <thead>
    <tr>

      <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nomes:</font></font></th>
      <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrições:</font></font></th>
      <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Data Cadast.:</font></font></th>
      <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ações:</font></font></th>
    </tr>
  </thead>
  <tbody>
      @foreach ($departamentos as $item)
      <tr>
        <th scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->nome}}</font></font></th>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->descricao}}</font></font></td>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$item->created_at->format('d-m-Y')}}</font></font></td>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            <ul class="nav nav-pills">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle show" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ação:</font></font></a>
                  <div class="dropdown-menu" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 42px);">
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar</font></font></a>
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deletar</font></font></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Link separado</font></font></a>
                  </div>
                </li>

            </ul>
        </font></font></td>
      </tr>
      @endforeach
    <tr class="table-dark">
      <th scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escuro</font></font></th>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conteúdo da coluna</font></font></td>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conteúdo da coluna</font></font></td>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conteúdo da coluna</font></font></td>
    </tr>
  </tbody>
</table>
    </div>
</div>
@endsection