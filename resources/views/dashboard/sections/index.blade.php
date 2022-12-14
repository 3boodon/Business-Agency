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

        </ol>
    </div>
    <form action="{{ route('sections.create') }}" method="POST" class="w-full bg-white p-7">
        @csrf
        <h3 class="font-bold text-2xl mb-4">إضافة قسم جديد</h3>
        <div class="mb-3">
            <label for="name" class="block mb-2 font-semibold">
                اسم القسم
            </label>
            <input
                class="block px-4 py-2  w-full bg-slate-50 hover:bg-slate-100 placeholder:text-slate-400 text-slate-700 focus:outline-slate-300 "
                type="text" placeholder="اسم القسم" id="name" value="{{ old('name') }}" name="name" required>
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
                required></textarea>
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

            إضافة القسم </button>
    </form>
    <div class="w-full bg-white p-7 mt-5">
        <h3 class="font-bold text-2xl mb-4">كل الأقسام</h3>
        <table class="w-full ">
            <thead class="[&_th]:text-start  [&_th]:py-4 border-b-[1px] ">
                <th>اسم القسم</th>
                <th class="w-[70%]">وصف القسم</th>
                <th>الإجراءات</th>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr class=" odd:bg-slate-50">
                        <td><a href="{{ route('sections.show', $section->id) }}" class="font-bold">{{ $section->name }}</a>
                        </td>
                        <td>{{ $section->description }}</td>
                        <td class="flex items-center">
                            <form action="{{ route('sections.destroy', $section->id) }}" method="POST"
                                onsubmit="confirm('إذا قمت بحذف هذا القسم فسيتم حذف جميع البيانات الخاصة به تماماً .. هل تريد حذفه نهائيا ؟')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-fit text-start px-[15px] py-[10px]  text-red-700  hover:bg-red-700 hover:text-white rounded-lg font-bold  text-base cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                            <form action="{{ route('sections.edit', $section->id) }}">
                                @csrf
                                <button type="submit"
                                    class="w-fit text-start px-[15px] py-[10px]  text-blue-700  hover:bg-blue-700 hover:text-white rounded-lg font-bold  text-base cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>

                                </button>
                            </form>


                            {{-- Toggle Section --}}
                            <form action="{{ route('sections.state', $section->id) }}" method="POST" dir="ltr"
                                id="toggleForm">
                                @csrf
                                @method('PUT')
                                {{-- Hidden Fields --}}
                                {{-- <input type="hidden" name="name" value="{{ $section->name }}">
                                <textarea name="description" hidden>{{ $section->description }}</textarea> --}}
                                {{-- Hidden Fields --}}
                                <label for="{{ $section->id . $section->name }}"
                                    class="inline-flex relative items-center cursor-pointer">
                                    {{-- <input type="hidden" name="isActive" value="0"> --}}
                                    <input type="checkbox" id="{{ $section->id . $section->name }}" name="isActive"
                                        class="sr-only peer toggleButton" @checked($section->isActive)>
                                    <div
                                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-slate-300 dark:peer-focus:ring-slate-900 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-slate-600">
                                    </div>
                                </label>
                            </form>
                            {{-- End Toggle --}}




                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6 p-4 laravel-pagination" dir="ltr">
            {{ $sections->links() }}
        </div>
    </div>



    <script>
        $('.toggleButton').each(function(index) {
            $(this).change(function() {
                $(this).closest('form').submit()
            })
        });
        // $('.toggleButton').change(function() {
        //     console.log($('.toggleButton'));
        // })
    </script>
@endsection
