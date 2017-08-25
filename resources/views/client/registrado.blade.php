@extends('layouts.app')

@section('content')

<div class="container generalBg">

    <h3>Registro completado com sucesso!</h3>
    
    <p> Voce será redirecionado para o site do camarotes em 10 segundos.. <p>
    <progress value="0" max="10" id="progressBar"></progress>
    <p> ou clique aqui para ir direto: <a href="http://camarotes.carnatal.com.br">Camarotes</a>
    
</div>

@endsection

@section('script')
<script>
var timeleft = 10;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 10 - --timeleft;
  if(timeleft <= 0){
    clearInterval(downloadTimer); 
    if ( document.getElementById("progressBar").value == 10)
        window.location = "http://camarotes.carnatal.com.br";
  }
    
},1000);

    

</script>
@endsection