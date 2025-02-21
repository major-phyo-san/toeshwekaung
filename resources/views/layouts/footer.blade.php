<footer class="bg-[#7D0103] text-white overflow-hidden animation-footer" id="contact_section">
        <div class=" w-10/12 mx-auto py-10 grid grid-cols-12 gap-x-0 lg:gap-x-8 gap-y-8 text-sm">
            <aside class="col-span-12 lg:col-span-4 xl:col-span-4 ">
                <p class="footer-list-title mb-8">
                    <img class="w-40 mx-auto lg:mx-0" src="{{ asset('img/logo.png') }}" alt="">
                </p>
                <p class="text-[#EDBC0E]">
                    22nd & 87th Corner
                    Aung Myae Thar San Township
                    Mandalay
                </p>
            </aside>
            <nav class="col-span-6 lg:col-span-2 xl:col-span-2 text-[#EDBC0E]">
                <h6 class="font-semibold text-lg mb-3">Information</h6>
                <a class="link link-hover block mb-2">Team</a>
                <a class="link link-hover block mb-2">Projects</a>
                <a class="link link-hover block mb-2">About Us</a>
            </nav>
            <nav class="col-span-6 lg:col-span-3 xl:col-span-3 block text-[#EDBC0E]">
                <h6 class="font-semibold text-lg mb-3">Find Us on Social Media</h6>
                <ul class="flex flex-col gap-y-2">
                    <li>
                        <a class="link link-hover mb-2">Facebook</a>
                    </li>
                    <li>
                        <a class="link link-hover mb-2">Twitter</a>
                    </li>
                    <li>
                        <a class="link link-hover mb-2">Instagram</a>
                    </li>
                    <li>
                        <a class="link link-hover mb-2">Telegram</a>
                    </li>
                </ul>
            </nav>
            <nav class="col-span-12 lg:col-span-3 xl:col-span-3">
                <h6 class="font-semibold text-lg mb-3 text-[#EDBC0E]">Find Us on Social Media</h6>
                <div class=" grid grid-cols-2 gap-x-4 gap-y-4">
                    <img src="{{ asset('img/three.png') }}" class=" aspect-[16/8]" alt="">
                    <img src="{{ asset('img/four.png') }}" class=" aspect-[16/8]" alt="">
                    <img src="{{ asset('img/five.png') }}" class=" aspect-[16/8]" alt="">
                    <img src="{{ asset('img/six.png') }}" class=" aspect-[16/8]" alt="">
                </div>
            </nav>
        </div>
    </footer>

    <script>
        gsap.registerPlugin(ScrollTrigger);


        gsap.to('.animation-footer', {
            scrollTrigger: {
                trigger: '.animation-footer',
                start: 'top 110%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
    </script>