<header class="sticky-top shadow bg-primary" data-aos="fade-down" data-aos-duration="1000">
    <nav class="navbar navbar-light navbar-expand-lg px-1 d-flex justify-content-start container py-0">
        <button class="navbar-toggler border-0 p-0" type="button" onclick="$('.sidenav').toggleClass('stackleft');">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto mx-lg-3 mx-md-3" href="">
            <img src="{{ asset('images/STUDEE_TOP_final_logo.png') }}" class="img-fluid logo" alt="" />
        </a>

        <div class="sidenav pt-0 px-0 pb-0 w-75 stackleft">
            <div class="d-flex border-bottom">
                <img src="{{ asset('images/STUDEE_TOP_final_logo.png') }}" class="img-fluid mx-3 py-1 logo" alt="">
                <span class="h3 px-3 closebtn my-auto ml-auto" onclick="$('.sidenav').toggleClass('stackleft');">&times;</span>
            </div>
            <div class="d-flex flex-column text-left px-0 mt-3">
            </div>
        </div>

        <div class="topHeader-right-sec d-none d-md-flex ml-auto">
            @guest
                <div class="ml-auto mr-2">
                    <a class="btn btn-md my-auto studeeBtn pink border-0 d-inline-block font-weight-bold text-white btn-primary rounded-pill" href="">Sign In</a>
                    <a class="btn btn-md my-auto studeeBtn pink border-0 d-inline-block font-weight-bold text-white btn-highlight rounded-pill" href="">Join For Free</a>
                </div>
            @endguest
        </div>
    </nav>    
</header>
