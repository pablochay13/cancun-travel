@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<div class="container w-auto 2xl:w-[1280px] mx-auto py-12">
    <h1 class="uppercase text-center"><span class="text-zinc-900 text-[30px] 2xl:text-[45px] font-semibold">Your Guides to Untamed </span><span class="text-blue-900 text-[30px] 2xl:text-[45px] font-semibold">Experiences</span></h1>

    <!-- Tabs -->
    <div data-controller="tabs" data-tabs-index-value="0" class="mx-6 mt-6">
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
    </div>
</div>

@endsection