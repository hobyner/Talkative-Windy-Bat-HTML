@include('components.header')



<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Portfolio Single - Image</h1>
        <div id="portfolio-navigation">
            <a href="#"><i class="icon-angle-left"></i></a>
            <a href="{{route('landing')}}"><i class="icon-home"></i></a>
            <a href="#"><i class="icon-angle-right"></i></a>
        </div>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-50">
                <!-- Portfolio Single Image
                ============================================= -->
                <div class="col-12 portfolio-single-image">
                    <a href="#"><img src="{{asset('img/car.jpg')}}" alt="Image"></a>
                </div><!-- .portfolio-single-image end -->

                <!-- Portfolio Single Content
                ============================================= -->
                <div class="col-md-8 portfolio-single-content">

                    <!-- Portfolio Single - Description
                    ============================================= -->
                    <div class="fancy-title title-border">
                        <h2>Project Info:</h2>
                    </div>

                    <div class="row col-mb-30">
                        <div class="col-md-6">
                            <p>{{$pitch->title}}</p>
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, labore deserunt ex cupiditate est blanditiis dignissimos nesciunt doloremque laboriosam ullam necessitatibus voluptatum tempora itaque quia porro voluptates quo excepturi veritatis!</p>--}}
                        </div>

                        <div class="col-md-6">
                            <p>{{$pitch->about}}</p>
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, sed.</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta explicabo sunt aliquam officiis autem.</p>--}}
                        </div>
                    </div>
                    <!-- Portfolio Single - Description End -->

                </div><!-- .portfolio-single-content end -->

                <div class="col-md-4">

                    <!-- Portfolio Single - Meta
                    ============================================= -->
                    <div class="card event-meta">
                        <div class="card-body">
                            <ul class="portfolio-meta mb-0">
                                <li><span><i class="icon-user"></i>Created by:</span> {{$pitch->pitcher}}</li>
                                <li><span><i class="icon-calendar3"></i>Target:</span> ${{$pitch->target}}</li>
                                <li><span><i class="icon-lightbulb"></i>Minimum Investment:</span> ${{$pitch->minimum}}</li>
{{--                                <li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <!-- Portfolio Single - Meta End -->

                    <!-- Portfolio Single - Share
                    ============================================= -->
{{--                    <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">--}}
{{--                        <span>Interested ?:</span>--}}
{{--                            <a href="{{route('login')}}">--}}
{{--                                <button type="button" class="btn btn-outline-success btn-lg"><b>INTERESTED ? CLICK HERE </b></button>--}}
{{--                            </a>--}}
{{--                    </div>--}}
                    @if ($pitch->pitcher != auth()->user()->name)
                        <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                            {{-- <span>Interested ?:</span> --}}
                            <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-outline-success btn-lg"><b>INTERESTED ? CLICK HERE</b></button>
                            </a>
                        </div>
                    @endif

                    <!-- Portfolio Single - Share End -->

                </div>
            </div>

{{--            <div class="divider divider-center"><i class="icon-circle"></i></div>--}}


        </div>
    </div>
</section><!-- #content end -->



@include('components.footer')
