@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<div class="container 2xl:w-[1280px] mx-auto py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-2 gap-4">
        <div class="justify-center text-6xl rounded-xl p-6">
            <p class="text-orange-600 text-base uppercase leading-snug">Acerca de nosotros</p>
            <p class="text-zinc-900 text-[35px] 2xl:text-[65px] font-normal pb-12">Cancun Travel Experience</p>
            <p class="text-zinc-800 text-lg font-normal leading-[27px]">
                Somos una empresa turística con más de 30 años de experiencia, dedicada a brindar las mejores experiencias a nuestros valiosos clientes.
                <br><br>
                Cancun Travel Experience es una de las marcas de The Travel Experience Group que abarca una amplia variedad de empresas turísticas, desde servicios de Destination Management hasta tour operadores locales.
                <br><br>
                Fundada originalmente en 1987 como Servicios Turisticos del Sur (Operadora Turistica Huatulcos DMC S.A. de C.V), nuestra agencia de viajes receptiva fue pionera en Huatulco, México.

            </p>
            <div class="mt-12 px-[35px] py-5 bg-orange-600 rounded-[3px] justify-center items-center gap-2.5 inline-flex">
                <a class="text-white text-lg font-bold">Reserva ahora</a>
            </div>
        </div>
        <div class="flex justify-center rounded-xl p-0 2xl:p-6">
            <img class="h-auto max-w-full 2xl:h-[574px]" src="{{ asset('/img/cancun-travel-experience-somos.webp') }}" />
        </div>
    </div>
</div>

<div class="w-full bg-slate-50">
    <div class="container 2xl:w-[1280px] mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-2 gap-4 py-12">
            <div class="flex justify-center rounded-xl p-0 2xl:p-6">
                <img class="h-auto max-w-full 2xl:h-[574px]" src="{{ asset('/img/cancun-travel-experience-somos-2.webp') }}" />
            </div>
            <div class="justify-center text-6xl rounded-xl p-6">
                <p class="text-orange-600 text-base uppercase leading-snug">Acerca de nosotros</p>
                <p class="text-zinc-900 text-[35px] 2xl:text-[65px] font-normal pb-12">Cancun Travel Experience</p>
                <p class="text-zinc-800 text-lg font-normal leading-[27px]">
                    Siempre motivados e impulsados por un estricto sentido de responsabilidad hacia nuestros valiosos clientes y grandes socios, estamos orgullosos de nuestro trabajo, nuestros valores y nuestra gente.
                    <br><br>
                    Cancun Travel Experience ofrece un portafolio cuidadosamente seleccionado con los mejores tours, actividades y servicios de transportación dirigidos por profesionales, conectando a las personas con los lugares correctos.
                </p>
                <div class="mt-12 px-[35px] py-5 bg-orange-600 rounded-[3px] justify-center items-center gap-2.5 inline-flex">
                    <a class="text-white text-lg font-bold">Reserva ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection