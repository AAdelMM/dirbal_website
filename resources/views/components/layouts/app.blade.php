<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://cdn.tiny.cloud/1/j6zats0eca1h402xomzh845yw0zqwas67by2waj7b4gbwx8x/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        {{ $slot }}
        @livewire('notifications')
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
