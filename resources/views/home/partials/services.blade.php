 {{-- OUR SERVICES --}}
 <main class=" w-[{{ 100 * count($sections) }}%]  container flex flex-nowrap h-screen gap-12" id="services">
     <section class="panel min-w-fit   md:rounded-[42px] pt-5 px-80 flex flex-col items-center justify-center  ">
         <svg width="100" height="75" viewBox="0 0 39 75" fill="none" xmlns="http://www.w3.org/2000/svg"
             class="h-[15rem]">
             <path
                 d="M33.0196 55.0948V21.3299L27.0437 23.5521V9.01005L11.9563 0.680176V25.897L15.0874 24.7337V6.22434L23.9172 11.1777V24.7155L21.0633 25.7789V13.0546L17.9367 11.2641V26.9422L5.98042 31.3912V45.0244L0 42.8113V74.2585H21.0633V57.3215L17.9367 56.1582V70.9229H3.12654V47.292L11.9563 50.5776V64.2108H9.08879V52.8498L5.96225 51.6865V67.5646H15.051V51.7592L35.8371 59.4847V70.9138H27.0437V62.8702L29.893 63.9336V67.5691H33.0196V61.7523L23.9308 58.3622V74.2403H39V57.3215L33.0196 55.0948ZM29.893 53.9314L21.0633 50.6685V35.7856L23.9172 34.7268V48.4554L27.0437 49.6188V30.2187L17.9549 33.6043V49.4734L9.08879 46.1968V33.5634L11.9563 32.4909V44.0064L15.0874 45.1698V31.3412L29.893 25.8289V53.9314Z"
                 fill="#7500D1" />
         </svg>
         <h2 class="text-[40px] md:text-[64px]  sm:text-[54px] text-center font-bold">خدماتنا</h2>
     </section>
     @foreach ($sections as $section)
         @if ($section->isActive)
             <section
                 class="panel flex flex-col justify-center lg:flex-row relative min-w-fit bg-violet-50 px-40 fill-violet-100 odd:bg-slate-50 odd:fill-slate-100  md:rounded-[42px] md:my-9 p-10  ">
                 {{-- Decoration --}}
                 <div class="overflow-hidden h-fit w-fit absolute bottom-0 lg:right-[40rem]  right-[25%] z-0  ">
                     <svg width="340" height="542" viewBox="0 0 340 542" xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M287.863 474.384V180.023L235.766 199.396V72.6194L104.234 0V219.839L131.531 209.697V48.3337L208.509 91.5171V209.539L183.629 218.809V107.879L156.371 92.2699V228.951L52.137 267.737V386.591L0 367.297V641.452H183.629V493.796L156.371 483.654V612.372H27.2571V406.36L104.234 435.003V553.857H79.2356V454.812L51.9786 444.67V583.095H131.214V445.304L312.426 512.654V612.293H235.766V542.17L260.606 551.44V583.134H287.863V532.424L208.627 502.869V641.293H340V493.796L287.863 474.384ZM260.606 464.241L183.629 435.796V306.048L208.509 296.817V416.502L235.766 426.644V257.516L156.53 287.031V425.376L79.2356 396.812V286.674L104.234 277.325V377.716L131.531 387.858V267.301L260.606 219.245V464.241Z" />
                     </svg>
                 </div>
                 {{-- Decoration --}}
                 <div
                     class="flex flex-col lg:justify-end justify-center items-center lg:items-start h-fit lg:h-full py-20   text-center lg:text-start  z-0 relative">
                     <span class="text-lg font-semibold  text-slate-600">هذه الخدمة متوفرة في الرياض
                         فقط</span>
                     <h3 class="text-[40px] md:text-[54px] lg:w-[35rem] w-fit mb-7 sm:text-[54px] font-bold">
                         {{ $section->name }}
                     </h3>
                     <a href="{{ route('section.details', $section->id) }}"
                         class=" flex items-center w-fit rounded-full text-[23px] font-bold py-5 px-7 bg-white gap-5 fill-black hover:gap-7 hover:text-violet-800 hover:fill-violet-800 transition-all ">
                         مشاهدة المزيد
                         <svg width="30" height="16" viewBox="0 0 30 16" xmlns="http://www.w3.org/2000/svg"
                             class="">
                             <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M0.292893 8.70705C-0.0976311 8.31653 -0.0976311 7.68336 0.292893 7.29284L6.65685 0.92888C7.04738 0.538355 7.68054 0.538355 8.07107 0.92888C8.46159 1.3194 8.46159 1.95257 8.07107 2.34309L3.41421 6.99995H30V8.99995H3.41421L8.07107 13.6568C8.46159 14.0473 8.46159 14.6805 8.07107 15.071C7.68054 15.4615 7.04738 15.4615 6.65685 15.071L0.292893 8.70705Z" />
                         </svg>
                     </a>
                 </div>
                 <div
                     class=" mx-auto h-[270px] w-[450px] lg:mt-40 lg:ml-30 z-0 relative rounded-full overflow-hidden group hover:shadow-2xl hover:shadow-slate-300 transition-all hover:scale-105 ">
                     <img src="{{ asset('uploads/' . $section->documents[0]->path) }}" alt="{{ $section->name }}"
                         class="h-full w-full object-cover object-center group-hover:scale-110 transition-all ease-out">
                 </div>



             </section>
         @endif
     @endforeach



 </main>
 {{-- OUR SERVICES End --}}
