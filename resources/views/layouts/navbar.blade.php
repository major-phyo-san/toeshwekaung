<div class=" fixed top-0 w-full z-[80] navbar" id="navbar">
    <div class="w-11/12 lg:!w-10/12 mx-auto flex justify-between py-2 items-center" style="width:92%">
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
                    <a href="/service" class=" @yield('service') ">
                            Services
                    </a>
                </li>
                <li>
                    <a href="/project" class=" @yield('project') ">
                            Portfolio
                    </a>
                </li>
                <li>
                    <a href="/team" class=" @yield('team') ">
                            Team
                    </a>
                </li>
                <li>
                    <a href="/testimonials" class=" @yield('testimonials') ">
                            Testimonials
                    </a>
                </li>
                <li>
                    <a href="/contact" class=" @yield('contacts') ">
                            Contacts
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
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