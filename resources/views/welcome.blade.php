<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cat Calculator</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/catpic.css') }}" rel="stylesheet">
        <link href="{{ asset('css/calculator.css') }}" rel="stylesheet">
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">


    </head>
    <body>
        <!-- <div class="container-fluid"> -->
            <!-- <div class="col-md-12 text-center">
                <h1>Cat Calculator</h1>
            </div> -->
            <div id="app"></div>
        <!-- </div> -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
