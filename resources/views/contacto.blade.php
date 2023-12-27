@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<!-- contact section -->
<div class="w-[342px] md:w-[742px] 2xl:w-[1100px] h-[1400px] md:h-[950px] 2xl:h-[700px] left-10 md:left-[300px] 2xl:left-[350px] relative my-12">

    <div class="w-[342px] md:w-[742px] 2xl:w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex mb-12">
        <div class="flex-col justify-start items-start gap-[47px] flex">
            <div class="flex-col justify-start items-start gap-2 flex">
                <h1 class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Contact Us</h1>
                <p class="text-center text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Need help? Get in touch</p>
            </div>

            <div class="w-[342px] 2xl:w-[742px] shrink-0 2xl:flex 2xl:flex-row 2xl:flex-wrap items-center justify-center gap-[30px] text-style grid grid-cols-1 2xl:grid-cols-2">
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Your name</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <input type="text" class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']" value="Enter your full name">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Your email</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <input type="email" class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']" value="Enter your email address">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">phone number</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <input type="tel" class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']" value="Enter your Phone Number">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Number of Passengers</div>
                    <div class="w-[356px] h-[60px] relative">
                        <div class="w-[356px] h-[60px] left-0 top-0 absolute bg-slate-100 rounded-lg border"></div>
                        <div class="w-[42px] h-10 left-[10px] top-[10px] absolute">
                            <div class="w-[42px] h-10 left-0 top-0 absolute bg-white rounded-lg border"></div>
                            <div class="w-6 h-6 left-[9px] top-[8px] absolute">
                                <div class="w-6 h-6 left-0 top-0 absolute">
                                </div>
                            </div>
                        </div>
                        <div class="w-[42px] h-10 left-[304px] top-[10px] absolute">
                            <div class="w-[42px] h-10 left-0 top-0 absolute bg-white rounded-lg border"></div>
                            <div class="w-6 h-6 left-[9px] top-[8px] absolute">
                                <div class="w-6 h-6 left-0 top-0 absolute">
                                </div>
                            </div>
                        </div>
                        <div class="left-[169px] top-[21.50px] absolute text-center text-slate-500 text-base font-normal font-['PP Mori']">2</div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Message</div>
                    <div class="w-auto 2xl:w-[742px] h-[165px] relative">
                        <div class="w-[355px] 2xl:w-[742px] h-[165px] left-0 top-0 absolute bg-slate-100 rounded-lg border"></div>
                        <textarea class="left-[22px] top-[21.50px] absolute opacity-40 text-slate-500 text-base font-normal font-['PP Mori']"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-start items-start gap-2.5 inline-flex">
            <button class="text-white text-base font-semibold font-['PP Mori']">Submit</button>
        </div>
    </div>

    <div class="2xl:w-[449px] h-[393.96px] left-[0px] top-[1000px] md:left-[450px] md:top-[152px] 2xl:left-[802px] 2xl:top-[152px] absolute flex-col justify-start items-start gap-[19px] inline-flex">
        <div class="text-slate-950 text-[26px] font-medium font-['Trip Sans']">Contact Us Through</div>
        <div class="flex-col justify-start items-start gap-4 flex">
            <div class="pl-[18px] pr-[38px] py-5 bg-orange-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-[52.96px] relative">
                    <div class="w-[58px] h-[52.96px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[31.10px] h-[31.10px] left-[13.45px] top-[10.93px] absolute">
                        <img src="{{ asset('/img/icons/call.png') }}" alt="">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">+1 (483) 299 1400</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">Phone</div>
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
                    <div class="w-auto 2xl:w-80 text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">Calle Tepich Lt 7 Mza 95, 77533 Cancún, Q.R.</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">Location</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection