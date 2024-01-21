@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')


<div class="pt-12 w-full text-center px-16">
    <h1 class="text-orange-600 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Combos</h1>
    <p class="text-blue-900 text-[20px] 2xl:text-[20px] font-bold font-['Trip Sans'] leading-[10px] 2xl:leading-[30px] pt-6 px-16">
        Obtén las mejores ofertas de la ciudad con nuestros combos de valor, desbloqueando grandes descuentos y aventuras y experiencias aún mayores.
    </p>
</div>

<div class="py-12 my-12">
     
    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/product-list/39262"></div>
    <noscript>Please enable javascript in your browser to book</noscript>

</div>

@endsection