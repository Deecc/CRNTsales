@extends('layouts.app')

@section('content')

<div class="container generalBg">
    <form action="{{ route('web.clients.update', $client->id) }}" method="post" class="form-group">
        {{ csrf_field() }}
        <label for="name">Nome:</label>
        <input class="form-control" type="text" name="name" placeholder="Nome" value="{{ $client->name }}">
        <label for="phone">Telefone:</label>
        <input class="form-control" type="text" name="phone" placeholder="Telefone" value="{{ $client->phone }}">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $client->email }}">
        <label for="social_number">CPF:</label>
        <input class="form-control" type="text" name="social_number" placeholder="CPF" value="{{ $client->social_number }}">
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('web.clients.index')}}">Cancelar</a>
            <input class="btn btn-primary" type="submit">
        </div>
    </form>
</div>

@endsection