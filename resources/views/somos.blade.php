@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<div class="container 2xl:w-[1280px] mx-auto py-12">
    <div class="grid grid-cols-1 2xl:grid-cols-2 gap-4">
        <div class="justify-center text-6xl rounded-xl p-6">
            <p class="text-orange-600 text-base uppercase leading-snug">About Us</p>
            <p class="text-zinc-900 text-[35px] 2xl:text-[65px] font-normal pb-12">Cancun Travel Experience</p>
            <p class="text-zinc-800 text-lg font-normal leading-[27px]">We are an experienced tourism company with more than 30 years, dedicated to provide the best experiences to our valued customers.<br /><br /> Cancun Travel Experience is one of the brands of The Travel Experience Group which encompasses wide variety of tourism companies, from Destination Management services to local tour operators.</p>
            <div class="mt-12 px-[35px] py-5 bg-orange-600 rounded-[3px] justify-center items-center gap-2.5 inline-flex">
                <a class="text-white text-lg font-bold">Get Started</a>
            </div>
        </div>
        <div class="flex justify-center rounded-xl p-0 2xl:p-6">
            <img class="h-auto max-w-full 2xl:h-[574px]" src="{{ asset('/img/cancun-travel-experience-somos.webp') }}" />
        </div>
    </div>
</div>

<div class="w-full bg-slate-50">
    <div class="container 2xl:w-[1280px] mx-auto py-12">
        <div class="grid grid-cols-1 2xl:grid-cols-2 gap-4 py-12">
            <div class="flex justify-center rounded-xl p-0 2xl:p-6">
                <img class="h-auto max-w-full 2xl:h-[574px]" src="{{ asset('/img/cancun-travel-experience-somos.webp') }}" />
            </div>
            <div class="justify-center text-6xl rounded-xl p-6">
                <p class="text-orange-600 text-base uppercase leading-snug">About Us</p>
                <p class="text-zinc-900 text-[35px] 2xl:text-[65px] font-normal pb-12">Cancun Travel Experience</p>
                <p class="text-zinc-800 text-lg font-normal leading-[27px]">We are an experienced tourism company with more than 30 years, dedicated to provide the best experiences to our valued customers.<br /><br /> Cancun Travel Experience is one of the brands of The Travel Experience Group which encompasses wide variety of tourism companies, from Destination Management services to local tour operators.</p>
                <div class="mt-12 px-[35px] py-5 bg-orange-600 rounded-[3px] justify-center items-center gap-2.5 inline-flex">
                    <a class="text-white text-lg font-bold">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection