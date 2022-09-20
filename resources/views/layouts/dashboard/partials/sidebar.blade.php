<aside class="w-[290px] h-[92%] bg-white px-6 py-10 fixed top-[82px] right-0 border-l-[1px] border-slate-200 ">
    <div class="w-20 mx-auto grid place-items-center ">
        <a href="/"><img class="h-20  object-center" src="{{ asset('graphics.png') }}" alt="شعار المؤسسة"></a>
    </div>
    <h1 class="text-xl font-bold text-center mt-3 text-slate-800">{{ auth()->user()->name }}</h1>
    <p class="font-normal text-slate-400 text-center">{{ auth()->user()->email }}</p>

    <ul class="mt-9 pt-5 border-t-[1px]">
        <li>
            <a href="{{ route('dashboard.sections.index') }}"
                class="block px-[15px] py-[10px] @if (Route::current()->getName() == 'dashboard.sections.index') bg-slate-800 text-white @endif hover:bg-slate-800 hover:text-violet-50 rounded-lg font-bold  text-base cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 inline ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
                الأقسام
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.tags.index') }}"
                class="block px-[15px] py-[10px]  @if (Route::current()->getName() == 'dashboard.tags.index') bg-slate-800 text-white @endif  hover:bg-slate-800 hover:text-violet-50 rounded-lg font-bold  text-base cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 inline ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>




                الكلمات المفتاحية
            </a>
        </li>
        <li>
            <a href="/"
                class="block px-[15px] py-[10px] hover:bg-slate-800 hover:text-violet-50 rounded-lg font-bold  text-base cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 inline ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                </svg>
                الشاشة الرئيسية
            </a>

        </li>
    </ul>


</aside>
