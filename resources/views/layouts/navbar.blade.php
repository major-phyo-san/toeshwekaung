<div class=" fixed top-0 w-full z-[80] text-white" id="navbar">
    <div class="w-11/12 lg:!w-10/12 mx-auto flex justify-between py-2" style="width:92%">
        <div class="flex self-center">
            <!-- <img src="{{ asset('images/mtw_logo.JPG') }}" class="w-6 h-6 my-auto" alt=""> -->
        </div>
        <div class="flex gap-x-12">
            <div class="">
                <ul class="flex gap-x-0 lg:!gap-x-4">
                    <li class="py-4 px-2 lg:!px-4 text-[10px] lg:!text-sm active-navbar font-semibold">
                        <a href="/">Home</a>    
                    </li>
                    <li class="py-4 px-2 lg:!px-4 text-[10px] lg:!text-sm">
                        <!-- <a href="#plan_section"> Plan</a> -->
                        <button id="plan_scroll" class="plan_scroll">
                            Plan
                        </button>    
                    </li>
                    <li class="py-4 px-2 lg:!px-4 text-[10px] lg:!text-sm">
                        <!-- <a href="#service_section"> Service</a> -->
                        <button id="service_scroll" class="service_scroll">
                            Service 
                        </button>    
                    </li>
                    <li class="py-4 pl-2 lg:!pl-4 pr-0 lg:!pr-0 text-[10px] lg:!text-sm">
                        <!-- <a href="#contact_section"> Contact</a> -->
                        <button id="contact_scroll" class="contact_scroll">
                            Contact
                        </button>    
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $("#navbar").addClass("scrolled");
                $("#navbar").removeClass("text-white");
            } else {
                $("#navbar").removeClass("scrolled");
                $("#navbar").addClass("text-white");
            }
        });


    })
    
    
</script>