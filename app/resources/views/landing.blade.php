
<!DOCTYPE html>

<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link rel="icon" type="image/svg+xml" href="{{ asset('icons/icon.svg') }}">
        <link rel="icon" type="image/png" href="{{ asset('icons/icon.png') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">


        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class = "bg-white animate-fade-up overflow-hidden">
        
        <x-header/>

        <!-- Imagen de Fondo -->
        <div class = "relative min-h-screen">
            
            <!-- Imagen -->
            <img
                src = "{{ asset('images/fondo1.png') }}"
                class = "absolute inset-0 w-full h-full object-cover opacity-100"
                alt = ""
            >

            <!-- Imagen -->
            <picture>
                <source media = "(max-width: 768px)" srcset="{{ asset('images/fondo_mobile.png') }}">
                <img
                    src = "{{ asset('images/fondo2.png') }}"
                    class = "absolute inset-0 w-full h-full object-fit opacity-100"
                    alt = ""
                >
            </picture>

            <!-- Capa negra -->
            <div class = "absolute inset-0"></div>

            <div class = "flex flex-col relative z-10 items-center justify-center min-h-screen gap-4">
                
                <h1 class = "font-hand text-white text-5xl md:text-7xl tracking-wide drop-shadow-lg"
                    style = "text-shadow: 4px 4px 1px rgba(0,0,0,0.5);">
                    Calypse
                </h1>

                <p class = "font-hand text-white text-xl md:text-3xl tracking-wider max-w-xl drop-shadow-lg"
                    style = "text-shadow: 4px 4px 2px rgba(0,0,0,0.5);">
                    Raquetas para deportistas que juegan al límite
                </p>

            </div>

        </div>

    </body>

</html>
