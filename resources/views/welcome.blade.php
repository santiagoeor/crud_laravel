<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>
        <div class="content">
            <div class="row">
                <div class="col-md-4">Hola</div>
                <div class="col-md-4">Hola</div>
                <div class="col-md-4">Hola</div>
            </div>
        </div>
    </body>

</html>
