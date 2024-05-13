@include('components.header')



<section id="content">
    <div class="content-wrap py-0">

        <!-- 1. Section
        ============================================= -->
        <div class="section bg-transparent my-0 py-0 mt-5">
            <div class="container">

                <div class="clear"></div>

                <div class="text-center">
                    <h2 class="display-4 fw-normal">How <span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>it works</span></span></h2>
                    <h4 class="fw-lighter">A quick, step-by-step guide to using the platform for both investors and entrepreneurs.</h4>
                </div>

                <!-- 1 -->
                <div class="row align-items-md-center">
                    <!-- Image -->
                    <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch" style="background: url('{{asset('img/help/1.png')}}') no-repeat center center; background-size: contain;">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 p-5 p-lg-6">
                        <h3 class="h3 bottommargin fw-medium px-lg-5">1. Register</h3>
                        <p class="m-0 px-lg-5">Complete your profile and tell us what interests you. It's free to join the over 339,794 angel investors already investing through our network.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- 2 -->
                <div class="row flex-md-row-reverse align-items-md-center">
                    <!-- Image -->
                    <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch" style="background: url('{{asset('img/help/2.png')}}') no-repeat center center; background-size: contain;">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 p-5 p-lg-6">
                        <h3 class="h3 bottommargin fw-medium px-lg-5">2. Browse and Search</h3>
                        <p class="m-0 px-lg-5">Filter by location, industry and investment size to find the right deal for you. We have thousands of opportunities so you will always find great deal flow.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- 3 -->
                <div class="row align-items-md-center">
                    <!-- Image -->
                    <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch" style="background: url('{{asset('img/help/3.png')}}') no-repeat center center; background-size: contain;">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 p-5 p-lg-6">
                        <h3 class="h3 bottommargin fw-medium px-lg-5">3. Connect with Entrepreneurs</h3>
                        <p class="m-0 px-lg-5">When you like a pitch, you can message the entrepreneur to ask questions, arrange calls and fix meetings.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- 4 -->
                <div class="row flex-md-row-reverse align-items-md-center">
                    <!-- Image -->
                    <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch" style="background: url('{{asset('img/help/4.png')}}') no-repeat center center; background-size: contain;">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 p-5 p-lg-6">
                        <h3 class="h3 bottommargin fw-medium px-lg-5">4. Manage your Portfolio</h3>
                        <p class="m-0 px-lg-5">As discussions progress, set the status and keep track of your investment decisions through your private dashboard.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- 5 -->
                <div class="row align-items-md-center">
                    <!-- Image -->
                    <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch" style="background: url('{{asset('img/help/5.png')}}') no-repeat center center; background-size: contain;">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 p-5 p-lg-6">
                        <h3 class="h3 bottommargin fw-medium px-lg-5">5. Invest</h3>
                        <p class="m-0 px-lg-5">When you're satisfied with your due diligence, you can finalize terms and invest directly with the entrepreneur.</p>
                    </div>
                </div>
                @guest
                <div class="my-2">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-md col-12"><b>GET STARTED</b></a>
                </div>
                @endguest

            </div>
        </div> <!-- Section End -->

    </div>
</section><!-- #content end -->



@include('components.footer')
