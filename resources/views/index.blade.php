@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<!-- firts section -->
<div class="w-full h-[1100px] 2xl:w-full md:h-[600px] 2xl:h-[750px] relative mt-12">
    <div class="w-full h-[768px] 2xl:w-[1280px] 2xl:h-[650px] flex items-center justify-center md:justify-start 2xl:justify-center mt-12 absolute">
        <div class="w-[390px] h-[768px] md:left-[250px] md:w-[512px] md:top-[50px] 2xl:w-[712px] 2xl:h-[370px] 2xl:top-[100px] absolute flex-col justify-start items-start gap-4 pl-5 2xl:pl-0 inline-flex">
            <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Experiencias</p>
            <p class="flex-col justify-start items-start gap-[30px] flex">
                <span class="2xl:w-[712px]"><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Deseamos </span><span class="text-orange-600 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">que vivas</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">, el </span><span class="text-blue-900 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">mejor</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]"> momento</span></span>
            </p>
            <p class="w-[390px] 2xl:w-[710px] text-zinc-800 text-lg font-normal font-['PP Mori'] leading-[27px]">
                Existe una gran cantidad de tours, actividades y cosas que hacer cuando visita Cancún, Riviera Maya o Playa del Carmen. Disfrute con nosotros de los mejores tours y actividades de la región, sitios considerados patrimonio de la humanidad, monumentos famosos o reservas naturales de una manera segura, conveniente y cómoda.
            </p>
            <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
                <a href="tours" class="text-white text-base font-semibold font-['PP Mori']">Reserva ahora</a>
            </div>
        </div>

        <div class="w-[400px] 2xl:w-[532px] h-[597px] md:left-[750px] 2xl:left-[1148px] top-[448px] md:top-[0px] 2xl:top-0 absolute">
            <!-- <div class="h-auto 2xl:w-[532px] 2xl:h-[597px] left-0 top-0 absolute bg-zinc-300"></div> -->
            <img class="h-auto max-w-full 2xl:w-[532px] 2xl:h-[597px] left-0 top-0 absolute rounded-lg" src="{{ asset('/img/cancun-travel-experience-transportation.webp') }}" />
        </div>
    </div>
</div>

<!-- card section -->
<div class="w-full h-auto 2xl:h-auto flex-col justify-start items-center gap-10 inline-flex my-12">
    <div class="flex-col justify-start items-start gap-10 flex">
        <div class="flex-col justify-start items-start gap-[25px] flex">
            <div class="flex-col justify-start items-start gap-[17px] px-10 2xl:px-0 flex">
                <div class="text-orange-600 text-md 2xl:text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Nuestras experiencias</div>
                <div><span class="text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Top </span><span class="text-blue-900 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Experiences</span></div>
            </div>
            <!-- <div class="justify-center items-center gap-[18px] inline-flex">
                <div class="px-[26px] py-5 bg-orange-600 rounded-lg justify-center items-center gap-2.5 flex">
                    <div class="text-white text-base font-semibold font-['PP Mori']">Sightseeing & Culture</div>
                </div>
                <div class="px-[23px] py-5 bg-slate-100 rounded-lg justify-center items-center gap-2.5 flex">
                    <div class="text-slate-700 text-base font-normal font-['PP Mori']">Adventure Experiences</div>
                </div>
                <div class="px-[23px] py-5 bg-slate-100 rounded-lg justify-center items-center gap-2.5 flex">
                    <div class="text-slate-700 text-base font-normal font-['PP Mori']">Boats & Water Experiences</div>
                </div>
                <div class="px-[23px] py-5 bg-slate-100 rounded-lg justify-center items-center gap-2.5 flex">
                    <div class="text-slate-700 text-base font-normal font-['PP Mori']">Transfers</div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Tabs -->
    <!-- <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
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
    </div> -->

    <div class="w-full h-auto 2xl:h-auto flex-col justify-start items-center gap-10 inline-flex my-12">
        <div x-data="{ openTab: 1 }" class="p-8">
            <div class="container w-auto md:w-full 2xl:w-[1280px] mx-auto pb-12">
                <div class="mb-4 flex flex-col md:flex-row space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-orange-600 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Turismo y Cultura</button>

                    <button x-on:click="openTab = 2" :class="{ 'bg-orange-600 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Experiences de aventura</button>

                    <button x-on:click="openTab = 3" :class="{ 'bg-orange-600 text-white': openTab === 3 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Barcos y experiencias acuáticas</button>

                    <button x-on:click="openTab = 4" :class="{ 'bg-orange-600 text-white': openTab === 4 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Transfers</button>
                </div>

                <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39266"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39275"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 3" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/39264"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>

                <div x-show="openTab === 4" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 ">
                    <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=a628bf2f-6ea9-4941-a1ef-f33ae595362d" async></script>

                    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/a628bf2f-6ea9-4941-a1ef-f33ae595362d/product-list/51127"></div>
                    <noscript>Please enable javascript in your browser to book</noscript>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full 2xl:w-[955px] h-1.5 relative">
        <div class="w-[108px] 2xl:w-[955px] h-px left-0 top-[2px] absolute opacity-40 bg-slate-950"></div>
        <div class="w-[58px] 2xl:w-[508px] h-1.5 left-0 top-0 absolute bg-blue-900"></div>
    </div>
</div>

<!-- dropbox section -->
<div class="w-full md:w-full 2xl:w-full h-[1000px] md:h-[1050px] 2xl:h-[1000px] relative my-12">
    <div class="w-[375px] md:w-full 2xl:w-full h-[30px] absolute md:flex justify-center items-start gap-[115px] 2xl:inline-flex">

        <div class="w-[375px] 2xl:w-2/6 px-5 2xl:px-0 flex-col justify-start items-start gap-10 inline-flex">
            <div class="flex-col justify-start items-start gap-[17px] flex">
                <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Nuestras experiencias</div>
                <div class="w-[375px] 2xl:w-full"><span class="text-slate-950 text-[35px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[25px] 2xl:leading-[60px]">Transfers y Tours que Simplifican tu </span><span class="text-blue-900 text-[35px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[25px] 2xl:leading-[60px]">Viaje</span></div>
            </div>
            <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
                <a href="tours" class="text-white text-base font-semibold font-['PP Mori']">Reserva ahora</a>
            </div>
        </div>

        <div class="w-[375px] 2xl:w-[639.67px] flex-col px-5 2xl:px-0 pt-12 md:pt-0 2xl:pt-0 justify-start items-start gap-[21px] inline-flex">
            <div class="w-[375px] 2xl:w-[639.67px] flex-col justify-start items-start gap-[15px] flex">
                <div class="w-[375px] 2xl:w-[634px] h-[54px] relative">
                    <div class="w-[375px] 2xl:w-[403px] h-[54px] left-0 top-0 absolute flex-col justify-start items-start gap-[15px] inline-flex">
                        <div class="flex-col justify-start items-start gap-[7px] flex">
                            <p class="text-slate-950 text-[25px] font-bold font-['Trip Sans']">Traslados</p>
                            <p class="text-orange-600 text-xs font-semibold font-['PP Mori'] uppercase tracking-widest">Podemos ocuparnos de tu transporte</p>
                        </div>
                    </div>
                    <div class="w-[43px] h-[43px] left-[120px] 2xl:left-[591px] top-[4.35px] absolute">
                        <div class="w-[33px] h-[33px] 2xl:w-[43px] 2xl:h-[43px] left-0 top-0 absolute flex justify-center items-center bg-orange-600 rounded-[22.65px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                            </svg>
                        </div>

                    </div>
                </div>
                <p class="w-[375px] 2xl:w-[639.67px] text-zinc-600 text-sm font-normal font-['PP Mori'] leading-[23px]">Para hacer su viaje más fácil, podemos proveer cualquier servicio de transportación que requiera. Brindándole una experiencia vacacional libre de estrés y permitiéndole tener más tiempo para disfrutar de su visita, nuestra promesa es bastante simple, lo llevaremos de una manera rápida y eficiente desde el aeropuerto hasta su hotel y de regreso si así lo requiere.</span>
                </p>
            </div>

            <div class="w-[375px] 2xl:w-[639.67px] h-[0px] opacity-20 border border-black"></div>

            <div class="w-[375px] 2xl:w-[639.67px] flex-col justify-start items-start gap-[15px] flex">
                <div class="w-[375px] 2xl:w-[634px] h-[54px] relative">
                    <div class="w-[403px] h-[54px] left-0 top-0 absolute flex-col justify-start items-start gap-[15px] inline-flex">
                        <div class="w-[375px] 2xl:w-[639.67px] flex-col justify-start items-start gap-[7px] flex">
                            <p class="text-slate-950 text-[25px] font-bold font-['Trip Sans']">Experiencias</p>
                            <p class="text-orange-600 text-xs font-semibold font-['PP Mori'] uppercase tracking-widest">Deseamos que vivas el mejor momento</p>
                        </div>
                    </div>
                    <div class="w-[43px] h-[43px] left-[150px] 2xl:left-[591px] top-[4.35px] absolute">
                        <div class="w-[33px] h-[33px] 2xl:w-[43px] 2xl:h-[43px] left-0 top-0 absolute flex justify-center items-center bg-blue-900 rounded-[22.65px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="w-[375px] 2xl:w-[639.67px] text-zinc-600 text-sm font-normal font-['PP Mori'] leading-[23px]">Desentrañe la historia y el misterio de las civilizaciones antiguas, navegue en un barco a través de las asombrosas aguas del caribe mexicano de camino a Isla Mujeres o mantenga su adrenalina alta en un vehículo todo terreno o tirolesas a través de la jungla maya.</span>
                </p>
            </div>
        </div>
    </div>

    <img class="h-auto w-full 2xl:w-full 2xl:h-[613.42px] left-0 top-[800px] md:top-[600px] 2xl:top-[430px] pt-12 absolute" src="{{ asset('/img/atv-tour.webp') }}" />
</div>

<!-- reviews section -->
<div class="w-full h-[750px] md:h-[750px] 2xl:h-[750px] relative my-12 py-12" id="reviews">
    <div class="w-full h-[152px] 2xl:h-[152px] mx flex-col justify-center items-center gap-[17px] inline-flex py-12">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest pt-12 mt-12">TESTIMONIOS</p>
        <p class="w-full 2xl:w-[775px] text-center text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Historias inspiradoras de nuestros clientes</p>
    </div>

    <div class="w-[325px] md:w-full 2xl:w-full h-[350px] left-[55px] md:left-0 2xl:left-0 top-[300px] absolute justify-center items-center 2xl:items-end gap-7 md:inline-flex 2xl:inline-flex grid grid-cols-1">
        <!-- <div class='sk-ww-tripadvisor-reviews' data-embed-id='25353154'></div> -->
        <div class="elfsight-app-6a57d6fa-1dcd-4cff-ba53-2dc6a530ac7f" data-elfsight-app-lazy></div>
    </div>
</div>

<!-- gallery section -->
<div class="w-full h-[800px] relative my-12 pt-12 hidden md:block 2xl:block">
    <div class="w-full h-[146px] px-5 2xl:px-0 top-0 absolute flex-col justify-center items-center gap-[11px] inline-flex">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Experiencias</p>
        <p class="w-full 2xl:w-[771.69px] text-center text-slate-950 text-[26px] 2xl:text-[42px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Un pequeño vistazo a nuestro tour, una gran experiencia para siempre</p>
    </div>
    <div class="w-full h-[314px] 2xl:h-[514px] top-[176px] absolute flex justify-center items-center">
        <div class="w-full h-[252px] left-[-50px] top-0 absolute justify-center items-center gap-2.5 flex 2xl:inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-1.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-2.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-3.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-4.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-5.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-6.webp') }}" />
        </div>

        <div class="w-full h-[252px] left-[0px] top-[262px] absolute justify-center items-center gap-2.5 inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-7.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-8.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-9.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-10.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-11.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-12.webp') }}" />
        </div>
    </div>
</div>

<div class="w-full h-[550px] relative my-12 pt-12 block md:hidden 2xl:hidden">
    <div class="w-full h-[146px] mb-12 pb-12 px-5 2xl:px-0 F absolute flex-col justify-center items-center gap-[11px] inline-flex">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">our Gallery</p>
        <p class="w-full 2xl:w-[771.69px] text-center text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">A little look at our tour, a great experience forever</p>
    </div>
    <div class="carousel mt-12 top-[146px]">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-1.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-2.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-3.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-4.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-5.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-6" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-6.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-7" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-7.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-8" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-8.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-9" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-9.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-10" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-10.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-11" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-11.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-12" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-12.webp') }}" />
            </div>

            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>
</div>

<!-- contact section -->
<div class="w-[342px] md:w-[742px] 2xl:w-[1100px] h-[1400px] md:h-[950px] 2xl:h-[700px] left-10 md:left-[300px] 2xl:left-[350px] relative my-12">

    <div class="w-[342px] md:w-[742px] 2xl:w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex mb-12">
        <div class="flex-col justify-start items-start gap-[47px] flex">
            <div class="flex-col justify-start items-start gap-2 flex">
                <h1 class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Contactanos</h1>
                <p class="text-left text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[60px]">¿Necesita ayuda? <br> Ponte en contacto</p>
            </div>

            <!-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif -->

            <form method="post" action="{{url('sendemail/send')}}" class="w-[342px] 2xl:w-[742px] shrink-0 2xl:flex 2xl:flex-row 2xl:flex-wrap items-center justify-center gap-[30px] text-style grid grid-cols-1 2xl:grid-cols-2">
                {{ csrf_field() }}
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Nombre</label>

                    <input name="name" type="text" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Email</label>

                    <input name="email" type="email" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Teléfono</label>

                    <input name="tel" type="tel" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Fecha</label>

                    <input name="date" type="date" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>

                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Mensaje</label>

                    <textarea name="message" class="w-[355px] 2xl:w-[742px] h-[165px] relative left-0 top-0 absolute bg-slate-100 rounded-lg border text-slate-500 text-base font-normal font-['PP Mori']"></textarea>
                </div>

                <button class="text-white text-base font-semibold font-['PP Mori'] px-[35px] py-5 bg-orange-600 rounded-[5px] justify-start items-start gap-2.5 inline-flex" type="submit" name="send" value="Send">Enviar</button>
            </form>
        </div>

    </div>

    <div class="2xl:w-[449px] h-[393.96px] left-[0px] top-[1000px] md:left-[450px] md:top-[152px] 2xl:left-[802px] 2xl:top-[152px] absolute flex-col justify-start items-start gap-[19px] inline-flex">
        <div class="text-slate-950 text-[26px] font-medium font-['Trip Sans']">Póngase en contacto con nosotros</div>
        <div class="flex-col justify-start items-start gap-4 flex">
            <div class="pl-[18px] pr-[38px] py-5 bg-orange-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-[52.96px] relative">
                    <div class="w-[58px] h-[52.96px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[31.10px] h-[31.10px] left-[13.45px] top-[10.93px] absolute">
                        <img src="{{ asset('/img/icons/call.png') }}" alt="">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">1 469 482 0930</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">Teléfono</div>
                </div>
            </div>
            <div class="pl-[18px] pr-[38px] py-5 bg-green-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-14 relative">
                    <div class="w-[58px] h-14 left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[30px] h-[30px] left-[14px] top-[13.04px] absolute">
                        <div class="w-[30px] h-[30px] left-0 top-0 absolute">
                            <img src="{{ asset('/img/icons/mail.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">info@cancuntravelexperience.com</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">E-mail</div>
                </div>
            </div>
            <div class="pl-[18px] pr-[8px] 2xl:pr-[38px] py-5 bg-sky-50 rounded-[7px] justify-start items-start gap-3.5 inline-flex">
                <div class="w-[58px] h-[58px] relative">
                    <div class="w-[58px] h-[58px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-6 h-6 left-[17px] top-[17.09px] absolute">
                        <div class="w-6 h-6 left-0 top-0 absolute">
                            <img src="{{ asset('/img/icons/location.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="w-auto 2xl:w-80 text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">Cancún, Q.R., México</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">Ubicación</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection