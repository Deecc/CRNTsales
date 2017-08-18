@extends('layouts.app')

@section('content')

<div class="container generalBg">

    <h3>Bem vindo, complete o cadastro para registrar seu interesse em reservar um camarote.</h3>
        <form id="fromLP" action="{{ route('web.clients.storeFromLP') }}" method="post" class="form-group">
            {{ csrf_field() }}
            <label for="name">Nome:</label>
            <input class="form-control" type="text" name="name" placeholder="Nome">
            <label for="phone">Telefone:</label>
            <input class="form-control" type="text" name="phone" placeholder="Telefone">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" placeholder="Email">
            <label for="social_number">CPF:</label>
            <input class="form-control" type="text" name="social_number" placeholder="CPF">
            </br>
            <div class="pull-right">
                <input class="btn btn-primary " type="submit">
                <a class="btn btn-primary" href="http://camarotes.carnatal.com.br">Cancelar</a>
            </div>
        </form>   

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif                      
   

</div>

@endsection

