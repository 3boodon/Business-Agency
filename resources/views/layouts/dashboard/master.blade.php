<!DOCTYPE html>
<html lang="ar" dir="rtl" class="box-border">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield ('description')">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>@yield('title', 'هاي رايز')</title>
    @include('layouts.dashboard.partials.libraries')
</head>

<body class="h-screen w-screen bg-slate-100 overflow-x-hidden">
    @include('layouts.dashboard.partials.sidebar')

    <nav
        class="w-full h-[82px] mx-h-[82px] bg-white flex justify-between items-stretch border-b-[1px]  border-slate-200 shadow-lg shadow-slate-100 fixed top-0">
        <div class="w-[290px] px-7 flex justify-between items-center border-l-[1px] border-slate-200 ">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            <button class="bg-slate-50 p-3 rounded-full fill-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
            </button>

        </div>
        <div class="w-auto">
        </div>
        <div class="min-w-fit px-7 my-auto">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit"
                    class="w-full text-start px-[15px] py-[10px] bg-slate-50 text-slate-700  hover:bg-slate-700 hover:text-white rounded-lg font-bold  text-base cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 inline ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                    تسجيل الخروج
                </button>
            </form>
        </div>
    </nav>
    <main class="min-h-[86%] w-full pr-[320px] pl-[30px] pt-[112px] pb-[92px] ">
        @yield('content')
    </main>
    <footer
        class="w-full h-[52px] mx-h-[52px] p-4  mr-[290px] bg-white text-sm text-slate-700 text-start  border-t-[1px] border-slate-200 fixed bottom-0">
        <p>هاي رايز | جميع الحقوق محفوظة &copy 2022</p>
    </footer>

</body>

</html>
