 {{-- OUR SERVICES --}}
 <main
     class=" w-[100%] md:w-[95%] md:my-9 mx-auto p-20  h-fit  md:rounded-[42px]  grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 grid-flow-row gap-8 "
     id="docs">

     @foreach ($section->documents as $doc)
         @if ($doc->type == 'video')
             <div class="w-full h-full">

                 <video src="{{ asset('uploads/' . $doc->path) }}" controls
                     class="rounded-2xl h-full w-full object-cover object-center"></video>
             </div>
         @else
             <div class="w-full h-full">

                 <img src="{{ asset('uploads/' . $doc->path) }}"
                     class="rounded-2xl h-full w-full object-cover object-center cursor-zoom-in"
                     alt="{{ $section->name }}">
             </div>
         @endif
     @endforeach


 </main>
 {{-- OUR SERVICES End --}}
