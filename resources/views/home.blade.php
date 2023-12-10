@extends('layout.app')

@section('title', 'Home')

@section('home_nav_active', 'active')

@section('content')
    <div role="main" class="main">

        <div class="p-relative">
            <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-1 p-relative mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['calc(100vh - 305px)','calc(100vh - 305px)','calc(100vh - 305px)','calc(100vh - 305px)','calc(100vh - 305px)']" style="height: calc(100vh - 305px);">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

                        <!-- Carousel Slide 1 -->
                        <div class="owl-item p-relative overflow-hidden">
                            <div class="background-image-wrapper p-absolute d-none d-lg-block w-100 h-100 top-0 right-0 bottom-0" style="background-image: url(Image/slide-dentist-1-1.jpg); background-size: cover; max-width: 50vw;"></div>

                            <div class="background-image-wrapper p-absolute w-100 h-100 top-0 left-0 bottom-0" style="background-image: url(Image/slide-dentist-1-2.jpg); background-size: cover; max-width: 50vw;"></div>

                            <div class="container p-relative z-index-3 h-100">
                                <div class="row align-items-center h-100">
                                    <div class="col-lg-8 col-xl-6 text-center text-md-start">
                                        <h2 class="font-weight-semi-bold text-color-dark text-9 text-md-12 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'minWindowWidth': 0}">Affordable Full-Service Dental Care in LA</h2>
                                        <p class="font-weight-medium text-4-5 line-height-5 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'minWindowWidth': 0}">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum sed euismod dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Slide 2 -->
                        <div class="owl-item p-relative overflow-hidden">
                            <div class="background-image-wrapper p-absolute d-none d-lg-block w-100 h-100 top-0 right-0 bottom-0" style="background-image: url(Image/slide-dentist-2-1.jpg); background-size: cover;"></div>

                            <div class="container p-relative z-index-3 h-100">
                                <div class="row align-items-center justify-content-end h-100">
                                    <div class="col-lg-8 col-xl-6 text-center text-md-start">
                                        <h2 class="font-weight-semi-bold text-color-dark text-9 text-md-12 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'minWindowWidth': 0}">Dental Care in LA Affordable Full-Service</h2>
                                        <p class="font-weight-medium text-4-5 line-height-5 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'minWindowWidth': 0}">Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum sed euismod dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
                    <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
                </div>
            </div>

            <div class="p-absolute custom-el-pos-1 d-none d-xl-block z-index-2">
                <img width="353" height="407" src="{{url('Image/demos/dentist/generic/generic-3.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary'}" />
            </div>

            <div class="p-absolute custom-el-pos-2 rotate-l-65 d-none d-xl-block z-index-2">
                <img width="330" height="346" src="{{url('Image/demos/dentist/generic/generic-4.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
            </div>
        </div>

        <div id="home-intro" class="home-intro bg-primary p-relative z-index-3 m-0">
            <div class="container py-2">
                <div class="row align-items-center text-center text-md-start">
                    <div class="col-lg-9 mb-3 mb-lg-0">
                        <p class="text-color-light text-4-5 font-weight-medium line-height-4 mb-0">
                            <strong>Book Appointment Online</strong> - Need Immediate Confirmation? Call Us at <u>888-123-4567</u>
                        </p>
                    </div>
                    <div class="col-lg-3 text-center text-md-start text-lg-end">
                        <a href="{{route('contact')}}#book" class="btn btn-secondary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col py-4">

                    <div class="featured-boxes featured-boxes-style-9">
                        <div class="row">
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-primary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="Image/demos/dentist/icons/icon-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semi-bold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Convenient Location</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, consec tetur adipiscing el nc viverra erat orcias ac auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-secondary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="Image/demos/dentist/icons/icon-2.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semi-bold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Full-Service</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, con sectetur adipiscing el nc viverra eratorci ac auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-tertiary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="Image/demos/dentist/icons/icon-3.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semi-bold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Top Rated Dentists</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, consec tetur adipiscing el nc viverra eratorciac auctor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="section border-0 bg-color-light m-0 py-5">
            <div class="container py-5 my-2">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 text-center">

                        <svg height="0" width="0">
                            <defs>
                                <clipPath id="svgPath">
                                    <path d="M143.3,391.5C64.74,320.29-11.54,212.43,1.46,109.91,6.81,67.72,35,23.31,77.51,11.57c45.8-12.65,81.56,9.87,127.88,10,51,.11,99.23-34,152.49-16.65C458.61,37.71,412.21,170.19,372,228c-10.63,15.3-44.76,63.1-48.29,40.44-9.23-59.24-26.68-67.61-57.52-75.23-32.68-8.07-80.24,8.61-92.4,39.25-26.47,66.76,31,137.89,64.57,191.19.89,1.42,38.8,48.72,31,50.86-21.12,5.77-69.06-37.36-84.67-48.95C171.14,415.52,157.18,404.08,143.3,391.5Z" style="fill:#000"/>
                                </clipPath>
                            </defs>
                        </svg>

                        <img class="img-fluid" style="clip-path: url(#svgPath); min-height: 480px; max-width: 420px;" src="Image/generic-5.jpg" alt="">

                    </div>
                    <div class="col-lg-6 ps-lg-4 ps-xl-5">
                        <h2 class="d-inline-block line-height-5 text-4 positive-ls-3 font-weight-semibold text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">ABOUT US</h2>
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Welcome To Porto Dentist Downtown Los Angeles</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                        <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                            <div class="col-5">
                                <div class="d-flex">
                                    <span class="text-4 font-weight-bold text-color-dark pt-2 ms-2">
                                        <strong class="d-block font-weight-bold text-10 mb-2">10000+</strong>
                                        Satisfied Patients
                                    </span>
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse. </p>
                            </div>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <a href="{{route('services')}}" class="btn btn-secondary border-0 text-3 font-weight-semi-bold btn-px-5 btn-py-3">Explore Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section border-0 bg-transparent m-0 py-5">
            <div class="container-fluid">
                <div class="row px-4">

                    <div class="owl-carousel owl-theme full-width nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-2 p-relative mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 4}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 40}">
                        <div>
                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                                <span class="thumb-info-wrapper overlay overlay-op-3 overlay-show overflow-hidden">
                                    <img src="Image/service-1.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-title bg-transparent w-100 mw-100 p-0 top-0 p-5">
                                        <span class="anim-hover-inner-translate-bottom-20px transition-2ms d-inline-block">
                                            <span class="thumb-info-inner">
                                                <h4 class="text-color-light text-5 font-weight-bold">Dental Exams</h4>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                        <span class="thumb-info-swap-content-wrapper">
                                            <span class="thumb-info-inner text-start ps-5">
                                                <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="Image/demos/dentist/icons/icon-4.svg" />
                                            </span>
                                            <span class="thumb-info-inner text-2">
                                                <p class="px-5 text-4 text-lg-2 opacity-7 font-weight-medium text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere elit in massa congue congue. Ut ornare fermentum sem, vitae port.</p>
                                                <a href="{{route('service.exams')}}" class="btn btn-primary btn-arrow-effect-1 py-2 px-3 ms-5 mb-3 text-3 text-lg-1 ls-0 border-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div>
                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                                <span class="thumb-info-wrapper overlay overlay-op-3 overlay-show overflow-hidden">
                                    <img src="Image/service-2.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-title bg-transparent w-100 mw-100 p-0 top-0 p-5">
                                        <span class="anim-hover-inner-translate-bottom-20px transition-2ms d-inline-block">
                                            <span class="thumb-info-inner">
                                                <h4 class="text-color-light text-5 font-weight-bold">Dental Cleaning</h4>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                        <span class="thumb-info-swap-content-wrapper">
                                            <span class="thumb-info-inner text-start ps-5">
                                                <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="Image/demos/dentist/icons/icon-5.svg" />
                                            </span>
                                            <span class="thumb-info-inner text-2">
                                                <p class="px-5 text-4 text-lg-2 opacity-7 font-weight-medium text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere elit in massa congue congue. Ut ornare fermentum sem, vitae port.</p>
                                                <a href="{{route('service.cleaning')}}" class="btn btn-primary btn-arrow-effect-1 py-2 px-3 ms-5 mb-3 text-3 text-lg-1 ls-0 border-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div>
                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                                <span class="thumb-info-wrapper overlay overlay-op-3 overlay-show overflow-hidden">
                                    <img src="Image/service-4.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-title bg-transparent w-100 mw-100 p-0 top-0 p-5">
                                        <span class="anim-hover-inner-translate-bottom-20px transition-2ms d-inline-block">
                                            <span class="thumb-info-inner">
                                                <h4 class="text-color-light text-5 font-weight-bold">tooth Extraction</h4>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                        <span class="thumb-info-swap-content-wrapper">
                                            <span class="thumb-info-inner text-start ps-5">
                                                <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="Image/demos/dentist/icons/icon-7.svg" />
                                            </span>
                                            <span class="thumb-info-inner text-2">
                                                <p class="px-5 text-4 text-lg-2 opacity-7 font-weight-medium text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere elit in massa congue congue. Ut ornare fermentum sem, vitae port.</p>
                                                <a href="{{route('service.tooth-extraction')}}" class="btn btn-primary btn-arrow-effect-1 py-2 px-3 ms-5 mb-3 text-3 text-lg-1 ls-0 border-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div>
                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                                <span class="thumb-info-wrapper overlay overlay-op-3 overlay-show overflow-hidden">
                                    <img src="Image/service-3.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-title bg-transparent w-100 mw-100 p-0 top-0 p-5">
                                        <span class="anim-hover-inner-translate-bottom-20px transition-2ms d-inline-block">
                                            <span class="thumb-info-inner">
                                                <h4 class="text-color-light text-5 font-weight-bold">Root Canal</h4>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                        <span class="thumb-info-swap-content-wrapper">
                                            <span class="thumb-info-inner text-start ps-5">
                                                <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="Image/demos/dentist/icons/icon-6.svg" />
                                            </span>
                                            <span class="thumb-info-inner text-2">
                                                <p class="px-5 text-4 text-lg-2 opacity-7 font-weight-medium text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere elit in massa congue congue. Ut ornare fermentum sem, vitae port.</p>
                                                <a href="{{route('service.root-canal')}}" class="btn btn-primary btn-arrow-effect-1 py-2 px-3 ms-5 mb-3 text-3 text-lg-1 ls-0 border-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section border-0 bg-color-light m-0 py-5">
            <div class="container py-5 my-2">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="d-inline-block line-height-5 text-4 positive-ls-3 font-weight-semibold text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">SPECIAL SERVICES</h2>
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Premium Dental Care services for everyone.</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>

                    </div>

                    <div class="col-lg-6 mb-5">
                        <ul class="list list-icons list-icons-lg ms-lg-3 mt-lg-4 pt-lg-2">
                            <li class="text-3-5 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i class="fas fa-check text-color-tertiary"></i> <span class="ps-2 d-block">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo.</span></li>
                            <li class="text-3-5 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><i class="fas fa-check text-color-tertiary"></i> <span class="ps-2 d-block">Elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo.</span></li>
                            <li class="text-3-5 font-weight-medium appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"><i class="fas fa-check text-color-tertiary"></i> <span class="ps-2 d-block">Ras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo.</span></li>
                        </ul>
                    </div>
                </div>

                <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="col">
                        <hr>
                    </div>
                </div>

                <div class="row align-items-center text-center text-md-start pt-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="col-lg-9 mb-3 mb-lg-0">
                        <p class="text-color-primary text-4-5 font-weight-medium line-height-4 mb-0">
                            <strong>Book Appointment Online</strong> - Need Immediate Confirmation? Call Us at <u>888-123-4567</u>
                        </p>
                    </div>
                    <div class="col-lg-3 text-center text-md-start text-lg-end">
                        <a href="{{route('contact')}}#book" class="btn btn-secondary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Book Appointment</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section border-0 bg-color-transparent m-0 py-5">
            <div class="container py-5 my-2">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="d-inline-block line-height-5 text-4 positive-ls-3 font-weight-semibold text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">PORTO DENTISTS</h2>
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Meet Our Dentists</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>

                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="owl-carousel owl-theme nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-3 p-relative mb-0 mt-2" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 40}">
                                @foreach ($doctors as $doctor)
                                    <div>
                                        <div class="card border-0">
                                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                                                <span class="thumb-info-wrapper overlay overflow-hidden">
                                                    <img src="{{url($doctor->img_path)}}" class="img-fluid" alt="Doctor {{$doctor->name}}'s' image">
                                                    <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                                        <span class="thumb-info-swap-content-wrapper">
                                                            <span class="thumb-info-inner text-start ps-5"></span>
                                                            <span class="thumb-info-inner text-2">
                                                                <p class="px-5 text-4 text-lg-2 opacity-7 font-weight-medium text-light">{{$doctor->desc}}</p>

                                                                <ul class="social-icons social-icons-clean social-icons-icon-light">
                                                                    <li class="social-icons-instagram">
                                                                        <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                                                    </li>
                                                                    <li class="social-icons-twitter">
                                                                        <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                                    </li>
                                                                    <li class="social-icons-facebook">
                                                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                                    </li>
                                                                </ul>

                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <h3 class="font-weight-bold text-capitalize line-height-1 text-5-5 mt-4 mb-0">{{$doctor->name}}</h3>
                                            <p class="font-weight-medium text-color-grey text-3 mb-2">{{$doctor->title}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="textimonialsCarousel" class="owl-carousel owl-theme full-width nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-4 manual p-relative mb-0">
            <div class="container-fluid">
                <div class="row align-items-center bg-color-tertiary">
                    <div class="col-xl-6 p-0">
                        <div data-plugin-before-after data-plugin-options="{'before_label': '', 'after_label': ''}">
                            <!-- The before image is first -->
                            <img src="Image/before-after-1.jpg" />
                            <!-- The after image is last -->
                            <img src="Image/before-after-2.jpg" />
                        </div>
                    </div>
                    <div class="col-xl-6 p-0 bg-color-tertiary text-center text-color-light">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center custom-min-height-1">

                            <div class="testimonial testimonial-style-2 px-lg-5">
                                <div class="d-block">
                                    <img height="80" width="80" src="Image/demos/dentist/icons/icon-8.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
                                </div>
                                <blockquote>
                                    <p class="mb-0 text-color-light text-5 line-height-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-semi-bold text-color-light text-5-5">Janice Smith</strong></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row align-items-center bg-color-primary">
                    <div class="col-xl-6 p-0">
                        <div data-plugin-before-after data-plugin-options="{'before_label': '', 'after_label': ''}">
                            <!-- The before image is first -->
                            <img src="Image/before-after-1.jpg" />
                            <!-- The after image is last -->
                            <img src="Image/before-after-2.jpg" />
                        </div>
                    </div>
                    <div class="col-xl-6 p-0 bg-color-primary text-center text-color-light">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center custom-min-height-1">

                            <div class="testimonial testimonial-style-2 px-lg-5">
                                <div class="d-block">
                                    <img height="80" width="80" src="Image/demos/dentist/icons/icon-8.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
                                </div>
                                <blockquote>
                                    <p class="mb-0 text-color-light text-5 line-height-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-semi-bold text-color-light text-5-5">Alice Smith</strong></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4">
            <div class="row align-items-center text-center py-5">
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="Image/logo-8.png" alt="" class="img-fluid" style="max-width: 90px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="Image/logo-9.png" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="Image/logo-10.png" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
                    <img src="Image/logo-11.png" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
                    <img src="Image/logo-12.png" alt="" class="img-fluid" style="max-width: 100px;">
                </div>
                <div class="col-sm-4 col-lg-2">
                    <img src="Image/logo-13.png" alt="" class="img-fluid" style="max-width: 100px;">
                </div>
            </div>
        </div>

        <section class="section border-0 bg-color-light m-0 py-5" id="book">
            <div class="container py-5 my-2">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="d-inline-block line-height-5 text-4 positive-ls-3 font-weight-semibold text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">BOOK ONLINE</h2>
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Schedule an Appointment</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Schedule your appointment conveniently by selecting a time that suits you and the doctor you prefer. (1hr Appointment)</p>

                        <form class="contact-form text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" action="{{route('contact.submit')}}" method="POST">
                            @csrf

                            @if (session('error'))
                                <div class="contact-form-error alert alert-danger mt-4">
                                    {{ session('error') }}
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success mt-4 contact-form-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (!Auth::check())
                                <div class="alert alert-warning mt-4 ">
                                    Login or Sign up To access Online Booking.
                                </div>
                            @endif

                            @if (Auth::check())
                                <input type="hidden" value="{{Auth::user()->id}}" name="patient_id">
                            @endif

                            <div class="row row-gutter-sm">
                                <div class="form-group col-lg-6 mb-4">
                                    <select class="form-select w-100 h-100" aria-label="Select Doctor" @if(!Auth::check()) disabled @endif name="doctor_id" required>
                                        <option value="" disabled>Select your doctor</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->name}} (Joined {{$doctor->created_at->diffForHumans()}})</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 mb-4 date">
                                    <input @if(!Auth::check()) disabled @endif type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" max="{{$monthLater}}" class="form-control border-0 p-3 box-shadow-none" name="date" id="date" required>
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 mb-4 date">
                                    <input @if(!Auth::check()) disabled @endif type="time" value="{{date('H')}}:00" min="06:00 AM" max="22:00" step="1800" class="form-control border-0 p-3 box-shadow-none" name="time" id="time" required>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 mb-4 date">
                                    <select class="form-select w-100 h-100" aria-label="Select Doctor" @if(!Auth::check()) disabled @endif name="payment_m" required>
                                        <option value="" disabled>Select Payment method</option>
                                        <option value="1">Cash</option>
                                        <option value="2">Card</option>
                                    </select>
                                    @error('doctor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col text-end mb-0">
                                    <button @if(!Auth::check()) disabled @endif type="submit" class="btn btn-secondary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Schedule</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
