@extends('template.layout')

@section('title', 'Usuários')

@section('content')
<div class="col-12 text-right p-5"><a href="/usuario/adicionar" class="btn btn-primary"> Adicionar Usuario</a></div>
    <div class="col-12 p-5 text-center"><h3>Usuários</h3></div>
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    @foreach($usuarios as $usuario)
        <tbody>
            <tr>
                <td>{{ $usuario->id_usuario }}</td>
                <td>{{ $usuario->nome_usuario }}</td>
                <td>{{ $usuario->email }}</td>
                <td><i class="far fa-edit"></i> &nbsp;&nbsp; <i class="fas fa-trash-alt"></i></td>
            </tr>
        </tbody>
        

    @endforeach
    </table>
@endsection