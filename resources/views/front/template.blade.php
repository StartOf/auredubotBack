<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Auredubot - Front</title>
        <meta name="description" content="">    
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @yield('head')

        {!! Html::style('css/front.css') !!}

    </head>

  <body>

    <header>

        <div class="brand">Auredubot - Front</div>
        <div id="flags" class="text-center"></div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Auredubot</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
	                    <li><a href="#">lien1</a></li>
	                    <li><a href="#">lien2</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('header')    
    </header>

    <main class="container">
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>
        
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            $('#logout').click(function(e) {
                e.preventDefault();
                $('#logout-form').submit();
            })
        });
    </script>

    @yield('scripts')

  </body>
</html>