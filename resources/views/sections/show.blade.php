@extends('layouts.home.master')
{{-- Page Title --}}
@section('title', $section->name . ' - هاي رايز')
{{-- Page Description --}}
@section('description', $section->description)
{{-- Page Content --}}
@section('content')
    @include('sections.partials.header')
    @include('sections.partials.hero')
    @include('sections.partials.services')
    @include('sections.partials.footer')


    <script>
        const gallery = new Viewer(document.getElementById('docs'));
    </script>
@endsection
