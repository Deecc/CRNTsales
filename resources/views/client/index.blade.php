@extends('layouts.app')

@section('content')

<div class="container generalBg">
    
    <table class="table table-responsive table-hover">
        <thead class="thead-inverse">
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>CPF</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>            
                <td>{{ $client->social_number }}</td>
                <td><a href="{{ route('web.clients.destroy', $client->id) }}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <nav >
        <ul class="pagination-lg justify-content-center">
            {{ $clients->links() }}
        </ul>
   </nav>
   <div>        
        <a class="btn btn-primary btn-lg btn-block" href="{{ route('web.clients.create') }}"> Cadastrar cliente </a>
    </div>
</div>

@endsection