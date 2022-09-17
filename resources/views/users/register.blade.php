@extends('layouts.home.master')
{{-- Page Title --}}
@section('title', 'هاي رايز - إنشاء حساب')
{{-- Page Description --}}
@section('description', 'مجرد شاشة مؤقتة لإضافة مستخدم جديد')
{{-- Page Content --}}
@section('content')
    <main class="w-screen h-screen grid place-items-center px-5 bg-gradient-to-tl from-slate-200 to-slate-100  ">
        <div class="w-full max-w-md px-12 py-16 rounded-2xl bg-white shadow-2xl shadow-slate-100">

            {{-- Login Card Header --}}
            <header class="text-center">
                <h1 class=" font-bold text-3xl  mb-4  text-slate-700">إنشاء حساب</h1>
                <p class="text-base  text-slate-500 ">مجرد شاشة مؤقتة لإضافة مستخدم جديد</p>
            </header>


            {{-- Login Form --}}
            <form action="/users" method="POST" class="mt-5 [&_div]:mb-5">
                @csrf
                {{-- Name Block --}}
                <div>
                    <label for="username" class="block mb-2 font-semibold">
                        الإسم
                    </label>
                    <input
                        class="block px-4 py-4 rounded-md w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-blue-700 "
                        type="text" placeholder="أدخل اسمك" id="username" name="name" value="{{ old('name') }}"
                        required>
                    @error('name')
                        <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Email Block --}}
                <div>
                    <label for="email" class="block mb-2 font-semibold">
                        الإيميل
                    </label>
                    <input
                        class="block px-4 py-4 rounded-md w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-blue-700 "
                        type="email" placeholder="أدخل إيميلك" id="email" name="email" value="{{ old('email') }}"
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
                        type="password" placeholder="كلمة السر" id="password" name="password" value="{{ old('password') }}"
                        required>
                    @error('password')
                        <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Password Confirmation Block --}}
                <div>
                    <label for="password" class="block mb-2 font-semibold">
                        تأكيد كلمة السر
                    </label>
                    <input
                        class="block px-4 py-4 rounded-md w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-blue-700 "
                        name="password_confirmation" type="password" placeholder="أعد كلمة السر" id="password"
                        value="{{ old('password_confirmation') }}" required>
                    @error('password_confirmation')
                        <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
                    @enderror
                </div>
                <p class="text-base  text-slate-500 mb-4 ">تملك حساباً بالفعل <a href="{{ route('login') }}"
                        class="text-blue-700 font-bold">تسجيل الدخول</a></p>



                {{-- Actions Block --}}
                <button type="submit"
                    class="w-full text-center text-white bg-blue-700 hover:bg-blue-800 font-bold p-3 rounded-md">
                    إنشاء حساب
                </button>
                <a href="/"
                    class="block w-full text-center text-slate-100 bg-slate-700 hover:bg-slate-800 font-bold p-3 rounded-md mt-2">
                    الشاشة الرئيسية
                </a>
            </form>
        </div>
    </main>
@endsection
