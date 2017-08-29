<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">

                <div class="row">
                    <div class="col s12 m6">
                        <div class="card blue-grey lighten-5">
                            <div class="card-content white-text">
                                <span class="card-title black-text">Card Title</span>
                                <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="waves-effect waves-light btn">button</a>
                <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
                <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                <a class="btn" onclick="Materialize.toast('I am a toast', 4000)">Toast!</a>

<div class="container">
    <div class="row">
        <div class="col s6">
            <div class="card">
                <div class="card-image">
                    <img src="http://lorempixel.com/400/300/sports/1">
                    <span class="card-title">Card Title</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>


            </div>
        </div>
        <script src="/js/materialize.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
