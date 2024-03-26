@extends('layout')

@section('title')
<title>Descubre y Disfruta Explora Sin Límites - Cancun Travel Experience</title>
<meta name="description" content="Experience seamless and stress-free travel in Cancun with our premier transportation service. From airport transfers to hotel pickups, we offer reliable and comfortable rides to your destination. Discover the beauty of Cancun without worries, as our professional drivers ensure a safe and efficient journey. Book your Cancun transfer now and enjoy a hassle-free travel experience!">
<meta name="keywords" content="Cancun airport transfer, Cancun shuttle service, Cancun transportation, Cancun hotel transfers, Cancun transport service, atv tours, zipline and atv tour, zipline and atv cancun, activities atv single zipline and cenote, cenote and zipline tour with atvs, Mejores tours en Cancún, Tours todo incluido en Cancún, Tours con transporte incluido, Tours con guía turístico, Tours con entradas a atracciones, Tours con actividades acuáticas, Tours con experiencias gastronómicas">
<meta name="robots" content="index, follow">
<style>
  #header-home {
    display: none !important;
  }
</style>
@endsection

@section('content')

<div class="container w-auto 2xl:w-[1280px] mx-auto py-12">
    <h1 class="uppercase text-center"><span class="text-zinc-900 text-[30px] 2xl:text-[45px] font-semibold">Descubre Aventuras Únicas con Nuestros </span><span class="text-blue-900 text-[30px] 2xl:text-[45px] font-semibold">Tours y Experiencias Inolvidables</span></h1>

    <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
    <div x-data="{ openTab: 1 }" class="p-8">
            <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
                <div class="mb-4 flex flex-col md:flex-row space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-orange-600 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Top Experiencias</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-orange-600 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Turismo y Cultura</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-orange-600 text-white': openTab === 3 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Experiencias de Aventura</button>
                    <button x-on:click="openTab = 4" :class="{ 'bg-orange-600 text-white': openTab === 4 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Barcos y experiencias acuáticas</button>
                    <button x-on:click="openTab = 5" :class="{ 'bg-orange-600 text-white': openTab === 5 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Traslados</button>
                </div>

                <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/56250"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39266"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 3" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39275"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 4" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39264"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 5" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/51127"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection