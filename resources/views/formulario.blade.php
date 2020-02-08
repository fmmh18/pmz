@extends('template.layout')
@section('title', 'Adicionar Usuários')

@section('content')
@include('template.message')
<div class="col-12 p-5 text-center"><h3>Adicionar Usuário</h3></div>
<form action="/usuario/adicionar" method="post">
@csrf

@foreach($usuarios as $usuario)
<div class="form-group">
    <label for="nome_usuario">Nome</label>
    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value='usuario->nome_usuario' placeholder="Nome">
</div>
<div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
</div>
@endforeach
<div class="form-group">
    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Salvar" name="action" />
</div>
</form>
@endsection