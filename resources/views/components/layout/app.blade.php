<!DOCTYPE html>
<html lang=" {{ config('app.locale') }} " class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }}</title>
</head>
<body class="bg-base-900 h-full"></body>
    {{ $slot }}
</body>
</html>