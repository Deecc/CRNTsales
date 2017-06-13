@extends('layouts.app')

@section('content')

<div class="container generalBg">
    <form action="{{ route('web.clients.store') }}" method="post" class="form-group">
        {{ csrf_field() }}
        <label for="name">Nome:</label>
        <input class="form-control" type="text" name="name" placeholder="Nome">
        <label for="phone">Telefone:</label>
        <input class="form-control" type="text" name="phone" placeholder="Telefone">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Email">
        <label for="social_number">CPF:</label>
        <input class="form-control" type="text" name="social_number" placeholder="CPF">
        <input class="btn btn-primary" type="submit">
    </form>
</div>

@endsection