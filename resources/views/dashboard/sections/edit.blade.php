@extends('layouts.dashboard.master')
{{-- Page Title --}}
@section('title', 'هاي رايز - لوحة التحكم')
{{-- Page Description --}}
@section('description', 'مجرد شاشة مؤقتة لإضافة مستخدم جديد')
{{-- Page Content --}}
@section('content')

    <div class="mb-8">
        <h3 class="font-bold text-3xl mb-2">إدارة الأقسام</h3>
        <ol class="flex gap-2">
            <li>لوحة التحكم</li>
            <li>/</li>
            <li>الأقسام</li>
            <li>/</li>
            <li>{{ $section->name }}</li>
            <li>/</li>
            <li>تعديل </li>

        </ol>
    </div>
    <form action="{{ route('sections.update', $section->id) }}" method="POST" class="w-full bg-white p-7">
        @csrf
        @method('PUT')
        <h3 class="font-bold text-2xl mb-4">تعديل قسم {{ $section->name }}</h3>
        <div class="mb-3">
            <label for="name" class="block mb-2 font-semibold">
                اسم القسم
            </label>
            <input
                class="block px-4 py-2  w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-slate-300 "
                type="text" placeholder="اسم القسم" id="name" value="{{ $section->name }}" name="name" required>
            @error('name')
                <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block mb-2 font-semibold">
                وصف القسم
            </label>
            <textarea
                class="block px-4 py-2  w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-slate-300 "
                type="text" placeholder="وصف القسم" id="description" value="{{ old('description') }}" name="description"
                required>{{ $section->description }}</textarea>
            @error('description')
                <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="w-fit text-start px-[15px] py-[10px] bg-slate-800 text-white  hover:bg-slate-700 rounded-lg font-bold  text-base cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 inline ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            تعديل القسم </button>
    </form>


@endsection
