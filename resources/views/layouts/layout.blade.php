<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>IAsBlog-OpenGPT</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>

        <!-- Styles
        <link rel="stylesheet" href="https://github.com/necolas/normalize.css"/>-->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="{{asset('assets/dist/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/layout.css')}}"/>

        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        @yield('otherLink')
    </head>
    <body class="antialiased">
        @include('layouts.partials.navbar')

        <main class="postsMain">
            @yield('main')
        </main>

        <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/like-post.js')}}"></script>
        <script src="{{asset('js/modifyImage.js')}}"></script>
        <script src="{{asset('js/deletePost.js')}}" type="text/babel" ></script>
    </body>
</html>
