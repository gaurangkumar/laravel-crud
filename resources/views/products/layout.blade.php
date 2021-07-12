<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" integrity="sha256-39jKbsb/ty7s7+4WzbtELS4vq9udJ+MDjGTD5mtxHZ0=" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <section class="m-3">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Laravel 5.8 CRUD Example</h2>
                        </div>
                    </div>
                </div>
                <hr>
                @yield('content')
            </section>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
