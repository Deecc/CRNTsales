@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <a href="{{ route('web.clients.create') }}">Cadastrar cliente</a>
    </div>
    <table>
        <thead>
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
</div>

@endsection