@extends('layout')

@section('title')
<title> Cancun Travel Experience </title>
<meta name="description" content="EXAMPLE">
<meta name="keywords" content="EXAMPLE">
<meta name="robots" content="index, follow">
@endsection

@section('content')

<!-- firts section -->
<div class="w-[390px] h-[1100px] 2xl:w-full 2xl:h-[750px] relative mt-12">
    <div class="w-[390px] h-[768px] 2xl:w-[1280px] 2xl:h-[650px] flex items-center justify-center mt-12 absolute">
        <div class="w-[390px] h-[768px] 2xl:w-[712px] 2xl:h-[370px] absolute flex-col justify-start items-start gap-4 pl-5 2xl:pl-0 inline-flex">
            <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Our Story</p>
            <p class="flex-col justify-start items-start gap-[30px] flex">
                <div class="2xl:w-[712px]"><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Where Passion Meets </span><span class="text-orange-600 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Purpose</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">, and </span><span class="text-blue-900 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Adventures</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]"> Unfold</span></div>
                <p class="w-[390px] 2xl:w-[710px] text-zinc-800 text-lg font-normal font-['PP Mori'] leading-[27px]">There are plenty of activities and things to do when you visit Cancun, Riviera Maya or Playa del Carmen, get yourself ready to enjoy the best tours and activities in the region. Visit World Heritage Sites, famous landmarks or natural reserves in a safe, convenient and comfortable way.</p>
                <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
                    <button class="text-white text-base font-semibold font-['PP Mori']">Get Started</button>
                </div>
            </p>
        </div>
        <div class="w-[532px] h-[597px] 2xl:w-[532px] 2xl:h-[597px] 2xl:left-[1148px] top-[448px] 2xl:top-0 absolute">
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

<!-- card section -->
<div class="w-full h-[1000px] flex-col justify-start items-center gap-10 inline-flex my-12">
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
                <!-- For more features use the AutoHTML plugin window in figma ... -->
                <div class="shrink-0 w-[416px] h-[686px] relative">
                    <div class="bg-white rounded-[9px] border-solid border-slate-200 border absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%]">
                    </div>
                    <div class="flex flex-col gap-[17px] items-start justify-start absolute right-[4.09%] left-[3.85%] w-[92.07%] bottom-[13.31%] top-[2.73%] h-[83.96%]">
                        <img class="rounded-[5px] shrink-0 w-[383px] h-[266px] relative" src="{{ asset('/img/cards/transportation.webp') }}" />
                        <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                            <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                                <div class="flex flex-col gap-[5px] items-start justify-start shrink-0 relative">
                                    <div class="text-style text-left font-['TripSans-Bold',_sans-serif] text-[25px] leading-[30px] font-bold relative w-[379px]">
                                        <p>Cancun Airport: Private Transfer to Hotels in Cancun, Playa del Carmen, Riviera Maya and Tulum</p>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] pt-3 text-base font-normal relative">
                                        By Cancun Travel Experience </div>
                                </div>
                                <div class="flex flex-row gap-2 items-center justify-start shrink-0 relative">
                                    <svg class="shrink-0 w-6 h-4 relative overflow-visible" style="" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.252 7.21526C16.8835 7.21381 16.5229 7.31942 16.2158 7.5187C15.9088 7.71798 15.6693 8.00194 15.5276 8.33456C15.3858 8.66717 15.3484 9.03345 15.4199 9.38692C15.4914 9.74039 15.6687 10.0651 15.9293 10.3199C16.1899 10.5747 16.522 10.748 16.8835 10.818C17.245 10.8879 17.6196 10.8513 17.9598 10.7127C18.3 10.5742 18.5904 10.3399 18.7942 10.0397C18.998 9.73954 19.106 9.38691 19.1045 9.02659C19.1025 8.54679 18.9067 8.08719 18.5598 7.74792C18.2128 7.40865 17.7427 7.21719 17.252 7.21526ZM20.807 5.24992L22.502 3.42392H18.677C16.7126 2.10474 14.3852 1.39902 12.002 1.39992C9.59614 1.39533 7.24439 2.09795 5.25202 3.41659H1.50202L3.18202 5.21326C2.93581 5.4339 2.71454 5.67975 2.52202 5.94659C1.7377 6.9722 1.37377 8.24741 1.50166 9.5219C1.62956 10.7964 2.24003 11.9781 3.21326 12.8351C4.18649 13.6921 5.45218 14.1625 6.76187 14.1539C8.07156 14.1453 9.33066 13.6583 10.292 12.7886L12.002 14.5999L13.6745 12.8106C14.6613 13.717 15.968 14.2155 17.3219 14.2022C18.6757 14.1889 19.9719 13.6647 20.9398 12.7391C21.9078 11.8135 22.4726 10.5581 22.5163 9.23496C22.56 7.91185 22.0793 6.62337 21.1745 5.63859C21.0525 5.50161 20.9223 5.37182 20.7845 5.24992H20.807ZM6.75202 12.4879C6.05187 12.4879 5.36745 12.2849 4.7853 11.9046C4.20315 11.5242 3.74942 10.9837 3.48148 10.3512C3.21355 9.71871 3.14345 9.02275 3.28004 8.35132C3.41663 7.67989 3.75378 7.06314 4.24886 6.57906C4.74394 6.09498 5.37471 5.76532 6.0614 5.63177C6.74809 5.49821 7.45987 5.56676 8.10672 5.82874C8.75357 6.09072 9.30644 6.53436 9.69542 7.10358C10.0844 7.67279 10.292 8.342 10.292 9.02659C10.292 9.94459 9.91905 10.825 9.25518 11.4741C8.5913 12.1232 7.69088 12.4879 6.75202 12.4879ZM12.002 9.02659C12.002 6.54059 10.292 4.72926 8.08702 3.89326C9.31162 3.33619 10.6519 3.06506 12.002 3.10126C13.344 3.05766 14.6775 3.32397 15.8945 3.87859C14.7968 4.26269 13.8407 4.95718 13.1476 5.87382C12.4545 6.79045 12.0558 7.88786 12.002 9.02659ZM17.252 12.5099C16.5519 12.5099 15.8674 12.3069 15.2853 11.9266C14.7031 11.5462 14.2494 11.0057 13.9815 10.3732C13.7136 9.74071 13.6434 9.04475 13.78 8.37332C13.9166 7.70189 14.2538 7.08514 14.7489 6.60106C15.2439 6.11698 15.8747 5.78732 16.5614 5.65377C17.2481 5.52021 17.9599 5.58876 18.6067 5.85074C19.2536 6.11272 19.8064 6.55636 20.1954 7.12558C20.5844 7.69479 20.792 8.364 20.792 9.04859C20.792 9.96659 20.4191 10.847 19.7552 11.4961C19.0913 12.1452 18.1909 12.5099 17.252 12.5099ZM8.60452 9.02659C8.60452 9.38484 8.49587 9.73504 8.29232 10.0329C8.08876 10.3308 7.79944 10.5629 7.46094 10.7C7.12244 10.8371 6.74996 10.873 6.39061 10.8031C6.03126 10.7332 5.70118 10.5607 5.4421 10.3074C5.18303 10.0541 5.00659 9.73133 4.93511 9.37996C4.86363 9.0286 4.90032 8.6644 5.04053 8.33342C5.18074 8.00245 5.41818 7.71955 5.72282 7.52052C6.02747 7.32149 6.38563 7.21526 6.75202 7.21526C6.99529 7.21526 7.23618 7.26211 7.46094 7.35314C7.68569 7.44417 7.88991 7.57759 8.06193 7.74579C8.23395 7.91398 8.37041 8.11366 8.46351 8.33342C8.5566 8.55318 8.60452 8.78872 8.60452 9.02659Z" fill="#000F24" />
                                    </svg>
                                    <div class="flex flex-row gap-[2.63px] items-start justify-start shrink-0 relative">
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        262 reviews </div>
                                </div>
                            </div>
                            <div class="text-zinc-500 text-left font-['TripSans-Regular',_sans-serif] text-sm font-normal relative w-[383px]">
                                <p>Travel along and enjoy a private ride from the Cancun International Airport to the comfort of your hotel or roundtrip in a chauffeured private airport transport service</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute" style="inset: 0; ">
                        <div class="text-style text-left absolute right-[3.85%] left-[77.64%] w-[18.51%] bottom-[3.24%] top-[89.08%] h-[7.68%]">
                            <span>
                                <span class="from-us-29-00-span">From<br />
                                </span>
                                <span class="from-us-29-00-span2">US$89.00</span>
                            </span>
                        </div>
                        <div class="flex flex-row gap-[5px] items-center justify-start absolute bottom-[3.24%] left-[calc(50%_-_192px)] top-[calc(50%_-_-242px)]">
                            <!-- <div class="shrink-0 w-5 h-5 relative">
                                <svg class="h-[auto] absolute left-0 top-0 overflow-visible" style="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3346 9.99996C18.3346 14.6 14.6013 18.3333 10.0013 18.3333C5.4013 18.3333 1.66797 14.6 1.66797 9.99996C1.66797 5.39996 5.4013 1.66663 10.0013 1.66663C14.6013 1.66663 18.3346 5.39996 18.3346 9.99996Z" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0914 12.65L10.5081 11.1083C10.0581 10.8416 9.69141 10.2 9.69141 9.67497V6.2583" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->
                            <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-sm leading-[132.6%] font-normal relative">
                                <!-- <p>Duración 30 min </p> -->
                                <button class="bokunButton" disabled id=bokun_75139e60_eb07_4246_a375_f940ce3ce8e8 data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/experience/503432?partialView=1" data-testid="widget-book-button"> Book now </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shrink-0 w-[416px] h-[686px] relative">
                    <div class="bg-white rounded-[9px] border-solid border-slate-200 border absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%]">
                    </div>
                    <div class="flex flex-col gap-[17px] items-start justify-start absolute right-[4.09%] left-[3.85%] w-[92.07%] bottom-[13.31%] top-[2.73%] h-[83.96%]">
                        <img class="rounded-[5px] shrink-0 w-[383px] h-[266px] relative" src="{{ asset('/img/cards/atv-ziplines-cenote.webp') }}" />
                        <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                            <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                                <div class="flex flex-col gap-[5px] items-start justify-start shrink-0 relative">
                                    <div class="text-style text-left font-['TripSans-Bold',_sans-serif] text-[25px] leading-[30px] font-bold relative w-[379px]">
                                        <p>ATV, Ziplines & Cenote And Horseback Riding Experience</p>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        By Cancun Travel Experience </div>
                                </div>
                                <div class="flex flex-row gap-2 items-center justify-start shrink-0 relative">
                                    <svg class="shrink-0 w-6 h-4 relative overflow-visible" style="" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.252 7.21526C16.8835 7.21381 16.5229 7.31942 16.2158 7.5187C15.9088 7.71798 15.6693 8.00194 15.5276 8.33456C15.3858 8.66717 15.3484 9.03345 15.4199 9.38692C15.4914 9.74039 15.6687 10.0651 15.9293 10.3199C16.1899 10.5747 16.522 10.748 16.8835 10.818C17.245 10.8879 17.6196 10.8513 17.9598 10.7127C18.3 10.5742 18.5904 10.3399 18.7942 10.0397C18.998 9.73954 19.106 9.38691 19.1045 9.02659C19.1025 8.54679 18.9067 8.08719 18.5598 7.74792C18.2128 7.40865 17.7427 7.21719 17.252 7.21526ZM20.807 5.24992L22.502 3.42392H18.677C16.7126 2.10474 14.3852 1.39902 12.002 1.39992C9.59614 1.39533 7.24439 2.09795 5.25202 3.41659H1.50202L3.18202 5.21326C2.93581 5.4339 2.71454 5.67975 2.52202 5.94659C1.7377 6.9722 1.37377 8.24741 1.50166 9.5219C1.62956 10.7964 2.24003 11.9781 3.21326 12.8351C4.18649 13.6921 5.45218 14.1625 6.76187 14.1539C8.07156 14.1453 9.33066 13.6583 10.292 12.7886L12.002 14.5999L13.6745 12.8106C14.6613 13.717 15.968 14.2155 17.3219 14.2022C18.6757 14.1889 19.9719 13.6647 20.9398 12.7391C21.9078 11.8135 22.4726 10.5581 22.5163 9.23496C22.56 7.91185 22.0793 6.62337 21.1745 5.63859C21.0525 5.50161 20.9223 5.37182 20.7845 5.24992H20.807ZM6.75202 12.4879C6.05187 12.4879 5.36745 12.2849 4.7853 11.9046C4.20315 11.5242 3.74942 10.9837 3.48148 10.3512C3.21355 9.71871 3.14345 9.02275 3.28004 8.35132C3.41663 7.67989 3.75378 7.06314 4.24886 6.57906C4.74394 6.09498 5.37471 5.76532 6.0614 5.63177C6.74809 5.49821 7.45987 5.56676 8.10672 5.82874C8.75357 6.09072 9.30644 6.53436 9.69542 7.10358C10.0844 7.67279 10.292 8.342 10.292 9.02659C10.292 9.94459 9.91905 10.825 9.25518 11.4741C8.5913 12.1232 7.69088 12.4879 6.75202 12.4879ZM12.002 9.02659C12.002 6.54059 10.292 4.72926 8.08702 3.89326C9.31162 3.33619 10.6519 3.06506 12.002 3.10126C13.344 3.05766 14.6775 3.32397 15.8945 3.87859C14.7968 4.26269 13.8407 4.95718 13.1476 5.87382C12.4545 6.79045 12.0558 7.88786 12.002 9.02659ZM17.252 12.5099C16.5519 12.5099 15.8674 12.3069 15.2853 11.9266C14.7031 11.5462 14.2494 11.0057 13.9815 10.3732C13.7136 9.74071 13.6434 9.04475 13.78 8.37332C13.9166 7.70189 14.2538 7.08514 14.7489 6.60106C15.2439 6.11698 15.8747 5.78732 16.5614 5.65377C17.2481 5.52021 17.9599 5.58876 18.6067 5.85074C19.2536 6.11272 19.8064 6.55636 20.1954 7.12558C20.5844 7.69479 20.792 8.364 20.792 9.04859C20.792 9.96659 20.4191 10.847 19.7552 11.4961C19.0913 12.1452 18.1909 12.5099 17.252 12.5099ZM8.60452 9.02659C8.60452 9.38484 8.49587 9.73504 8.29232 10.0329C8.08876 10.3308 7.79944 10.5629 7.46094 10.7C7.12244 10.8371 6.74996 10.873 6.39061 10.8031C6.03126 10.7332 5.70118 10.5607 5.4421 10.3074C5.18303 10.0541 5.00659 9.73133 4.93511 9.37996C4.86363 9.0286 4.90032 8.6644 5.04053 8.33342C5.18074 8.00245 5.41818 7.71955 5.72282 7.52052C6.02747 7.32149 6.38563 7.21526 6.75202 7.21526C6.99529 7.21526 7.23618 7.26211 7.46094 7.35314C7.68569 7.44417 7.88991 7.57759 8.06193 7.74579C8.23395 7.91398 8.37041 8.11366 8.46351 8.33342C8.5566 8.55318 8.60452 8.78872 8.60452 9.02659Z" fill="#000F24" />
                                    </svg>
                                    <div class="flex flex-row gap-[2.63px] items-start justify-start shrink-0 relative">
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        7 reviews </div>
                                </div>
                            </div>
                            <div class="text-zinc-500 text-left font-['TripSans-Regular',_sans-serif] text-sm font-normal relative w-[383px]">
                                <p>Spend an adventure-filled half-day in the nature, horseback riding in a polo club followed by a lengthy ATV trip through the jungle and a refreshing cenote swim</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute" style="inset: 0; ">
                        <div class="text-style text-left absolute right-[3.85%] left-[77.64%] w-[18.51%] bottom-[3.24%] top-[89.08%] h-[7.68%]">
                            <span>
                                <span class="from-us-29-00-span">From<br />
                                </span>
                                <span class="from-us-29-00-span2">US$89.00</span>
                            </span>
                        </div>
                        <div class="flex flex-row gap-[5px] items-center justify-start absolute bottom-[3.24%] left-[calc(50%_-_192px)] top-[calc(50%_-_-242px)]">
                            <!-- <div class="shrink-0 w-5 h-5 relative">
                                <svg class="h-[auto] absolute left-0 top-0 overflow-visible" style="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3346 9.99996C18.3346 14.6 14.6013 18.3333 10.0013 18.3333C5.4013 18.3333 1.66797 14.6 1.66797 9.99996C1.66797 5.39996 5.4013 1.66663 10.0013 1.66663C14.6013 1.66663 18.3346 5.39996 18.3346 9.99996Z" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0914 12.65L10.5081 11.1083C10.0581 10.8416 9.69141 10.2 9.69141 9.67497V6.2583" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->
                            <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-sm leading-[132.6%] font-normal relative">
                                <!-- <p>Duración 5 h </p> -->
                                <button class="bokunButton" disabled id=bokun_53a53746_b8d4_4b2e_b6d3_ddd95beee7dd data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/experience/630299?partialView=1" data-testid="widget-book-button"> Book now </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shrink-0 w-[416px] h-[686px] relative">
                    <div class="bg-white rounded-[9px] border-solid border-slate-200 border absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%]">
                    </div>
                    <div class="flex flex-col gap-[17px] items-start justify-start absolute right-[4.09%] left-[3.85%] w-[92.07%] bottom-[13.31%] top-[2.73%] h-[83.96%]">
                        <img class="rounded-[5px] shrink-0 w-[383px] h-[266px] relative" src="{{ asset('/img/cards/chichen-itza-tour.webp') }}" />
                        <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                            <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                                <div class="flex flex-col gap-[5px] items-start justify-start shrink-0 relative">
                                    <div class="text-style text-left font-['TripSans-Bold',_sans-serif] text-[25px] leading-[30px] font-bold relative w-[379px]">
                                        <p>Ultimate Chichén-Itzá Experience, Cenote Swim and Valladolid with Lunch</p>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        By Cancun Travel Experience </div>
                                </div>
                                <div class="flex flex-row gap-2 items-center justify-start shrink-0 relative">
                                    <svg class="shrink-0 w-6 h-4 relative overflow-visible" style="" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.252 7.21526C16.8835 7.21381 16.5229 7.31942 16.2158 7.5187C15.9088 7.71798 15.6693 8.00194 15.5276 8.33456C15.3858 8.66717 15.3484 9.03345 15.4199 9.38692C15.4914 9.74039 15.6687 10.0651 15.9293 10.3199C16.1899 10.5747 16.522 10.748 16.8835 10.818C17.245 10.8879 17.6196 10.8513 17.9598 10.7127C18.3 10.5742 18.5904 10.3399 18.7942 10.0397C18.998 9.73954 19.106 9.38691 19.1045 9.02659C19.1025 8.54679 18.9067 8.08719 18.5598 7.74792C18.2128 7.40865 17.7427 7.21719 17.252 7.21526ZM20.807 5.24992L22.502 3.42392H18.677C16.7126 2.10474 14.3852 1.39902 12.002 1.39992C9.59614 1.39533 7.24439 2.09795 5.25202 3.41659H1.50202L3.18202 5.21326C2.93581 5.4339 2.71454 5.67975 2.52202 5.94659C1.7377 6.9722 1.37377 8.24741 1.50166 9.5219C1.62956 10.7964 2.24003 11.9781 3.21326 12.8351C4.18649 13.6921 5.45218 14.1625 6.76187 14.1539C8.07156 14.1453 9.33066 13.6583 10.292 12.7886L12.002 14.5999L13.6745 12.8106C14.6613 13.717 15.968 14.2155 17.3219 14.2022C18.6757 14.1889 19.9719 13.6647 20.9398 12.7391C21.9078 11.8135 22.4726 10.5581 22.5163 9.23496C22.56 7.91185 22.0793 6.62337 21.1745 5.63859C21.0525 5.50161 20.9223 5.37182 20.7845 5.24992H20.807ZM6.75202 12.4879C6.05187 12.4879 5.36745 12.2849 4.7853 11.9046C4.20315 11.5242 3.74942 10.9837 3.48148 10.3512C3.21355 9.71871 3.14345 9.02275 3.28004 8.35132C3.41663 7.67989 3.75378 7.06314 4.24886 6.57906C4.74394 6.09498 5.37471 5.76532 6.0614 5.63177C6.74809 5.49821 7.45987 5.56676 8.10672 5.82874C8.75357 6.09072 9.30644 6.53436 9.69542 7.10358C10.0844 7.67279 10.292 8.342 10.292 9.02659C10.292 9.94459 9.91905 10.825 9.25518 11.4741C8.5913 12.1232 7.69088 12.4879 6.75202 12.4879ZM12.002 9.02659C12.002 6.54059 10.292 4.72926 8.08702 3.89326C9.31162 3.33619 10.6519 3.06506 12.002 3.10126C13.344 3.05766 14.6775 3.32397 15.8945 3.87859C14.7968 4.26269 13.8407 4.95718 13.1476 5.87382C12.4545 6.79045 12.0558 7.88786 12.002 9.02659ZM17.252 12.5099C16.5519 12.5099 15.8674 12.3069 15.2853 11.9266C14.7031 11.5462 14.2494 11.0057 13.9815 10.3732C13.7136 9.74071 13.6434 9.04475 13.78 8.37332C13.9166 7.70189 14.2538 7.08514 14.7489 6.60106C15.2439 6.11698 15.8747 5.78732 16.5614 5.65377C17.2481 5.52021 17.9599 5.58876 18.6067 5.85074C19.2536 6.11272 19.8064 6.55636 20.1954 7.12558C20.5844 7.69479 20.792 8.364 20.792 9.04859C20.792 9.96659 20.4191 10.847 19.7552 11.4961C19.0913 12.1452 18.1909 12.5099 17.252 12.5099ZM8.60452 9.02659C8.60452 9.38484 8.49587 9.73504 8.29232 10.0329C8.08876 10.3308 7.79944 10.5629 7.46094 10.7C7.12244 10.8371 6.74996 10.873 6.39061 10.8031C6.03126 10.7332 5.70118 10.5607 5.4421 10.3074C5.18303 10.0541 5.00659 9.73133 4.93511 9.37996C4.86363 9.0286 4.90032 8.6644 5.04053 8.33342C5.18074 8.00245 5.41818 7.71955 5.72282 7.52052C6.02747 7.32149 6.38563 7.21526 6.75202 7.21526C6.99529 7.21526 7.23618 7.26211 7.46094 7.35314C7.68569 7.44417 7.88991 7.57759 8.06193 7.74579C8.23395 7.91398 8.37041 8.11366 8.46351 8.33342C8.5566 8.55318 8.60452 8.78872 8.60452 9.02659Z" fill="#000F24" />
                                    </svg>
                                    <div class="flex flex-row gap-[2.63px] items-start justify-start shrink-0 relative">
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        7 reviews </div>
                                </div>
                            </div>
                            <div class="text-zinc-500 text-left font-['TripSans-Regular',_sans-serif] text-sm font-normal relative w-[383px]">
                                <p>Unravel the magic of one of the seven wonders of the world; Chichén-Itzá.</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute" style="inset: 0; ">
                        <div class="text-style text-left absolute right-[3.85%] left-[77.64%] w-[18.51%] bottom-[3.24%] top-[89.08%] h-[7.68%]">
                            <span>
                                <span class="from-us-29-00-span">From<br />
                                </span>
                                <span class="from-us-29-00-span2">US$39.00</span>
                            </span>
                        </div>
                        <div class="flex flex-row gap-[5px] items-center justify-start absolute bottom-[3.24%] left-[calc(50%_-_192px)] top-[calc(50%_-_-242px)]">
                            <!-- <div class="shrink-0 w-5 h-5 relative">
                                <svg class="h-[auto] absolute left-0 top-0 overflow-visible" style="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3346 9.99996C18.3346 14.6 14.6013 18.3333 10.0013 18.3333C5.4013 18.3333 1.66797 14.6 1.66797 9.99996C1.66797 5.39996 5.4013 1.66663 10.0013 1.66663C14.6013 1.66663 18.3346 5.39996 18.3346 9.99996Z" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0914 12.65L10.5081 11.1083C10.0581 10.8416 9.69141 10.2 9.69141 9.67497V6.2583" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->
                            <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-sm leading-[132.6%] font-normal relative">
                                <!-- <p>Duración 12 h </p> -->
                                <button class="bokunButton" disabled id=bokun_2ce92050_494d_4ff4_8e80_2af20c8ffa33 data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/experience/439691?partialView=1" data-testid="widget-book-button"> Book now </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shrink-0 w-[416px] h-[686px] relative">
                    <div class="bg-white rounded-[9px] border-solid border-slate-200 border absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%]">
                    </div>
                    <div class="flex flex-col gap-[17px] items-start justify-start absolute right-[4.09%] left-[3.85%] w-[92.07%] bottom-[13.31%] top-[2.73%] h-[83.96%]">
                        <img class="rounded-[5px] shrink-0 w-[383px] h-[266px] relative" src="{{ asset('/img/cards/tulum-day-trip.webp') }}" />
                        <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                            <div class="flex flex-col gap-3 items-start justify-start shrink-0 relative">
                                <div class="flex flex-col gap-[5px] items-start justify-start shrink-0 relative">
                                    <div class="text-style text-left font-['TripSans-Bold',_sans-serif] text-[25px] leading-[30px] font-bold relative w-[379px]">
                                        <p>Tulum Day-Trip Mayan Ruins With Cenote Swim</p>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        By Cancun Travel Experience </div>
                                </div>
                                <div class="flex flex-row gap-2 items-center justify-start shrink-0 relative">
                                    <svg class="shrink-0 w-6 h-4 relative overflow-visible" style="" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.252 7.21526C16.8835 7.21381 16.5229 7.31942 16.2158 7.5187C15.9088 7.71798 15.6693 8.00194 15.5276 8.33456C15.3858 8.66717 15.3484 9.03345 15.4199 9.38692C15.4914 9.74039 15.6687 10.0651 15.9293 10.3199C16.1899 10.5747 16.522 10.748 16.8835 10.818C17.245 10.8879 17.6196 10.8513 17.9598 10.7127C18.3 10.5742 18.5904 10.3399 18.7942 10.0397C18.998 9.73954 19.106 9.38691 19.1045 9.02659C19.1025 8.54679 18.9067 8.08719 18.5598 7.74792C18.2128 7.40865 17.7427 7.21719 17.252 7.21526ZM20.807 5.24992L22.502 3.42392H18.677C16.7126 2.10474 14.3852 1.39902 12.002 1.39992C9.59614 1.39533 7.24439 2.09795 5.25202 3.41659H1.50202L3.18202 5.21326C2.93581 5.4339 2.71454 5.67975 2.52202 5.94659C1.7377 6.9722 1.37377 8.24741 1.50166 9.5219C1.62956 10.7964 2.24003 11.9781 3.21326 12.8351C4.18649 13.6921 5.45218 14.1625 6.76187 14.1539C8.07156 14.1453 9.33066 13.6583 10.292 12.7886L12.002 14.5999L13.6745 12.8106C14.6613 13.717 15.968 14.2155 17.3219 14.2022C18.6757 14.1889 19.9719 13.6647 20.9398 12.7391C21.9078 11.8135 22.4726 10.5581 22.5163 9.23496C22.56 7.91185 22.0793 6.62337 21.1745 5.63859C21.0525 5.50161 20.9223 5.37182 20.7845 5.24992H20.807ZM6.75202 12.4879C6.05187 12.4879 5.36745 12.2849 4.7853 11.9046C4.20315 11.5242 3.74942 10.9837 3.48148 10.3512C3.21355 9.71871 3.14345 9.02275 3.28004 8.35132C3.41663 7.67989 3.75378 7.06314 4.24886 6.57906C4.74394 6.09498 5.37471 5.76532 6.0614 5.63177C6.74809 5.49821 7.45987 5.56676 8.10672 5.82874C8.75357 6.09072 9.30644 6.53436 9.69542 7.10358C10.0844 7.67279 10.292 8.342 10.292 9.02659C10.292 9.94459 9.91905 10.825 9.25518 11.4741C8.5913 12.1232 7.69088 12.4879 6.75202 12.4879ZM12.002 9.02659C12.002 6.54059 10.292 4.72926 8.08702 3.89326C9.31162 3.33619 10.6519 3.06506 12.002 3.10126C13.344 3.05766 14.6775 3.32397 15.8945 3.87859C14.7968 4.26269 13.8407 4.95718 13.1476 5.87382C12.4545 6.79045 12.0558 7.88786 12.002 9.02659ZM17.252 12.5099C16.5519 12.5099 15.8674 12.3069 15.2853 11.9266C14.7031 11.5462 14.2494 11.0057 13.9815 10.3732C13.7136 9.74071 13.6434 9.04475 13.78 8.37332C13.9166 7.70189 14.2538 7.08514 14.7489 6.60106C15.2439 6.11698 15.8747 5.78732 16.5614 5.65377C17.2481 5.52021 17.9599 5.58876 18.6067 5.85074C19.2536 6.11272 19.8064 6.55636 20.1954 7.12558C20.5844 7.69479 20.792 8.364 20.792 9.04859C20.792 9.96659 20.4191 10.847 19.7552 11.4961C19.0913 12.1452 18.1909 12.5099 17.252 12.5099ZM8.60452 9.02659C8.60452 9.38484 8.49587 9.73504 8.29232 10.0329C8.08876 10.3308 7.79944 10.5629 7.46094 10.7C7.12244 10.8371 6.74996 10.873 6.39061 10.8031C6.03126 10.7332 5.70118 10.5607 5.4421 10.3074C5.18303 10.0541 5.00659 9.73133 4.93511 9.37996C4.86363 9.0286 4.90032 8.6644 5.04053 8.33342C5.18074 8.00245 5.41818 7.71955 5.72282 7.52052C6.02747 7.32149 6.38563 7.21526 6.75202 7.21526C6.99529 7.21526 7.23618 7.26211 7.46094 7.35314C7.68569 7.44417 7.88991 7.57759 8.06193 7.74579C8.23395 7.91398 8.37041 8.11366 8.46351 8.33342C8.5566 8.55318 8.60452 8.78872 8.60452 9.02659Z" fill="#000F24" />
                                    </svg>
                                    <div class="flex flex-row gap-[2.63px] items-start justify-start shrink-0 relative">
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                        <div class="bg-green-500 rounded-[7.46px] shrink-0 w-[12.29px] h-[12.29px] relative">
                                        </div>
                                    </div>
                                    <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-base font-normal relative">
                                        545 reviews </div>
                                </div>
                            </div>
                            <div class="text-zinc-500 text-left font-['TripSans-Regular',_sans-serif] text-sm font-normal relative w-[383px]">
                                <p>Explore the Mayan temples of Tulum and learn with a professional guide, appreciate the ancient architecture and take a refreshing swim in crystal-clear water in a Dos Ojos cenote
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute" style="inset: 0; ">
                        <div class="text-style text-left absolute right-[3.85%] left-[77.64%] w-[18.51%] bottom-[3.24%] top-[89.08%] h-[7.68%]">
                            <span>
                                <span class="from-us-29-00-span">From<br />
                                </span>
                                <span class="from-us-29-00-span2">US$29.00</span>
                            </span>
                        </div>
                        <div class="flex flex-row gap-[5px] items-center justify-start absolute bottom-[3.24%] left-[calc(50%_-_192px)] top-[calc(50%_-_-242px)]">
                            <!-- <div class="shrink-0 w-5 h-5 relative">
                                <svg class="h-[auto] absolute left-0 top-0 overflow-visible" style="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3346 9.99996C18.3346 14.6 14.6013 18.3333 10.0013 18.3333C5.4013 18.3333 1.66797 14.6 1.66797 9.99996C1.66797 5.39996 5.4013 1.66663 10.0013 1.66663C14.6013 1.66663 18.3346 5.39996 18.3346 9.99996Z" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0914 12.65L10.5081 11.1083C10.0581 10.8416 9.69141 10.2 9.69141 9.67497V6.2583" stroke="#292D32" stroke-width="1.375" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div> -->
                            <div class="text-style text-left font-['TripSans-Regular',_sans-serif] text-sm leading-[132.6%] font-normal relative">
                                <!-- <p>Duración 8 h </p> -->
                                <button class="bokunButton" disabled id=bokun_5a338c46_3f59_41f1_ae56_ed1e101feb7b data-src="https://widgets.bokun.io/online-sales/ed6014cf-0772-484f-ab73-511bb2e36cc4/experience/455094?partialView=1" data-testid="widget-book-button"> Book now </button>
                            </div>
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

<!-- dropbox section -->
<div class="w-full h-[1000px] relative my-12">
    <div class="w-full h-[30px] absolute justify-center items-start gap-[115px] inline-flex">
        <div class="w-2/6 flex-col justify-start items-start gap-10 inline-flex">
            <div class="flex-col justify-start items-start gap-[17px] flex">
                <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Our Experiences</div>
                <div class="w-full"><span class="text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Your Guides to Untamed </span><span class="text-blue-900 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Experiences</span></div>
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
                        <div class="w-[43px] h-[43px] left-0 top-0 absolute flex justify-center items-center bg-orange-600 rounded-[22.65px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div class="w-[639.67px] text-zinc-600 text-sm font-normal font-['PP Mori'] leading-[23px]">To make your travels easier, we can take care of your transportation needs. <p>Providing you with a stress-free vacation experience, our promise is simple, we will take you quickly and efficiently from the Airport to your hotel and back if needed. Our private transportation services are often more affordable than taxis or other transportation services upon arrival. With a variety of routes and a comprehensive service area.</p>
                </div>
            </div>
            <div class="w-[639.67px] h-[0px] opacity-20 border border-black"></div>
            <div class="flex-col justify-start items-start gap-[15px] flex">
                <div class="w-[634px] h-[54px] relative">
                    <div class="w-[403px] h-[54px] left-0 top-0 absolute flex-col justify-start items-start gap-[15px] inline-flex">
                        <div class="flex-col justify-start items-start gap-[7px] flex">
                            <div class="text-slate-950 text-[25px] font-bold font-['Trip Sans']">Experiences</div>
                            <div class="text-orange-600 text-xs font-semibold font-['PP Mori'] uppercase tracking-widest">We can take care of your transportation needs</div>
                        </div>
                    </div>
                    <div class="w-[43px] h-[43px] left-[591px] top-[4.35px] absolute">
                        <div class="w-[43px] h-[43px] left-0 top-0 absolute flex justify-center items-center bg-blue-900 rounded-[22.65px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-[639.67px] text-zinc-600 text-sm font-normal font-['PP Mori'] leading-[23px]">To make your travels easier, we can take care of your transportation needs. <p>Providing you with a stress-free vacation experience, our promise is simple, we will take you quickly and efficiently from the Airport to your hotel and back if needed. Our private transportation services are often more affordable than taxis or other transportation services upon arrival. With a variety of routes and a comprehensive service area.</p>
                </div>
            </div>
        </div>
    </div>

    <img class="w-full h-[613.42px] left-0 top-[430px] pt-12 absolute" src="{{ asset('/img/atv-tour.webp') }}" />
</div>

<!-- reviews section -->
<div class="w-full h-[750px] relative my-12 py-12">
    <div class="w-full h-[152px] mx flex-col justify-center items-center gap-[17px] inline-flex py-12">
        <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest pt-12 mt-12">Testimonials</div>
        <div class="w-[775px] text-center text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">Inspiring Stories from Our Incredible Clients</div>
    </div>
    <div class="w-full h-[350px] left-0 top-[300px] absolute justify-center items-end gap-7 inline-flex">
        <div class="w-[325px] h-[331px] relative">
            <div class="w-[325px] h-[331px] left-0 top-0 absolute bg-white rounded-[7px] border border-slate-200"></div>
            <div class="left-[21px] top-[20px] absolute flex-col justify-start items-start gap-[41px] inline-flex">
                <div class="flex-col justify-start items-start gap-[18px] flex">
                    <div class="w-8 h-8 relative opacity-20"></div>
                    <div class="w-[284px] text-slate-950 text-lg font-normal font-['PP Mori'] leading-relaxed">The best tour I’ve ever had! Miguel is the best guide ever! He is very flexible, knows a lot about ancient cultures. He will let you to have you</div>
                </div>
                <div class="flex-col justify-start items-start gap-[11px] flex">
                    <div class="flex-col justify-start items-start gap-[5px] flex">
                        <div class="text-slate-950 text-base font-semibold font-['PP Mori']">Usman Zafar</div>
                        <div class="text-slate-400 text-sm font-normal font-['PP Mori']">Trip advisor</div>
                    </div>
                    <div class="justify-center items-center gap-[5px] inline-flex">
                        <div class="w-6 h-4 relative"></div>
                        <div class="justify-center items-center flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[325px] h-[331px] relative">
            <div class="w-[325px] h-[331px] left-0 top-0 absolute bg-white rounded-[7px] border border-slate-200"></div>
            <div class="left-[21px] top-[20px] absolute flex-col justify-start items-start gap-[41px] inline-flex">
                <div class="flex-col justify-start items-start gap-[18px] flex">
                    <div class="w-8 h-8 relative opacity-20"></div>
                    <div class="w-[284px] text-slate-950 text-lg font-normal font-['PP Mori'] leading-relaxed">The best tour I’ve ever had! Miguel is the best guide ever! He is very flexible, knows a lot about ancient cultures. He will let you to have you</div>
                </div>
                <div class="flex-col justify-start items-start gap-[11px] flex">
                    <div class="flex-col justify-start items-start gap-[5px] flex">
                        <div class="text-slate-950 text-base font-semibold font-['PP Mori']">Usman Zafar</div>
                        <div class="text-slate-400 text-sm font-normal font-['PP Mori']">Trip advisor</div>
                    </div>
                    <div class="justify-center items-center gap-[5px] inline-flex">
                        <div class="w-6 h-4 relative"></div>
                        <div class="justify-center items-center flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[351px] h-[350px] relative">
            <div class="w-[351px] h-[350px] left-0 top-0 absolute bg-orange-600 rounded-[7px]"></div>
            <div class="w-[351px] h-[359px] left-0 top-0 absolute bg-orange-600 rounded-[7px]"></div>
            <div class="w-[84px] h-[200px] left-[308px] top-[236px] absolute bg-white rounded-full blur-[105px]"></div>
            <div class="w-[84px] h-[200px] left-[-48px] top-[-130px] absolute bg-white rounded-full blur-[105px]"></div>
            <div class="w-[268px] h-[200px] left-[47px] top-[52px] absolute bg-white bg-opacity-30 rounded-full blur-[105px]"></div>
            <div class="left-[22px] top-[21px] absolute flex-col justify-start items-start gap-[46px] inline-flex">
                <div class="flex-col justify-start items-start gap-[18px] flex">
                    <div class="w-8 h-8 relative opacity-20"></div>
                    <div class="w-[308px] text-white text-xl font-normal font-['PP Mori'] leading-7">The best tour I’ve ever had! Miguel is the best guide ever! He is very flexible, knows a lot about ancient cultures. He will let you to have you</div>
                </div>
                <div class="flex-col justify-start items-start gap-[11px] flex">
                    <div class="flex-col justify-start items-start gap-[5px] flex">
                        <div class="text-white text-base font-semibold font-['PP Mori']">Usman Zafar</div>
                        <div class="text-white text-sm font-normal font-['PP Mori']">Trip advisor</div>
                    </div>
                    <div class="justify-center items-center gap-[5px] inline-flex">
                        <div class="w-6 h-4 relative"></div>
                        <div class="justify-center items-center flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[325px] h-[331px] relative">
            <div class="w-[325px] h-[331px] left-0 top-0 absolute bg-white rounded-[7px] border border-slate-200"></div>
            <div class="left-[21px] top-[20px] absolute flex-col justify-start items-start gap-[41px] inline-flex">
                <div class="flex-col justify-start items-start gap-[18px] flex">
                    <div class="w-8 h-8 relative opacity-20"></div>
                    <div class="w-[284px] text-slate-950 text-lg font-normal font-['PP Mori'] leading-relaxed">The best tour I’ve ever had! Miguel is the best guide ever! He is very flexible, knows a lot about ancient cultures. He will let you to have you</div>
                </div>
                <div class="flex-col justify-start items-start gap-[11px] flex">
                    <div class="flex-col justify-start items-start gap-[5px] flex">
                        <div class="text-slate-950 text-base font-semibold font-['PP Mori']">Usman Zafar</div>
                        <div class="text-slate-400 text-sm font-normal font-['PP Mori']">Trip advisor</div>
                    </div>
                    <div class="justify-center items-center gap-[5px] inline-flex">
                        <div class="w-6 h-4 relative"></div>
                        <div class="justify-center items-center flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[325px] h-[331px] relative">
            <div class="w-[325px] h-[331px] left-0 top-0 absolute bg-white rounded-[7px] border border-slate-200"></div>
            <div class="left-[21px] top-[20px] absolute flex-col justify-start items-start gap-[41px] inline-flex">
                <div class="flex-col justify-start items-start gap-[18px] flex">
                    <div class="w-8 h-8 relative opacity-20"></div>
                    <div class="w-[284px] text-slate-950 text-lg font-normal font-['PP Mori'] leading-relaxed">The best tour I’ve ever had! Miguel is the best guide ever! He is very flexible, knows a lot about ancient cultures. He will let you to have you</div>
                </div>
                <div class="flex-col justify-start items-start gap-[11px] flex">
                    <div class="flex-col justify-start items-start gap-[5px] flex">
                        <div class="text-slate-950 text-base font-semibold font-['PP Mori']">Usman Zafar</div>
                        <div class="text-slate-400 text-sm font-normal font-['PP Mori']">Trip advisor</div>
                    </div>
                    <div class="justify-center items-center gap-[5px] inline-flex">
                        <div class="w-6 h-4 relative"></div>
                        <div class="justify-center items-center flex"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- gallery section -->
<div class="w-full h-[800px] relative my-12 pt-12">
    <div class="w-full h-[146px] top-0 absolute flex-col justify-center items-center gap-[11px] inline-flex">
        <div class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">our Gallery</div>
        <div class="w-[771.69px] text-center text-slate-950 text-[50px] font-bold font-['Trip Sans'] leading-[60px]">A little look at our tour, a great experience forever</div>
    </div>
    <div class="w-full h-[514px] top-[176px] absolute flex justify-center items-center">
        <div class="w-full h-[252px] left-[-50px] top-0 absolute justify-center items-center gap-2.5 inline-flex">
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

<!-- contact section -->
<div class="w-[342px] 2xl:w-[742px] h-[1400px] 2xl:h-[700px] left-10 2xl:left-[350px] relative my-12">
    <div class="w-[342px] 2xl:w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex mb-12">
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
    
    <div class="2xl:w-[449px] h-[393.96px] left-[0px] top-[1000px] 2xl:left-[802px] 2xl:top-[152px] absolute flex-col justify-start items-start gap-[19px] inline-flex">
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