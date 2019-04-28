<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Testing Pusher</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body class="bg-grey-lighter">


    <div class="block md:flex align-stretch">

        <div class="bg-blue-darker py-24 px-8 md:flex-1 md:h-screen md:p-12 md:justify-center flex flex-col">
            <h1 class="text-blue text-center"> Testing Tailwind for the future </h1>
            <p class="text-white text-center"> Hi there you nerd </p>
        </div>


        <div class="py-12 px-8 flex flex-1 flex-col md:h-screen justify-center">

            <div class="bg-white inline-flex p-6 rounded-lg shadow-md md:-ml-12">
                <div class="w-12 h-12">
                    <img class="rounded-full" src="https://api.adorable.io/avatars/120/abott@adorable.png" alt="Avatar">
                </div>
                <p class="mt-4 ml-4">"It is truly awesome"</p>
            </div>

            <div class="bg-white inline-flex p-6 rounded-lg shadow-md mt-8 md:ml-8">
                <div class="w-12 h-12">
                    <img class="rounded-full" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="Avatar">
                </div>
                <p class="mt-4 ml-4">"A great utility framework"</p>
            </div>
        </div>

    </div>

</body>
</html>
