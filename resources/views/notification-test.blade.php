<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Trigger</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>

        <div id="app" class="container mx-auto py-4">
            <notification-trigger></notification-trigger>
        </div>






        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>


    </body>
</html>
