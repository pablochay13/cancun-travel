@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<!-- firts section -->
<div class="w-full h-[706px] relative mt-12">
    <div class="w-[1280px] h-[597px] flex items-center justify-center mt-12 absolute">
        <div class="w-[712px] h-[370px] absolute flex-col justify-start items-start gap-4 inline-flex">
            <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Our Story</div>
            <div class="flex-col justify-start items-start gap-[30px] flex">
                <div class="w-[712px]"><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Where Passion Meets </span><span class="text-orange-600 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Purpose</span><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">, and </span><span class="text-blue-900 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Adventures</span><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]"> Unfold</span></div>
                <div class="w-[710px] text-zinc-800 text-lg font-normal font-['PP Mori'] leading-[27px]">There are plenty of activities and things to do when you visit Cancun, Riviera Maya or Playa del Carmen, get yourself ready to enjoy the best tours and activities in the region. Visit World Heritage Sites, famous landmarks or natural reserves in a safe, convenient and comfortable way.</div>
                <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
                    <div class="text-white text-base font-semibold font-['PP Mori']">Get Started</div>
                </div>
            </div>
        </div>
        <div class="w-[532px] h-[597px] left-[1148px] top-0 absolute">
            <div class="w-[532px] h-[597px] left-0 top-0 absolute bg-zinc-300"></div>
            <img class="w-[532px] h-[597px] left-0 top-0 absolute rounded-lg" src="{{ asset('/img/cancun-travel-experience-transportation.webp') }}" />
        </div>
    </div>
    <div class="w-[189px] h-[219px] left-0 top-[487px] absolute">
        <div class="origin-top-left rotate-180 w-[400.46px] h-[266.61px] left-[189.46px] top-[266.61px] absolute">
            <div class="w-9 h-9 left-[-351px] top-[-105.69px] absolute origin-top-left rotate-[148.72deg]">
                <div class="w-9 h-9 left-0 top-0 absolute">
                </div>
            </div>
            <div class="origin-top-left rotate-[155.54deg] w-[328.92px] h-[143.28px] left-0 top-[-136.19px] absolute">
            </div>
            <div class="w-9 h-9 left-[-51.96px] top-[-221.53px] absolute origin-top-left rotate-[-72.99deg]">
                <div class="w-9 h-9 left-0 top-0 absolute">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- second section -->
<div class="w-full h-[840px] flex-col justify-start items-center gap-10 inline-flex mt-12">
    <div class="flex-col justify-start items-start gap-10 flex">
        <div class="flex-col justify-start items-start gap-[25px] flex">
            <div class="flex-col justify-start items-start gap-[17px] flex">
                <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Our Experiences</div>
                <div><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Your Guides to Untamed </span><span class="text-blue-900 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Experiences</span></div>
            </div>
            <div class="justify-center items-center gap-[18px] inline-flex">
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
            </div>
        </div>
        <div class="justify-start items-start gap-[25px] inline-flex">
            <div class="owl-carousel">
                <div class="w-[416px] h-[586px] relative">
                    <div class="w-[416px] h-[586px] bg-white rounded-[9px] border border-slate-200"></div>
                    <div class="flex-col justify-start items-start gap-[17px] inline-flex">
                        <img class="w-[383px] h-[266px] rounded-[5px]" src="https://via.placeholder.com/383x266" />
                        <div class="flex-col justify-start items-start gap-3 flex">
                            <div class="flex-col justify-start items-start gap-3 flex">
                                <div class="flex-col justify-start items-start gap-[5px] flex">
                                    <div class="w-[379px] text-slate-950 text-[25px] font-bold leading-[30px]">Tulum Day-Trip Mayan Ruins With
                                        <br />Cenote Swim
                                    </div>
                                    <div class="text-slate-950 text-base font-normal">By Cancun Travel Experience</div>
                                </div>
                                <div class="justify-start items-center gap-2 inline-flex">
                                    <div class="w-6 h-4 relative"></div>
                                    <div class="justify-start items-start gap-[2.63px] flex">
                                        <div class="w-[12.29px] h-[12.29px] bg-green-500 rounded-lg"></div>
                                        <div class="w-[12.29px] h-[12.29px] bg-green-500 rounded-lg"></div>
                                        <div class="w-[12.29px] h-[12.29px] bg-green-500 rounded-lg"></div>
                                        <div class="w-[12.29px] h-[12.29px] bg-green-500 rounded-lg"></div>
                                        <div class="w-[12.29px] h-[12.29px] bg-green-500 rounded-lg"></div>
                                    </div>
                                    <div class="text-slate-950 text-base font-normal">523 reviews</div>
                                </div>
                            </div>
                            <div class="w-[383px] text-zinc-500 text-sm font-normal">Explore the Mayan temples of Tulum and learn with a
                                professional guide, appreciate the ancient architecture
                                and take a refreshing swim in crystal-clear water in a
                                Dos Ojos cenote</div>
                        </div>
                    </div>
                    <div class="relative">
                        <div><span style="text-slate-950 text-sm font-normal leading-[18.56px]">From<br /></span><span style="text-slate-950 text-lg font-medium leading-normal">US$29.00</span></div>
                        <div class="w-11 h-5 justify-start items-center gap-[5px] inline-flex">
                            <div class="w-5 h-5 justify-center items-center flex">
                                <div class="w-5 h-5 relative">
                                </div>
                            </div>
                            <div class="text-slate-950 text-sm font-normal leading-[18.56px]">8 h</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="w-[955px] h-1.5 relative">
        <div class="w-[955px] h-px left-0 top-[2px] absolute opacity-40 bg-slate-950"></div>
        <div class="w-[508px] h-1.5 left-0 top-0 absolute bg-blue-900"></div>
    </div>
</div>

<!-- third section -->
<div class="w-full h-[280px] justify-center items-start gap-[115px] inline-flex pt-12 mt-12">
    <div class="flex-col justify-start items-start gap-10 inline-flex">
        <div class="flex-col justify-start items-start gap-[17px] flex">
            <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Our Experiences</div>
            <div class="w-[525.53px]"><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Your Guides to Untamed </span><span class="text-blue-900 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Experiences</span></div>
        </div>
        <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
            <div class="text-white text-base font-semibold font-['PP Mori']">Start Booking Now</div>
        </div>
    </div>
    <div class="flex-col justify-start items-start gap-[21px] inline-flex">
        <div class="flex-col justify-start items-start gap-[15px] flex">
            <div class="w-[634px] h-[54px] relative">
                <div class="w-[403px] h-[54px] left-0 top-0 absolute flex-col justify-start items-start gap-[15px] inline-flex">
                    <div class="flex-col justify-start items-start gap-[7px] flex">
                        <div class="text-slate-950 text-[25px] font-bold font-['Trip Sans']">Transfers</div>
                        <div class="text-orange-600 text-xs font-semibold font-['PP Mori'] uppercase tracking-widest">We can take care of your transportation needs</div>
                    </div>
                </div>
                <div class="w-[43px] h-[43px] left-[591px] top-[4.35px] absolute">
                    <div class="w-[43px] h-[43px] left-0 top-0 absolute bg-orange-600 rounded-[22.65px]"></div>
                    <div class="w-6 h-6 left-[21.50px] top-[39.62px] absolute origin-top-left rotate-[-135deg]"></div>
                </div>
            </div>
            <div class="w-[639.67px] text-zinc-600 text-sm font-normal font-['PP Mori'] leading-[23px]">To make your travels easier, we can take care of your transportation needs. Providing you with a stress-free vacation experience, our promise is simple, we will take you quickly and efficiently from the Airport to your hotel and back if needed. Our private transportation services are often more affordable than taxis or other transportation services upon arrival. With a variety of routes and a comprehensive service area.</div>
        </div>
        <div class="w-[639.67px] h-[0px] opacity-20 border border-black"></div>
        <div class="opacity-80 w-[634px] h-[54px] relative">
            <div class="w-[304px] h-[54px] left-0 top-0 absolute flex-col justify-start items-start gap-[15px] inline-flex">
                <div class="flex-col justify-start items-start gap-[7px] flex">
                    <div class="text-slate-950 text-[25px] font-bold font-['Trip Sans']">Experiences</div>
                    <div class="text-orange-600 text-xs font-semibold font-['PP Mori'] uppercase tracking-widest">We deliver outstanding experiences</div>
                </div>
            </div>
            <div class="w-[43px] h-[43px] left-[591px] top-[5.50px] absolute">
                <div class="w-[43px] h-[43px] left-0 top-0 absolute bg-blue-900 rounded-[22.65px]"></div>
                <div class="w-6 h-6 left-[9.50px] top-[34.65px] absolute origin-top-left -rotate-90"></div>
            </div>
        </div>
    </div>
</div>

<!-- four section -->
<div class="w-full h-[690px] relative pt-12 mt-12 flex justify-center">
    <div class="w-[771.69px] h-[146px] left-[388px] top-0 absolute flex-col justify-center items-center gap-[11px] inline-flex pt-12 mt-12">
        <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">our Gallery</div>
        <div class="w-[771.69px] text-center text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">A little look at our tour, a great experience forever</div>
    </div>
    <div class="w-full h-[514px] left-0 top-[276px] absolute flex  justify-center">
        <div class="w-full h-[252px] left-0 top-0 absolute justify-start items-start gap-2.5 inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
        </div>
        <div class="w-full h-[252px] left-[54px] top-[262px] absolute justify-start items-start gap-2.5 inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
            <img class="w-[252px] h-[252px] rounded-sm" src="https://via.placeholder.com/252x252" />
        </div>
    </div>
</div>

<!-- five section -->
<div class="w-[1251px] h-[638px] relative">
    <div class="w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex">
        <div class="flex-col justify-start items-start gap-[47px] flex">
            <div class="flex-col justify-start items-start gap-2 flex">
                <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Contact Us</div>
                <div class="text-center text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Need help? Get in touch</div>
            </div>
            <div class="w-[742px] justify-start items-start gap-[30px] inline-flex">
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Your name</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <div class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']">Enter your full name</div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Your email</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <div class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']">Enter your email address</div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">phone number</div>
                    <div class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex">
                        <div class="opacity-40 text-slate-500 text-base font-normal font-['PP Mori']">Enter your Phone Number</div>
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
                    <div class="w-[742px] h-[165px] relative">
                        <div class="w-[742px] h-[165px] left-0 top-0 absolute bg-slate-100 rounded-lg border"></div>
                        <div class="left-[22px] top-[21.50px] absolute opacity-40 text-slate-500 text-base font-normal font-['PP Mori']">Type here</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
            <div class="text-white text-base font-semibold font-['PP Mori']">Submit</div>
        </div>
    </div>
    <div class="w-[449px] h-[393.96px] left-[802px] top-[152px] absolute flex-col justify-start items-start gap-[19px] inline-flex">
        <div class="text-slate-950 text-[26px] font-medium font-['Trip Sans']">Contact Us Through</div>
        <div class="flex-col justify-start items-start gap-4 flex">
            <div class="pl-[18px] pr-[38px] py-5 bg-orange-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-[52.96px] relative">
                    <div class="w-[58px] h-[52.96px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[31.10px] h-[31.10px] left-[13.45px] top-[10.93px] absolute">
                        <div class="w-[31.10px] h-[31.10px] left-0 top-0 absolute">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-xl font-normal font-['Trip Sans']">+1 (483) 299 1400</div>
                    <div class="text-indigo-950 text-base font-normal font-['PP Mori']">Phone</div>
                </div>
            </div>
            <div class="pl-[18px] pr-[38px] py-5 bg-green-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-14 relative">
                    <div class="w-[58px] h-14 left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[30px] h-[30px] left-[14px] top-[13.04px] absolute">
                        <div class="w-[30px] h-[30px] left-0 top-0 absolute">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-xl font-normal font-['Trip Sans']">info@cancuntravelexperience.com</div>
                    <div class="text-indigo-950 text-base font-normal font-['PP Mori']">E-mail</div>
                </div>
            </div>
            <div class="pl-[18px] pr-[38px] py-5 bg-sky-50 rounded-[7px] justify-start items-start gap-3.5 inline-flex">
                <div class="w-[58px] h-[58px] relative">
                    <div class="w-[58px] h-[58px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-6 h-6 left-[17px] top-[17.09px] absolute">
                        <div class="w-6 h-6 left-0 top-0 absolute">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="w-80 text-black text-xl font-normal font-['Trip Sans']">Calle Tepich Lt 7 Mza 95, 77533 Cancún, Q.R.</div>
                    <div class="text-indigo-950 text-base font-normal font-['PP Mori']">Location</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection