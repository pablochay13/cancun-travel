@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<div class="py-12 my-12">
    <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/experience/439888"></div>
    <noscript>Please enable javascript in your browser to book</noscript>
</div>

@endsection