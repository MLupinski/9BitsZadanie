<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books List</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    </head>
    <body>
           @yield('content')
    </body>
</html>