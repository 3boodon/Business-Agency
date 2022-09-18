<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield ('description')">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>@yield('title', 'هاي رايز')</title>
    @include('layouts.home.partials.libraries')
</head>

<body class="h-full w-full">

    @yield('content')

</body>

</html>
