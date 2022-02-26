@extends('layouts.master')

@section('content')
    @include('includes.header')
    <div class="catalog">
        <div class="image-banner">
            {{-- <h1 class="text">Đây là đoạn văn bản</h1> --}}
            <img src="{{ asset('images/background/Paint-splash-black-background-1400x556.jpg') }}" alt="">
        </div>
        <h1>aboutus</h1>
    </div>


    @include('includes.footer')
@endsection
