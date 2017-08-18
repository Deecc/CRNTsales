@extends('layouts.app')

@section('content')

<div class="container generalBg">

    <h3>Registro completado com sucesso!</h3>
    
    <p> Voce será redirecionado para o site do camarotes em 10 segundos.. <p>
    <progress value="0" max="10" id="progressBar"></progress>
    <p> ou clique aqui para ir direto: <a href="http://camarotes.carnatal.com.br">Camarotes</a>
    {{-- <h3>Bem vindo, complete o cadastro para registrar seu interesse em reservar um camarote.</h3>
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
    --}}

</div>

@endsection

@section('script')
<script>
var timeleft = 10;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 10 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);
    window.location = "http://camarotes.carnatal.com.br";
},1000);
</script>
@endsection