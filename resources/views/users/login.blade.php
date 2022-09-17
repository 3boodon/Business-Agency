@extends('layouts.home.master')
{{-- Page Title --}}
@section('title', 'هاي رايز - تسجيل الدخول')
{{-- Page Description --}}
@section('description', 'قم بتسجيل الدخول للوصول إلى لوحة التجكم الخاصة بالموقع')
{{-- Page Content --}}
@section('content')
    <main class="w-screen h-screen grid place-items-center px-5 bg-gradient-to-tl from-slate-200 to-slate-100  ">
        <div class="w-full max-w-md px-12 py-16 rounded-2xl bg-white shadow-2xl shadow-slate-100">

            {{-- Login Card Header --}}
            <header class="text-center">
                <h1 class=" font-bold text-3xl  mb-4  text-slate-700">تسجيل الدخول</h1>
                <p class="text-base  text-slate-500 ">قم بتسجيل الدخول للوصول إلى لوحة التحكم</p>
            </header>


            {{-- Login Form --}}
            <form action="/users/authenticate" method="GET" class="mt-5 [&_div]:mb-5">
                @csrf
                {{-- Email Block --}}
                <div>
                    <label for="username" class="block mb-2 font-semibold">
                        الإيميل
                    </label>
                    <input
                        class="block px-4 py-4 rounded-md w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-blue-700 "
                        type="email" placeholder="أدخل إيميلك" id="username" value="{{ old('email') }}" name="email"
                        required>
                    @error('email')
                        <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
                    @enderror
                </div>


                {{-- Password Block --}}
                <div>
                    <label for="password" class="block mb-2 font-semibold">
                        كلمة السر
                    </label>
                    <input
                        class="block px-4 py-4 rounded-md w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-blue-700 "
                        type="password" placeholder="كلمة السر" id="password" value="{{ old('password') }}" name="password"
                        required>
                    @error('password')
                        <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
                    @enderror
                </div>
                <p class="text-base  text-slate-500 mb-4 ">لا تملك حساباً ؟ <a href="{{ route('register') }}"
                        class="text-blue-700 font-bold">إنشاء
                        حساب</a></p>



                {{-- Actions Block --}}
                <button type="submit"
                    class="w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md">
                    تسجيل الدخول
                </button>
                <a href="/"
                    class="block w-full text-center text-slate-100 bg-slate-700 hover:bg-slate-800 font-bold p-3 rounded-md mt-2">
                    الشاشة الرئيسية
                </a>
            </form>
        </div>
    </main>
@endsection
