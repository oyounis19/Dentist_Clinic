@extends('layout.app')

@section('title', 'Gallery')

@section('gallery_nav_active', 'active')

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-quaternary p-relative">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-color-dark font-weight-bold text-9">Gallery</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-flex justify-content-md-end text-4 font-weight-medium">
                            <li class="text-capitalize"><a href="demo-dentist.html" class="text-color-default text-color-hover-primary text-decoration-none text-capitalize">Home</a></li>
                            <li class="text-capitalize active">Gallery</li>
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

        </div>

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
                                <img height="80" width="80" src="img/demos/dentist/icons/icon-8.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
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
                <div class="col-xl-6 p-0 bg-color-primary text-center text-color-light">
                    <div class="d-flex align-items-center justify-content-center h-100 text-center custom-min-height-1">

                        <div class="testimonial testimonial-style-2 px-lg-5">
                            <div class="d-block">
                                <img height="80" width="80" src="img/demos/dentist/icons/icon-8.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
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
                <div class="col-xl-6 p-0">
                    <div data-plugin-before-after data-plugin-options="{'before_label': '', 'after_label': ''}">
                        <!-- The before image is first -->
                        <img src="Image/before-after-1.jpg" />
                        <!-- The after image is last -->
                        <img src="Image/before-after-2.jpg" />
                    </div>
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
