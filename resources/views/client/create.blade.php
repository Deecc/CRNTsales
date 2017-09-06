@extends('layouts.app')

@section('content')

<div class="container generalBg">
{{-- @if (Route::has('login')) --}}
    @if (Auth::check())
        <form action="{{ route('web.clients.store') }}" method="post" class="form-group">
        {{ csrf_field() }}

        <label for="name">Nome:</label>
        <input class="form-control" type="text" name="name" placeholder="Nome">
        <label for="phone">Celular:</label>
        <input class="form-control" type="text" name="phone" id="phone" placeholder="Telefone">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Email">
        <label for="social_number">CPF:</label>
        <input class="form-control" type="text" name="social_number" id="cpf" placeholder="CPF">
        </br>
        
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>O nome precisa ter no mínimo 4 letras.</strong>
            </span>
        @elseif ($errors->has('phone'))
            <span class="help-block">
                <strong>O formato de celular é inválido.</strong>
            </span>
        @elseif ($errors->has('social_number'))
            <span class="help-block">
                <strong>O campo de cpf é inválido.</strong>
            </span>            
        @else 
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif





        <div class="pull-right">
            <input class="btn btn-primary " type="submit">
            <a class="btn btn-primary" href="{{ route('web.clients.index')}}">Cancelar</a>
        </div>
    </form>           
    @else
    <h3>Bem vindo, complete o cadastro para registrar seu interesse em reservar um camarote.</h3>
         <form id="fromLP" action="{{ route('web.clients.store') }}" method="post" class="form-group">
        {{ csrf_field() }}
        <label for="name">Nome:</label>
        <input class="form-control" type="text" name="name" placeholder="Nome">
        <label for="phone">Telefone:</label>
        <input class="form-control" type="text" name="phone" id="phone" placeholder="Telefone">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Email">
        <label for="social_number">CPF:</label>
        <input class="form-control" type="text" name="social_number" id="cpf" placeholder="CPF">
        </br>

         @if ($errors->has('name'))
            <span class="help-block">
                <strong>O nome precisa ter no mínimo 4 letras.</strong>
            </span>
        @elseif ($errors->has('phone'))
            <span class="help-block">
                <strong>O formato de celular é inválido.Utilize o formato: (00)00000-0000.</strong>
            </span>
        @elseif ($errors->has('social_number'))
            <span class="help-block">
                <strong>O campo de cpf é inválido.</strong>
            </span>            
        @else 
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif


        <div class="pull-right">
            <input class="btn btn-primary " type="submit">
            <a class="btn btn-primary" href="http://camarotes.carnatal.com.br">Cancelar</a>
        </div>
    </form>   

                           
    @endif
                
{{-- @endif --}}
    
</div>

@endsection

@section('script')
<script>

var $Cpf = $("#cpf");
$Cpf.mask('000.000.000-00', {reverse: false});

var $Telefone = $("#phone");
$Telefone.mask('(00)00000-0009', {reverse: false});
  
</script>
@endsection