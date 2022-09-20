@extends('layouts.home.master')
{{-- Page Title --}}
@section('title', 'هاي رايز - الموقع الرسمي')
{{-- Page Description --}}
@section('description',
    'متخصصون في أعمال الترميمات والتشطيب (بلاط وسيراميك - جبس وجبس بورد - تكسير وترحيل وترميم - دهان
    ومعالجة وترميم الأبواب الخشبية - بروفايل - براويز وبانوهات)')
    {{-- Page Content --}}
@section('content')
    @include('home.partials.header')
    @include('home.partials.hero')
    @include('home.partials.services')
    @include('home.partials.footer')









    {{-- Type IT Effect --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>

    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script>
        // Type EFFECT
        new TypeIt("#hero", {
                lifeLike: true,
                loop: true
            })
            .type("بلاط وسيراميك")
            .pause(1200)
            .delete("بلاط وسيراميك")
            .pause(200)
            .type("جبس وجبس بورد")
            .pause(1200)
            .delete("جبس وجبس بورد")
            .pause(200)
            .type("تكسير وترحيل وترميم")
            .pause(1200)
            .delete("تكسير وترحيل وترميم")
            .pause(200)
            .type("دهان ومعالجة وترميم الأبواب الخشبية ")
            .pause(1200)
            .delete("دهان ومعالجة وترميم الأبواب الخشبية ")
            .pause(200)
            .type("بروفايل ")
            .pause(1200)
            .delete("بروفايل ")
            .pause(200)
            .type("براويز وبانوهات")
            .pause(1200)
            .delete("براويز وبانوهات")
            .pause(200)
            .go();

        // GSAP SCROLL EFFECT
        gsap.registerPlugin(ScrollTrigger);
        const container = document.querySelector('.container')
        let sections = gsap.utils.toArray(".panel");

        gsap.to(sections, {
            x: () => (container.scrollWidth - document.documentElement.clientWidth) + "px",
            // xPercent: 80 * (sections.length - 1),
            ease: "ease-out",
            scrollTrigger: {
                trigger: ".container",
                pin: true,
                scrub: 1,
                // snap: 1 / (sections.length - 1),
                end: () => "+=" + document.querySelector(".container").offsetWidth
            }
        });
    </script>
    {{-- End Type IT Effect --}}
@endsection
