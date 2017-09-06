<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vendas Carnatal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: url('img/Tela-de-vendas.png') no-repeat center center fixed;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body >

       <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Acesso</a>
                    @endif
                </div>
            @endif 

             {{--  <div class="content" style="width: 100%">
                <div>
                    <div class="links">
                        <a href="{{ url('/login') }}"><img src="img/botao.png"></img></a>  
                    </div>
                </div>
                
            </div>  --}}

        <div class="content">
            <div style="position:absolute;left:0;right:0;margin:0 auto;top:50%;transform:TranslateY(-50%);">
                <img src="img/Camarotes_marca.png"></img>
            </div>
            <div style="position:absolute;left:0;right:0;margin:0 auto;top:70%;transform:TranslateY(-70%);">
                <a href="{{ url('/login') }}"><img src="img/bt_acesso.png"></img></a>  
            </div>
        </div>
    </body>
</html>
