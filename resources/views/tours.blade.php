@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<div class="container w-auto 2xl:w-[1280px] mx-auto py-12">
    <h1 class="uppercase text-center"><span class="text-zinc-900 text-[30px] 2xl:text-[45px] font-semibold">Descubre Aventuras Únicas con Nuestros </span><span class="text-blue-900 text-[30px] 2xl:text-[45px] font-semibold">Tours y Experiencias Inolvidables</span></h1>

    <!-- Tabs -->
    <!-- <div data-controller="tabs" data-tabs-index-value="0" class="mx-6 mt-6">
        <ul class="flex flex-wrap justify-center dark:border-gray-700">
            <li class="mr-2 bg-slate-100 rounded-sm" data-action="click->tabs#change" data-tabs-target="tab">
                <a href="#" class="inline-block text-slate-700 hover:text-slate-700 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-sm font-medium text-center">Sightseeing & Culture</a>
            </li>
            <li class="mr-2 bg-slate-100 rounded-sm inactive" data-action="click->tabs#change" data-tabs-target="tab">
                <a href="#" class="inline-block text-slate-700  hover:text-slate-700 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-sm font-medium text-center">Adventure Experiences</a>
            </li>
            <li class="mr-2 bg-slate-100 rounded-sm inactive" data-action="click->tabs#change" data-tabs-target="tab">
                <a href="#" class="inline-block text-slate-700  hover:text-slate-700 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-sm font-medium text-center">Boats & Water Experiences</a>
            </li>
            <li class="mr-2 bg-slate-100 rounded-sm inactive" data-action="click->tabs#change" data-tabs-target="tab">
                <a href="#" class="inline-block text-slate-700 hover:text-slate-700 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-sm font-medium text-center ">Transfers</a>
            </li>
        </ul>
        <div class="hidden px-1 py-10" data-tabs-target="panel">
            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39266"></div>
            <noscript>Please enable javascript in your browser to book</noscript>
        </div>
        <div class="hidden px-1 py-10" data-tabs-target="panel">
            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39275"></div>
            <noscript>Please enable javascript in your browser to book</noscript>
        </div>
        <div class="hidden px-1 py-10" data-tabs-target="panel">
            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39264"></div>
            <noscript>Please enable javascript in your browser to book</noscript>
        </div>
        <div class="hidden px-1 py-10" data-tabs-target="panel">
            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

            <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/51127"></div>
            <noscript>Please enable javascript in your browser to book</noscript>
        </div>
    </div> -->
    <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
        <div x-data="{ openTab: 1 }" class="p-8">
            <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
                <div class="mb-4 flex flex-col md:flex-row space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-orange-600 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Turismo y Cultura</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-orange-600 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Experiencias de Aventura</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-orange-600 text-white': openTab === 3 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Barcos y experiencias acuáticas</button>
                    <button x-on:click="openTab = 4" :class="{ 'bg-orange-600 text-white': openTab === 4 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Transfers</button>
                </div>

                <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39266"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39275"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 3" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39264"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 4" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/51127"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection