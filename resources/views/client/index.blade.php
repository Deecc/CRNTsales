@extends('layouts.app')

@section('content')

<div class="container generalBg">
    <div>        
        <a class="btn btn-primary btn-lg btn-block" href="{{ route('web.clients.create') }}"> Cadastrar cliente </a>
    </div>
    <table class="table table-responsive table-hover">
        <thead class="thead-inverse">
            <tr>
                <td><strong>NOME</strong></td>
                <td><strong>TELEFONE</strong></td>
                <td><strong>EMAIL</strong></td>
                <td><strong>CPF</strong></td>                
                <td><strong>ORIGEM</strong></td>
                <td><strong>AÇÕES</strong></td>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>            
                <td>{{ $client->social_number }}</td>
                <td>{{ $client->origin ? 'Site' : 'Vendas'}}</td>
                <td><a href="{{ route('web.clients.edit', $client->id) }}">Editar</a> | <a href="{{ route('web.clients.destroy', $client->id) }}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <nav >
        <ul class="pagination-lg justify-content-center">
            {{ $clients->links() }}
        </ul>
   </nav>

   
</div>

@endsection