@extends('layouts.main')

@section('page_title', 'Team')
@section('team', 'active')
@section('team-sidebar', 'sidebar-active')

@section('content')
    <div>
        <section class="mb-32"> 
            <div class="parallax-container relative">
                <div class="absolute bottom-24 lg:bottom-[22%] z-30 w-10/12 lg:w-1/2">
                    <p class="text-white text-3xl lg:text-6xl mb-6">Team</p>
                    <p class="text-sm lg:text-xl text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit et magni nihil recusandae. Molestiae amet animi fugit adipisci, ad voluptas ex! Possimus velit corporis temporibus doloribus doloremque rerum inventore culpa.</p>
                </div>
                
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#12101073]"></div>
            </div>
        </section>
        <section class="mb-16">
            <div class=" grid grid-cols-1 lg:grid-cols-3 gap-x-12 gap-y-12 w-10/12 mx-auto ">
                <div class="text-center team-one">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-two">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-three">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-four">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-five">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-six">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <!-- <div class="text-center team-seven">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-eight">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div>
                <div class="text-center team-nine">
                    <img src="{{ asset('img/two.png') }}" class=" aspect-[3/4] w-full" alt="">
                    <div class="p-6">
                        <p class="text-black text-2xl mb-1">Kaung Saw Win</p>
                        <p class="text-3xl text-[#EDBC0E] mb-4"><Cc:noie>CEO</Cc:noie></p>
                        <p class="text-black leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                        </p>
                    </div>
                </div> -->
            </div>
        </section>
    </div>
    <script>
        gsap.registerPlugin(ScrollTrigger);


        gsap.to('.team-one', {
            scrollTrigger: {
                trigger: '.team-one',
                start: 'top 120%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-two', {
            scrollTrigger: {
                trigger: '.team-two',
                start: 'top 120%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-three', {
            scrollTrigger: {
                trigger: '.team-three',
                start: 'top 120%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.team-four', {
            scrollTrigger: {
                trigger: '.team-four',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-five', {
            scrollTrigger: {
                trigger: '.team-five',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-six', {
            scrollTrigger: {
                trigger: '.team-five',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-seven', {
            scrollTrigger: {
                trigger: '.team-five',
                start: 'top 70%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-eight', {
            scrollTrigger: {
                trigger: '.team-five',
                start: 'top 70%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.team-nine', {
            scrollTrigger: {
                trigger: '.team-five',
                start: 'top 70%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
    </script>
@endsection