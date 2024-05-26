@include('components.header')



<section id="slider" class="slider-element slider-parallax include-header min-vh-100" style="background: url('{{asset('img/slider/1.jpg')}}') center center; background-size: cover;">
    <div class="slider-inner">

        <div class="vertical-middle slider-element-fade">
            <div class="container text-center">

                <div class="heading-block border-bottom-0 mb-0">
                    <h2>Welcome to Angel InvestHub
                        @guest
                        <div class="mx-3 me-lg-0">
                            <a href="{{route('login')}}">
                                <button type="button" class="btn btn-success btn-md"><b>GET STARTED</b></button>
                            </a>
                        </div>
                        @endguest
                    </h2>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-0">

        <!-- 1. Section Featured Investment Opportunities
        ============================================= -->
        <div class="section bg-color-light mt-0 mb-0">
            <div class="container text-center mw-md topmargin bottommargin">

                <h2 class="display-4 fw-normal"><span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Looking</span></span> For Investment Opportunities ?</h2>
                <h4 class="fw-lighter">Browse our latest exciting startup pitches and connect with entrepreneurs to discuss further.</h4>

                <div class="clear"></div>

                <div class="row pricing col-mb-30 mb-4">
                    <div class="col-md-6 col-lg-4">

                        <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                            <div class="pricing-title">
                                <span>South East United States</span>
                                <h3>Artificial Hair Implants</h3>
                            </div>
                            <div>
                                <h3>&dollar;5,000 minimum investment</h3>
                                <h3>&dollar;5,000,000 total required</h3>
                            </div>
                            <!--									<div class="pricing-price">-->
                            <!--										<span class="price-unit">&dollar;5000min</span><h3>5,000</h3><span class="price-tenure">monthly</span>-->
                            <!--									</div>-->

                            <div class="pricing-features">
                                <h4>I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness,
                                    female pattern baldness, alopecia, beard thickening, eyebrows, etc.
                                    It is a very minor surgical procedure involving a needle poke and place of hair.</h4>
                                <ul class="iconlist">
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implant Device has been manufactured and tested</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants FDA application is currently being prepared</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants can thicken you beard, head of hair, etc.</li>
                                    <!--											<li><i class="icon-check text-smaller"></i> <strong>24/7</strong> Support</li>-->
                                </ul>
                            </div>
                            <!--									<div>-->
                            <!--										<h3>&dollar;5,000 minimum investment</h3>-->
                            <!--										<h3>&dollar;5,000,000 total required</h3>-->
                            <!--									</div>-->
                            <div class="pricing-action">
                                <a href="{{route('invest')}}" class="btn btn-secondary btn-md">Find out more</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4">

                        <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                            <div class="pricing-title">
                                <span>South East United States</span>
                                <h3>Artificial Hair Implants</h3>
                            </div>
                            <div>
                                <h3>&dollar;5,000 minimum investment</h3>
                                <h3>&dollar;5,000,000 total required</h3>
                            </div>
                            <!--									<div class="pricing-price">-->
                            <!--										<span class="price-unit">&dollar;5000min</span><h3>5,000</h3><span class="price-tenure">monthly</span>-->
                            <!--									</div>-->

                            <div class="pricing-features">
                                <h4>I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness,
                                    female pattern baldness, alopecia, beard thickening, eyebrows, etc.
                                    It is a very minor surgical procedure involving a needle poke and place of hair.</h4>
                                <ul class="iconlist">
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implant Device has been manufactured and tested</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants FDA application is currently being prepared</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants can thicken you beard, head of hair, etc.</li>
                                    <!--											<li><i class="icon-check text-smaller"></i> <strong>24/7</strong> Support</li>-->
                                </ul>
                            </div>
                            <!--									<div>-->
                            <!--										<h3>&dollar;5,000 minimum investment</h3>-->
                            <!--										<h3>&dollar;5,000,000 total required</h3>-->
                            <!--									</div>-->
                            <div class="pricing-action">
                                <a href="{{route('invest')}}" class="btn btn-secondary btn-md">Find out more</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4">

                        <div class="pricing-box pricing-simple px-5 py-4 bg-light text-center text-md-start">
                            <div class="pricing-title">
                                <span>South East United States</span>
                                <h3>Artificial Hair Implants</h3>
                            </div>
                            <div>
                                <h3>&dollar;5,000 minimum investment</h3>
                                <h3>&dollar;5,000,000 total required</h3>
                            </div>
                            <!--									<div class="pricing-price">-->
                            <!--										<span class="price-unit">&dollar;5000min</span><h3>5,000</h3><span class="price-tenure">monthly</span>-->
                            <!--									</div>-->

                            <div class="pricing-features">
                                <h4>I have a patent for an Artificial Hair Implant Device that can be used for male pattern baldness,
                                    female pattern baldness, alopecia, beard thickening, eyebrows, etc.
                                    It is a very minor surgical procedure involving a needle poke and place of hair.</h4>
                                <ul class="iconlist">
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implant Device has been manufactured and tested</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants FDA application is currently being prepared</li>
                                    <li><i class="icon-check text-smaller"></i>Artificial Hair Implants can thicken you beard, head of hair, etc.</li>
                                    <!--											<li><i class="icon-check text-smaller"></i> <strong>24/7</strong> Support</li>-->
                                </ul>
                            </div>
                            <!--									<div>-->
                            <!--										<h3>&dollar;5,000 minimum investment</h3>-->
                            <!--										<h3>&dollar;5,000,000 total required</h3>-->
                            <!--									</div>-->
                            <div class="pricing-action">
                                <a href="{{route('invest')}}" class="btn btn-secondary btn-md">Find out more</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- Section End -->

        <!-- 2. Section Shop by Category
				============================================= -->
        <div class="container-fluid">

            <!-- Heading Title -->
            <div class="text-center mt-6 mb-5">
                <h2 class="h1 fw-normal mb-4">Our <span  data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Industries</span></span></h2>
            </div>

            <!-- Categories -->
            <div class="row item-categories gutter-20">
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/technology.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Technology</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('invest')}}" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/engineering.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Engineering</h5>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{route('invest')}}" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/education.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Education</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('invest')}}" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/finance.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Finance</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('invest')}}" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/fashion.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Fashion</h5>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('invest')}}" class="d-block h-op-09 op-ts" style="background: url('{{asset("img/medicine.jpg")}}') no-repeat center center; background-size: cover; height: 340px;">
                        <h5 class="text-uppercase ls1 bg-white mb-0">Medicine</h5>
                    </a>
                </div>
            </div>

        </div><!-- Section End -->

        <!-- 2. Section Shop by Category
        ============================================= -->
        <div class="section bg-color-light mt-0 mb-0 ">
            <div class="container text-center mw-md topmargin bottommargin">

                <h2 class="display-4 fw-normal"><span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Featured</span></span> In</h2>
                <h4 class="fw-lighter">Angel Investment Network is a platform that connects entrepreneurs with angel investors looking to invest in promising startups. Whether you are a startup seeking funding or an investor looking for exciting opportunities, we have the resources to help you succeed.</h4>

                <div class="clear"></div>

                <!-- Brand Logo Area -->
                <div class="row justify-content-center">

                    <div class="col-lg-12">
                        <div class="row justify-content-center align-items-center text-center mx-auto">
                            <div class="col center op-05"><img src="{{asset('img/svg/guardian.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/forbes.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/nbc.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/wsj.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/ft.svg')}}" alt="" width="100"></div>
                        </div>
                        <div class="row justify-content-center align-items-center mx-auto text-center mt-2">
                            <div class="col center op-05"><img src="{{asset('img/svg/bbc.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/wired.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/bloomberg.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/fortune.svg')}}" alt="" width="100"></div>
                            <div class="col center op-05"><img src="{{asset('img/svg/techcrunch.svg')}}" alt="" width="100"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Section End -->

        <!-- 3. Section new Arrivals
        ============================================= -->
        <div class="section custom-bg mt-0 mb-0" style="--custom-bg: #F3F3ED; padding: 100px 0;">
            <div class="container">

                <div class="text-center">
                    <h2 class="display-4 fw-normal"><span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Join</span></span> our growing community of entrepreneurs and investors</h2>
                    <h4 class="fw-lighter">We help investors and entrepreneurs build lasting and profitable relationships to build better businesses and brighter futures.
                        Take your startup to the next level with our platform's key features.</h4>
                </div>

                <div class="clear"></div>

                <div class="row col-mb-50 mb-0">

                    <div class="col-lg-6">

                        <div class="team team-list row align-items-center">
                            <div class="team-image col-sm-6">
                                <img src="{{asset('img/team/investor.jpg')}}" alt="John Doe">
                            </div>
                            <div class="team-desc col-sm-6">
                                <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                                <div class="team-content">
                                    <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-secondary btn-md">More info</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="team team-list row align-items-center">
                            <div class="team-image col-sm-6">
                                <img src="{{asset('img/team/investor2.jpg')}}" alt="Nix Maxwell">
                            </div>
                            <div class="team-desc col-sm-6">
                                <div class="team-title"><h4>Nix Maxwell</h4><span>Accountant</span></div>
                                <div class="team-content">
                                    <p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-secondary btn-md">More info</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div><!-- Section End -->

        <!-- 4. Section Explore your Home & Office
        ============================================= -->
        <div class="container clearfix mb-0">

            <div class="fslider testimonial testimonial-full bottommargin" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('img/testimonial/1.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Unbelievable returns! My investments soared sky-high. Couldn't be happier with this platform!</p>
                                <div class="testi-meta">
                                    Steve Reid
                                    <span>Crypto Expert.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('img/testimonial/2.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Secure, reliable, and profitable. Best decision ever made. Thank you for transforming my finances.</p>
                                <div class="testi-meta">
                                    Martha Stone
                                    <span>Climate Engineer.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('img/testimonial/3.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Unbelievable returns! My investments soared sky-high. Couldn't be happier with this platform!</p>
                                <div class="testi-meta">
                                    Joe Lopez
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Section End -->

        <!-- 5. Section
        ============================================= -->
        <!-- Section End -->

        <!-- 6. Section
        ============================================= -->
        <!-- Section End -->

    </div>
</section><!-- #content end -->



@include('components.footer')
