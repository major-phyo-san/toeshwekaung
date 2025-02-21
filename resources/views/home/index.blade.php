@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')

    <div>
        <section class="mb-12">
            <div class="relative h-full w-full">
                <img class="w-full h-[60vh] lg:h-[100vh]" src="{{ asset('img/one.png') }}" alt="">
                <div class="absolute right-[8%] bottom-8 lg:bottom-[22%] w-[50%] lg:w-[420px]">
                    <p class=" text-2xl lg:text-6xl text-black mb-4">
                        DESIGN
                    </p>
                    <p class=" text-2xl lg:text-6xl text-[#EDBC0E] mb-4">
                        that's Inspire
                    </p>
                    <div class="text-right w-full lg:w-[320px] ml-auto">
                        <p class="text-black mb-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            <span class="hidden lg:inline">
                            , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                            </span>
                        </p>
                        <button class=" text-sm text-red-500">
                            Read More <i class="fas fa-long-arrow-alt-right pl-0.5"></i>
                        </button>
                    </div>
                
                </div>
            </div>
        </section>
        <section class="bg-white mb-8 lg:mb-16 animation-one">
            <div class="grid grid-cols-2 gap-x-0 w-10/12 mx-auto">
                <div class="col-span-2 lg:col-span-1">
                    <div class="pl-4 lg:pl-20 mb-4 lg:mb-6">
                        <p class="text-xl lg:text-2xl text-[#EDBC0E] mb-2">
                            About Us
                        </p>
                        <p class="text-4xl lg:text-6xl text-black">
                            Delivering
                        </p>
                    </div>
                    <div class="grid grid-flow-col grid-rows-3 grid-cols-2 lg:grid-cols-5 gap-y-4 gap-x-8">
                        <div class=" row-span-3 flex col-span-1 lg:col-span-2">
                            <img src="{{ asset('img/two.png') }}" class="w-full mt-auto" alt="">
                        </div>
                        <div class="col-span-1 lg:col-span-3">
                            <p class="text-2xl lg:text-[2.75rem] leading-[1.25] text-black mb-1.5">
                                Design
                            </p>
                            <p class="text-2xl lg:text-[2.75rem] leading-[1.25] text-black pl-6">
                                Excelllence
                            </p>
                        </div>
                        <div class=" col-span-1 lg:col-span-3 row-span-2 flex lg:block items-end">
                            <img src="{{ asset('img/three.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 flex justify-between flex-col pl-0 lg:pl-8">
                    <div class="flex gap-x-8 w-10/12 mx-0 lg:mx-auto pt-12 mb-8 lg:mb-0">
                        <p class="text-4xl lg:text-6xl text-[#EDBC0E]">
                            7
                        </p>
                        <p class="text-base lg:text-xl text-black">
                            Year <br>Experience
                        </p>
                        <p class="text-4xl lg:text-6xl text-[#EDBC0E]">
                            15+
                        </p>
                        <p class="text-base lg:text-xl text-black">
                            Happy <br>Clients
                        </p>
                    </div>
                    <div class="w-10/12 mx-0 lg:mx-auto pb-6 lg:pb-12">
                        <p class=" text-black text-lg mb-4 lg:mb-3">
                            Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed do eiusmod tempor 
                            <br>
                            incididunt ut labore et dolore magna 
                            aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                        <button class=" px-12 py-2 text-base text-[#7D0103] border border-gray-400">
                            See More
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-black mb-8 lg:mb-16 animation-two" id="portfolio_section">
            <div id="portfolio_slider" class=" w-10/12 mx-auto portfolio-arrow">
                <div class="relative">
                    <img src="{{ asset('img/four.png') }}" class=" aspect-[16/8]" alt="">
                    <p class=" absolute top-6 left-8 text-black text-lg">
                        Portfolio
                    </p>
                    <p class=" absolute bottom-6 left-8 text-white text-lg">
                        ABC Trading Company
                    </p>
                    <p class=" absolute bottom-6 right-8 text-white text-lg">
                        Mandalay, Myanmar
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/three.png') }}" class="w-full aspect-[16/8]" alt="">
                    <p class=" absolute top-6 left-8 text-black text-lg">
                        Portfolio
                    </p>
                    <p class=" absolute bottom-6 left-8 text-white text-lg">
                        ABC Trading Company
                    </p>
                    <p class=" absolute bottom-6 right-8 text-white text-lg">
                        Mandalay, Myanmar
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/five.png') }}" class=" aspect-[16/8]" alt="">
                    <p class=" absolute top-6 left-8 text-black text-lg">
                        Portfolio
                    </p>
                    <p class=" absolute bottom-6 left-8 text-white text-lg">
                        ABC Trading Company
                    </p>
                    <p class=" absolute bottom-6 right-8 text-white text-lg">
                        Mandalay, Myanmar
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/six.png') }}" class=" aspect-[16/8]" alt="">
                    <p class=" absolute top-6 left-8 text-black text-lg">
                        Portfolio
                    </p>
                    <p class=" absolute bottom-6 left-8 text-white text-lg">
                        ABC Trading Company
                    </p>
                    <p class=" absolute bottom-6 right-8 text-white text-lg">
                        Mandalay, Myanmar
                    </p>
                </div>
            </div>
        </section>


        

        <section class="text-black mb-16 pt-4 animation-three" id="testimonial_section">
            <div id="customer_slider" class=" w-10/12 mx-auto slider-arrow">
                @for ($i = 0; $i < 3; $i++)
                <div>
                    <div class="grid grid-cols-8 gap-x-12 gap-y-12 py-8">
                        <div class=" col-span-8 lg:col-span-2 px-8">
                            <div class="hidden lg:block relative mb-8">
                                <i class="fas fa-quote-left absolute text-[#7D0103] bottom-[92%] right-full pr-4"></i>
                                <p class=" text-black text-4xl">
                                    Customer Satisfaction is our 
                                    <span class="block relative w-fit">
                                        Priority
                                        <i class="fas fa-quote-right absolute text-[#7D0103] top-0 left-full pl-4 text-base"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="block lg:hidden relative mb-8">
                                <i class="fas fa-quote-left absolute text-[#7D0103] bottom-[92%] right-full pr-4"></i>
                                <p class=" text-black text-4xl">
                                        Customer 
                                    <span class="block pl-[20%]">
                                        Satisfaction
                                    </span>
                                    <span class="block pl-[40%]">
                                        is our 
                                    </span>
                                    <span class="block relative w-fit pl-[60%]">
                                        Priority
                                        <i class="fas fa-quote-right absolute text-[#7D0103] top-0 left-full pl-4 text-base"></i>
                                    </span>
                                </p>
                            </div>
                            <p class="text-[#EDBC0E] text-2xl mb-3">
                                Mg Mg
                            </p>
                            <p class="text-sm text-black">
                                CEO
                            </p>
                        </div>
                    
                        <div class=" col-span-8 lg:col-span-3 px-6 lg:px-16 text-center lg:text-left">
                            <img src="{{ asset('img/hotpot.jpeg') }}" class=" rounded-full aspect-square w-32 mx-auto lg:mx-0  mb-6" alt="">
                            <p class="text-[#EDBC0E] text-2xl mb-1">Pork Hot Pot</p>
                            <p class="text-sm text-gray-600 mb-4">Test meal</p>
                            <p class="text-black leading-6">
                            in East Asian cooking a dish consisting of raw ingredients such as thinly sliced meat and vegetables that are cooked by diners at the table by dipping them in boiling broth.
                            </p>
                        </div>
                        <div class=" col-span-8 lg:col-span-3 px-6 lg:px-16 text-center lg:text-left">
                            <img src="{{ asset('img/tom-yum-seafood.png') }}" class=" rounded-full aspect-square w-32 mx-auto lg:mx-0 mb-6" alt="">
                            <p class="text-[#EDBC0E] text-2xl mb-1">Tom yum goong</p>
                            <p class="text-sm text-gray-600 mb-4">Test meal</p>
                            <p class="text-black leading-6">
                                This best food Thai masterpiece teems with shrimp, mushrooms, tomatoes, lemongrass, galangal and kaffir lime leaves. Usually loaded with coconut milk and cream, the hearty soup unifies a host of favorite Thai tastes: sour, salty, spicy and sweet. Best of all is the price: cheap.
                            </p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </section>

        <section class="mb-12 lg:mb-24" id="service_section">
            <div class="hidden lg:grid grid-cols-2 lg:grid-cols-4 grid-rows-1">
                <div class=" bg-[#7D0103] py-12 px-12 gap-y-24 flex flex-col">
                    <i class="fal fa-sign-out-alt text-white text-2xl"></i>
                    <p class="text-sm text-white leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div>
                <div class=" bg-[#D9D9D9] py-12 px-12 gap-y-24 flex flex-col">
                    <i class="fal fa-truck-container text-black text-2xl"></i>
                    <p class="text-sm text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div>
                <div class=" bg-[#7a7a7a] py-12 px-12 gap-y-24 flex flex-col">
                    <i class="fal fa-tree-palm text-white text-2xl"></i>
                    <p class="text-sm text-white leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div>
                <div class=" bg-[#EDBC0D] py-12 px-12 gap-y-24 flex flex-col">
                    <i class="fal fa-bolt text-black text-2xl"></i>
                    <p class="text-sm text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div>
                <!-- <div class=" bg-[#676767] py-12 px-12 gap-y-24 flex flex-col">
                    <i class="fal fa-alarm-clock text-white text-2xl"></i>
                    <p class="text-sm text-white leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div> -->
            </div>
            <div class="block lg:hidden">
                <div id="package_slider" class="h-fit">
                    <div>
                        <div class=" bg-[#7D0103] py-12 px-6 gap-y-24 flex flex-col h-[370px]">
                            <i class="fal fa-sign-out-alt text-white text-2xl"></i>
                            <p class="text-sm text-white leading-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididu
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class=" bg-[#D9D9D9] py-12 px-6 gap-y-24 flex flex-col h-[370px]">
                            <i class="fal fa-truck-container text-black text-2xl"></i>
                            <p class="text-sm text-black leading-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class=" bg-[#7a7a7a] py-12 px-6 gap-y-24 flex flex-col h-[370px]">
                            <i class="fal fa-tree-palm text-white text-2xl"></i>
                            <p class="text-sm text-white leading-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class=" bg-[#EDBC0D] py-12 px-6 gap-y-24 flex flex-col h-[370px]">
                            <i class="fal fa-bolt text-black text-2xl"></i>
                            <p class="text-sm text-black leading-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            </p>
                        </div>
                    </div>
                    <!-- <div class=" bg-[#676767] py-12 px-12 gap-y-24 flex flex-col">
                        <i class="fal fa-alarm-clock text-white text-2xl"></i>
                        <p class="text-sm text-white leading-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div> -->
                </div>
            </div>
        </section>


        <section class="mb-12 lg:mb-24 animation-five">
            <p class=" w-full text-center text-lg lg:text-4xl text-black mb-4">Our Happy Clients</p>
            <div class=" flex justify-center gap-x-12">
                <img src="{{ asset('img/image 1.png') }}" class=" w-10 lg:w-40 h-10 lg:h-40" alt="">
                <img src="{{ asset('img/image 2.png') }}" class=" w-10 lg:w-40 h-10 lg:h-40" alt="">
                <!-- <img src="{{ asset('img/image 3.png') }}" class=" w-10 lg:w-40 h-10 lg:h-40" alt=""> -->
                <img src="{{ asset('img/image 4.png') }}" class=" w-10 lg:w-40 h-10 lg:h-40" alt="">
                <img src="{{ asset('img/image 5.png') }}" class=" w-10 lg:w-40 h-10 lg:h-40" alt="">
            </div>
        </section>
        
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);


        gsap.to('.animation-one', {
            scrollTrigger: {
                trigger: '.animation-one',
                start: 'top 80%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.animation-two', {
            scrollTrigger: {
                trigger: '.animation-two',
                start: 'top 90%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.animation-three', {
            scrollTrigger: {
                trigger: '.animation-three',
                start: 'top 110%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none reverse', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        // gsap.to('.animation-four', {
        //     scrollTrigger: {
        //         trigger: '.animation-four',
        //         start: 'top 110%',
        //         end: 'bottom center',
        //         toggleActions: 'play none none reverse',
        //     },
        //     opacity: 1,
        //     y: 0,
        //     duration: 1,
        //     ease: 'power2.out',
        // });

        gsap.to('.animation-five', {
            scrollTrigger: {
                trigger: '.animation-five',
                start: 'top 110%', // Start animation when hero section is in the center
                end: 'bottom center', // End animation when hero section leaves the center
                toggleActions: 'play none none none', // Play animation on enter, reverse on leave
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        $('#customer_slider').slick({
            infinite: true,
            arrows:true,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('#portfolio_slider').slick({
            infinite: true,
            arrows:true,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear'

        });
        $('#package_slider').slick({
            infinite: true,
            arrows:false,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>

@endsection
