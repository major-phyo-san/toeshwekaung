@extends('layouts.main')

@section('page_title', 'Project')
@section('project', 'active')
@section('project-sidebar', 'sidebar-active')

@section('content')
    <div>
        <section class="mb-12 lg:mb-32"> 
            <div class="parallax-container relative">
                <div class="absolute bottom-24 lg:bottom-[22%] z-30 w-10/12 lg:w-1/2">
                    <p class="text-white text-3xl lg:text-6xl mb-6">Project</p>
                    <p class="text-sm lg:text-xl text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit et magni nihil recusandae. Molestiae amet animi fugit adipisci, ad voluptas ex! Possimus velit corporis temporibus doloribus doloremque rerum inventore culpa.</p>
                </div>
                
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#12101073]"></div>
            </div>
        </section>
        <section class="mb-16">
            
            <!-- <div class=" grid grid-cols-3    gap-x-12 gap-y-12 w-10/12 mx-auto ">
                @for ($i = 0; $i < 1; $i++)

                @endfor
            </div> -->
            
            <div class="w-10/12 mx-auto">
                
                <div class="mb-12 lg:mb-40 group project-one">
                    <div class="">
                        <p class=" text-2xl lg:text-4xl text-black text-left lg:text-center mb-4 lg:mb-8">CO CO Store</p>
                    </div>
                    <div class="flex gap-x-8 flex-col lg:flex-row lg:group-even:flex-row-reverse">
                        <div class="w-full lg:w-[60%] basis-full lg:basis-[60%] flex-shrink-0 flex-grow-0">
                            <img src="{{ asset('img/four.png') }}" class=" aspect-[2/1.2] border lg:border-0 border-black" alt="">
                        </div>
                        <div class="w-full lg:w-[40%] basis-full lg:basis-[40%] flex-shrink flex-grow-0 grid lg:grid-rows-2">
                            <div class="grid grid-cols-3 gap-x-4 pt-4 mb-6 lg:mb-0">
                                <img src="{{ asset('img/seven.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/one.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/three.png') }}" class="w-full aspect-[4/3]" alt="">
                            </div>
                            <div class="px-2 flex flex-col justify-end group-even:text-right">
                                <p class="text-2xl lg:text-4xl text-black mb-4 lg:mb-12">
                                    3 Story Building
                                </p>
                                <p class="text-black text-sm lg:text-lg pb-8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-12 lg:mb-40 group project-two">
                    <div class="">
                        <p class=" text-2xl lg:text-4xl text-black text-left lg:text-center mb-4 lg:mb-8">CO CO Store</p>
                    </div>
                    <div class="flex gap-x-8 flex-col lg:flex-row lg:group-even:flex-row-reverse">
                        <div class="w-full lg:w-[60%] basis-full lg:basis-[60%] flex-shrink-0 flex-grow-0">
                            <img src="{{ asset('img/four.png') }}" class=" aspect-[2/1.2] border lg:border-0 border-black" alt="">
                        </div>
                        <div class="w-full lg:w-[40%] basis-full lg:basis-[40%] flex-shrink flex-grow-0 grid lg:grid-rows-2">
                            <div class="grid grid-cols-3 gap-x-4 pt-4 mb-6 lg:mb-0">
                                <img src="{{ asset('img/seven.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/one.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/three.png') }}" class="w-full aspect-[4/3]" alt="">
                            </div>
                            <div class="px-2 flex flex-col justify-end group-even:text-right">
                                <p class="text-2xl lg:text-4xl text-black mb-4 lg:mb-12">
                                    3 Story Building
                                </p>
                                <p class="text-black text-sm lg:text-lg pb-8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-12 lg:mb-40 group project-three">
                    <div class="">
                        <p class=" text-2xl lg:text-4xl text-black text-left lg:text-center mb-4 lg:mb-8">CO CO Store</p>
                    </div>
                    <div class="flex gap-x-8 flex-col lg:flex-row lg:group-even:flex-row-reverse">
                        <div class="w-full lg:w-[60%] basis-full lg:basis-[60%] flex-shrink-0 flex-grow-0">
                            <img src="{{ asset('img/four.png') }}" class=" aspect-[2/1.2] border lg:border-0 border-black" alt="">
                        </div>
                        <div class="w-full lg:w-[40%] basis-full lg:basis-[40%] flex-shrink flex-grow-0 grid lg:grid-rows-2">
                            <div class="grid grid-cols-3 gap-x-4 pt-4 mb-6 lg:mb-0">
                                <img src="{{ asset('img/seven.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/one.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/three.png') }}" class="w-full aspect-[4/3]" alt="">
                            </div>
                            <div class="px-2 flex flex-col justify-end group-even:text-right">
                                <p class="text-2xl lg:text-4xl text-black mb-4 lg:mb-12">
                                    3 Story Building
                                </p>
                                <p class="text-black text-sm lg:text-lg pb-8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-12 lg:mb-40 group project-four">
                    <div class="">
                        <p class=" text-2xl lg:text-4xl text-black text-left lg:text-center mb-4 lg:mb-8">CO CO Store</p>
                    </div>
                    <div class="flex gap-x-8 flex-col lg:flex-row lg:group-even:flex-row-reverse">
                        <div class="w-full lg:w-[60%] basis-full lg:basis-[60%] flex-shrink-0 flex-grow-0">
                            <img src="{{ asset('img/four.png') }}" class=" aspect-[2/1.2] border lg:border-0 border-black" alt="">
                        </div>
                        <div class="w-full lg:w-[40%] basis-full lg:basis-[40%] flex-shrink flex-grow-0 grid lg:grid-rows-2">
                            <div class="grid grid-cols-3 gap-x-4 pt-4 mb-6 lg:mb-0">
                                <img src="{{ asset('img/seven.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/one.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/three.png') }}" class="w-full aspect-[4/3]" alt="">
                            </div>
                            <div class="px-2 flex flex-col justify-end group-even:text-right">
                                <p class="text-2xl lg:text-4xl text-black mb-4 lg:mb-12">
                                    3 Story Building
                                </p>
                                <p class="text-black text-sm lg:text-lg pb-8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-12 lg:mb-40 group project-five">
                    <div class="">
                        <p class=" text-2xl lg:text-4xl text-black text-left lg:text-center mb-4 lg:mb-8">CO CO Store</p>
                    </div>
                    <div class="flex gap-x-8 flex-col lg:flex-row lg:group-even:flex-row-reverse">
                        <div class="w-full lg:w-[60%] basis-full lg:basis-[60%] flex-shrink-0 flex-grow-0">
                            <img src="{{ asset('img/four.png') }}" class=" aspect-[2/1.2] border lg:border-0 border-black" alt="">
                        </div>
                        <div class="w-full lg:w-[40%] basis-full lg:basis-[40%] flex-shrink flex-grow-0 grid lg:grid-rows-2">
                            <div class="grid grid-cols-3 gap-x-4 pt-4 mb-6 lg:mb-0">
                                <img src="{{ asset('img/seven.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/one.png') }}" class="w-full aspect-[4/3]" alt="">
                                <img src="{{ asset('img/three.png') }}" class="w-full aspect-[4/3]" alt="">
                            </div>
                            <div class="px-2 flex flex-col justify-end group-even:text-right">
                                <p class="text-2xl lg:text-4xl text-black mb-4 lg:mb-12">
                                    3 Story Building
                                </p>
                                <p class="text-black text-sm lg:text-lg pb-8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
    <script>
        gsap.registerPlugin(ScrollTrigger);


        gsap.to('.project-one', {
            scrollTrigger: {
                trigger: '.project-one',
                start: 'top 120%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.project-two', {
            scrollTrigger: {
                trigger: '.project-two',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.project-three', {
            scrollTrigger: {
                trigger: '.project-three',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });

        gsap.to('.project-four', {
            scrollTrigger: {
                trigger: '.project-four',
                start: 'top 80%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        gsap.to('.project-five', {
            scrollTrigger: {
                trigger: '.project-five',
                start: 'top 80%',
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