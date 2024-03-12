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

<!-- contact section -->
<div class="w-[342px] md:w-[742px] 2xl:w-[1100px] h-[1400px] md:h-[950px] 2xl:h-[700px] left-10 md:left-[300px] 2xl:left-[350px] relative my-12">

    <div class="w-[342px] md:w-[742px] 2xl:w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex mb-12">
        <div class="flex-col justify-start items-start gap-[47px] flex">
            <div class="flex-col justify-start items-start gap-2 flex">
                <h1 class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Contactanos</h1>
                <p class="text-left text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[60px]">¿Necesita ayuda? <br> Ponte en contacto</p>
            </div>

            @if (count($errors) > 0)
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
            <!-- <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div> -->
            <?php
            header('Location:/gracias');
            exit;
            ?>
            @endif

            <form method="post" action="{{url('sendemail/send')}}" class="w-[342px] 2xl:w-[742px] shrink-0 2xl:flex 2xl:flex-row 2xl:flex-wrap  gap-[30px] text-style grid grid-cols-1 2xl:grid-cols-2">
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