@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('web.clients.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">Nome:</label>
        <input type="text" name="name" placeholder="Nome">
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" placeholder="Telefone">
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email">
        <label for="social_number">CPF:</label>
        <input type="text" name="social_number" placeholder="CPF">
        <input type="submit">
    </form>
</div>

@endsection