{{-- Hero Start --}}
<section
    class="w-[100%] md:w-[95%] md:my-9 mx-auto md:pt-36 md:pb-20 pt-12 h-[100vh] md:h-fit  md:rounded-[42px] bg-violet-50 flex flex-col justify-center items-center">
    <h1 class="text-[40px] md:text-[64px]  sm:text-[54px] text-center ">
        قسم <span class="block font-bold bg-white rounded-lg ">{{ $section->name }}</span>
    </h1>
    <p class="my-10 text-xl max-w-4xl px-6 text-center leading-10 ">{{ $section->description }}</p>
    <div
        class="h-[56px] transition-all  w-[35px] border-violet-800 border-2 rounded-full grid place-items-center cursor-pointer group">
        <a href="#docs"
            class=" relative block group-hover:h-[100%] group-hover:w-[100%] h-[40%] w-[3px] bg-violet-800 rounded-full transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 absolute top-1/2 left-1/2 -translate-x-1/2 transition-all scale-0 group-hover:scale-100 stroke-white ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>

        </a>
    </div>
</section>
{{-- Hero End --}}
