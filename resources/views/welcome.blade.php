<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

.antialiased a{
    font-size:xxx-large;
    text-decoration: none;
    font-weight: bold;
}

.antialiased a:first-child{
    margin-left: 36%;
}

.antialiased a:last-child{
    margin-left: 200px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4; /* Fallback color in case the background image doesn't load */
}

header {
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background for contrast */
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 36px;
}

section#image-section {
    height: 80vh; /* Full viewport height */
    background-image: url('images/game.jpg'); /* Replace 'background_image.jpg' with your image file */
    background-size: cover; /* Cover the entire section with the background image */
    background-position: center; /* Center the background image */
}

        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    
    <header>
        <h1>Welcome to Video Games Store</h1>
    </header>

    <section id="image-section">
        <!-- This section will be used for the background image -->
    </section>
    </body>
</html>
