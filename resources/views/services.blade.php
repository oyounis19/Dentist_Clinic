@extends('layout.app')

@section('title', 'Our Services')

@section('services_nav_active', 'active')

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-quaternary p-relative">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-color-dark font-weight-bold text-9">Services</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-flex justify-content-md-end text-4 font-weight-medium">
                            <li class="text-capitalize"><a href="{{route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none text-capitalize">Home</a></li>
                            <li class="text-capitalize active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col">
                    <p class="font-weight-medium text-4-5 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus.</p>
                    <p class="text-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus. Vestibulum maximus ac purus in euismod.</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6 col-lg-4 mb-4">
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
                                        <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="img/demos/dentist/icons/icon-4.svg" />
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                                        <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="img/demos/dentist/icons/icon-5.svg" />
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
                <div class="col-md-6 col-lg-4 mb-4">
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
                                        <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="img/demos/dentist/icons/icon-6.svg" />
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
                <div class="col-md-6 col-lg-4 mb-4">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-slow-image-zoom-hover thumb-info-swap-content anim-hover-inner-wrapper">
                        <span class="thumb-info-wrapper overlay overlay-op-3 overlay-show overflow-hidden">
                            <img src="Image/service-4.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-title bg-transparent w-100 mw-100 p-0 top-0 p-5">
                                <span class="anim-hover-inner-translate-bottom-20px transition-2ms d-inline-block">
                                    <span class="thumb-info-inner">
                                        <h4 class="text-color-light text-5 font-weight-bold">Tooth Extraction</h4>
                                    </span>
                                </span>
                            </span>
                            <span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0">
                                <span class="thumb-info-swap-content-wrapper">
                                    <span class="thumb-info-inner text-start ps-5">
                                        <img style="max-width: 60px;" height="60" width="60" class="transform-none mb-3" src="img/demos/dentist/icons/icon-7.svg" />
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
            </div>
        </div>

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

    </div>
@endsection
