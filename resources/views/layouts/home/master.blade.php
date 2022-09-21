<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield ('description')">
    <meta name="keywords" content="@foreach ($tags as $tag)<?= $tag->name . ',' ?> @endforeach">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <title>@yield('title', 'هاي رايز')</title>
    @include('layouts.home.partials.libraries')
    <style>
        html {
            overflow-y: scroll;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            overflow-scrolling: touch;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {

            width: .5rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background-color: #5600b1;
        }

        ::-webkit-scrollbar-thumb:active {
            background-color: #5600b1;
        }
    </style>
</head>

<body class=" w-full  overflow-y-visible overflow-x-hidden relative" style="height: unset">

    @yield('content')




</body>

</html>
