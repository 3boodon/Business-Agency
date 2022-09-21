@extends('layouts.dashboard.master')
{{-- Page Title --}}
@section('title', 'هاي رايز - لوحة التحكم')
{{-- Page Description --}}
@section('description', 'مجرد شاشة مؤقتة لإضافة مستخدم جديد')
{{-- Page Content --}}
@section('content')

    <div class="mb-8 flex items-stretch gap-4">
        <a href="{{ route('dashboard.sections.index') }}" class="bg-slate-50 py-6 px-3"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
            </svg></a>
        <div>
            <h3 class="font-bold text-3xl mb-2">قسم {{ $section->name }}</h3>
            <ol class="flex gap-2">
                <li>لوحة التحكم</li>
                <li>/</li>
                <li>الأقسام</li>
                <li>/</li>
                <li>{{ $section->name }}</li>

            </ol>
        </div>
    </div>
    <form action="{{ route('docs.store') }}" method="POST" enctype="multipart/form-data" class="w-full bg-white p-7">
        @csrf
        <h3 class="font-bold text-2xl mb-4">إضافة ملف جديد</h3>
        <div class="mb-3 relative">
            <label for="file"
                class="flex flex-col items-center justify-center cursor-pointer mb-2 font-semibold w-full border-2 border-dashed border-slate-300 h-40 mx-h-40 bg-slate-50 rounded-lg ">
                <div class="flex gap-3 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                    </svg>
                </div>
                <p class="text-slate-400 font-normal mt-4">اضغط هنا لرفع الصور او الفيديوهات</p>
            </label>
            <input type="file" class="file:hidden   absolute top-3 right-5 opacity-80 max-w-fit text-center"
                id="file" name="document" value="{{ old('document') }}" required>

        </div>
        @error('document')
            <span class="block mt-3 bg-red-50 text-red-600 text-xs rounded-md p-3">{{ $message }}</span>
        @enderror
        <button type="submit"
            class="w-fit text-start px-[15px] py-[10px] bg-slate-800 text-white  hover:bg-slate-700 rounded-lg font-bold  text-base cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 inline ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            إضافة مستند </button>
        <div class="inline-block w-fit text-start px-[15px] font-bold text-base ">
            <input type="radio" name="type" value="image" id="image" value="{{ old('type') }}" required>
            <label for="image" class="inline-block mb-2 font-semibold ml-4">
                صورة
            </label>
            <input type="radio" name="type" value="video" id="video" value="{{ old('type') }}" required>
            <label for="video" class="inline-block mb-2 font-semibold">
                فيديو </label>
            <input type="number" name="section_id" value="{{ $section->id }}" hidden required>
        </div>
    </form>
    <div class="w-full bg-white p-7 mt-5">
        <h3 class="font-bold text-2xl mb-4">كل الملفات</h3>
        <table class="w-full " id="docs">
            <thead class="[&_th]:text-start  [&_th]:py-4 border-b-[1px] ">
                <th>الملف</th>
                <th class="w-[70%]">مسار الملف</th>
                <th>الإجراءات</th>
            </thead>
            <tbody>

                @foreach ($section->documents as $doc)
                    <tr class=" odd:bg-slate-50 h-5 ">
                        @if ($doc->type == 'video')
                            <td>
                                <video src="{{ asset('uploads/' . $doc->path) }}" controls class="h-24"></video>
                            </td>
                        @else
                            <td>
                                <img src="{{ asset('uploads/' . $doc->path) }}" alt="{{ $section->name }}"
                                    class="h-24" />
                            </td>
                        @endif
                        <td>{{ $doc->path }}</td>
                        <td class="flex">
                            <form action="{{ route('docs.destroy', $doc->id) }}" method="POST">
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

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="mt-6 p-4 laravel-pagination" dir="ltr">
            {{ $section->documents()->links() }}
        </div> --}}
    </div>

    <script>
        const gallery = new Viewer(document.getElementById('docs'));
    </script>
@endsection
