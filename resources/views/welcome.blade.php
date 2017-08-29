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
        <div class="wrap col s6">
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
                <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
                <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
            </div>
        </div>

    </div>

    <!-- Element Showed -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a id="menu" class="waves-effect waves-light btn btn-large btn-floating" onclick="$('.tap-target').tapTarget('open')"><i class="material-icons">menu</i></a>
    </div>
    <!-- Tap Target Structure -->
    <div class="tap-target" data-activates="menu">
        <div class="tap-target-content">
            <h5>Title</h5>
            <p>A bunch of text</p>
        </div>
    </div>

    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>


    <div class="parallax-container">
        <div class="parallax"><img src="https://lorempixel.com/1200/1200/food/1"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">Parallax</h2>
            <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="https://lorempixel.com/1200/1200/food/2"></div>
    </div>


    <div style="height: 500px;"></div>
</div>


            </div>
        </div>
        {{--<script src="/js/materialize.min.js"></script>--}}
        <script src="/js/app.js"></script>
    </body>
</html>
