<div class=" fixed top-0 w-full z-[80] navbar hidden lg:block px-0" id="navbar">
    <div class="w-11/12 lg:!w-10/12 mx-auto flex justify-between py-1.5 items-center">
        <div class="lg:flex self-center hidden">
            <img src="{{ asset('img/logo.png') }}" class="w-20 my-auto" alt="">
        </div>
        <div class="">
            <ul class="flex gap-x-2 lg:gap-x-6 navbar-ul text-black">
                <li>
                    <a href="/home" class=" @yield('home') ">
                            Home
                    </a>
                </li>
                <li class="hidden lg:block">
                    <a href="#" class=" @yield('service') service_scroll">
                            Services
                    </a>
                </li>
                <li class="hidden lg:block">
                    <a href="/project" class=" @yield('project') ">
                        Project
                    </a>
                </li>
                <li>
                    <a href="#" class=" @yield('project') portfolio_scroll">
                            Portfolio
                    </a>
                </li>
                <li>
                    <a href="/team" class=" @yield('team') ">
                            Team
                    </a>
                </li>
                <li>
                    <a href="#" class=" @yield('testimonials') testimonial_scroll">
                            Testimonials
                    </a>
                </li>
                <li>
                    <a href="#" class=" @yield('contacts') contact_scroll">
                            Contacts
                    </a>
                </li>
                <li>
                    <select id="language-selector" class="bg-transparent text-gray-600 px-2 py-1 rounded-md focus:outline-none focus:ring-0 focus:shadow-none">
                        
                        <option value="en">English</option>
                        <option value="mm">မြန်မာ</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="grid lg:hidden drawer z-[40] n">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content fixed top-0 left-0 right-0 bg-white shadow flex justify-end">
        <label for="my-drawer" class="py-1 px-4 m-2 block text-black w-fit">
            <i class="fas fa-bars"></i>
        </label>
    </div>
    
    <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white text-black min-h-full w-[40%] min-w-[156px] py-4 px-2">
            <li>
                <a href="/home" class=" @yield('home-sidebar') ">
                    Home
                </a>
            </li>
            <li class="">
                <a href="#" class=" @yield('service-sidebar') service_scroll">
                    Services
                </a>
            </li>
            <li>
                <a href="/project" class=" @yield('project-sidebar') ">
                    Project
                </a>
            </li>
            <li>
                <a href="#" class=" portfolio_scroll">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/team" class=" @yield('team-sidebar') ">
                    Team
                </a>
            </li>
            <li>
                <a href="/testimonials" class=" testimonial_scroll">
                    Testimonials
                </a>
            </li>
            <li>
                <a href="/contact" class=" contact_scroll">
                    Contacts
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.portfolio_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#portfolio_section').offset().top - 150
            }, 800);
        });
        $('.testimonial_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#testimonial_section').offset().top - 100
            }, 800); 
        });
        $('.service_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#service_section').offset().top - 100
            }, 800); 
        });
        $('.contact_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#contact_section').offset().top - 150
            }, 800); 
        });

        if ($(window).scrollTop() > 50) {
            $("#navbar").addClass("scrolled border-b");
            // $("#navbar").removeClass("text-black");
        } else {
            $("#navbar").removeClass("scrolled border-b");
            // $("#navbar").addClass("text-black");
        }
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $("#navbar").addClass("scrolled border-b");
                // $("#navbar").removeClass("text-black");
            } else {
                $("#navbar").removeClass("scrolled border-b");
                // $("#navbar").addClass("text-black");
            }
        });


    })
    
    
</script>