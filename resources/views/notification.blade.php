<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Notification Testing</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>


        <div id="app">
            <notification-component></notification-component>
        </div>



        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

    </body>
</html>
