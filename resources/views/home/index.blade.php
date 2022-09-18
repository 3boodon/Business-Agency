@extends('layouts.home.master')
{{-- Page Title --}}
@section('title', 'هاي رايز')
{{-- Page Description --}}
@section('description', 'مجرد شاشة مؤقتة لإضافة مستخدم جديد')
{{-- Page Content --}}
@section('content')
    <main
        class="w-screen h-screen grid place-items-center px-5 bg-gradient-to-tl from-slate-200 to-slate-100 overflow-scroll  ">

        <div class="w-full max-w-md px-12 py-16 rounded-2xl bg-white shadow-2xl shadow-slate-100">

            {{-- Login Card Header --}}
            <header class="text-center">
                <h1 class=" font-bold text-3xl  mb-4  text-slate-700">إنشاء حساب</h1>
                <p class="text-base  text-slate-500 ">مجرد شاشة مؤقتة لإضافة مستخدم جديد</p>
            </header>
            {{-- Actions Block --}}
            @auth
                <a href="{{ route('dashboard.sections.index') }}"
                    class="block w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md mt-6">
                    داشبورد
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button
                        class="block w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md mt-6">
                        تسجيل خروج
                    </button>
                </form>
            @else
                <a href="{{ route('register') }}"
                    class="block w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md mt-6">
                    إنشاء حساب
                </a>
                <a href="{{ route('login') }}"
                    class="block w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md mt-6">
                    تسجيل دخول
                </a>

            @endauth
        </div>
    </main>
@endsection
