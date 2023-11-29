@extends('layout.app')

@section('title', 'Dental Exams')

@section('services_nav_active', 'active')

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-quaternary p-relative">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-color-dark font-weight-bold text-9">Dental Exams</h1>
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

        <div class="container pt-4 pb-5 mb-4">

            <div class="row pb-5">
                <div class="col-lg-8 pe-lg-5">
                    <p class="font-weight-medium text-4-5 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices. Praesent semper porta interdum. Etiam cursus, tortor at interdum rutrum, metus nibh tincidunt purus, non tincidunt odio arcu quis erat. </p>

                    <div class="pt-3">

                        <div class="price-menu-item">
                            <div class="price-menu-item-details">
                                <div class="price-menu-item-title">
                                    <h5 class="text-transform-none font-weight-semibold text-4 mb-0">Oral Health Consultation</h5>
                                </div>
                                <div class="price-menu-item-line opacity-4"></div>
                                <div class="price-menu-item-price">
                                    <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                        <span class="text-2-5">$</span>160
                                    </strong>
                                </div>
                            </div>
                            <div class="price-menu-item-desc">
                                <p class="text-2-5 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <div class="price-menu-item">
                            <div class="price-menu-item-details">
                                <div class="price-menu-item-title">
                                    <h5 class="text-transform-none font-weight-semibold text-4 mb-0">Exam & Cleaning</h5>
                                </div>
                                <div class="price-menu-item-line opacity-4"></div>
                                <div class="price-menu-item-price">
                                    <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                        <span class="text-2-5">$</span>210
                                    </strong>
                                </div>
                            </div>
                            <div class="price-menu-item-desc">
                                <p class="text-2-5 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <div class="price-menu-item">
                            <div class="price-menu-item-details">
                                <div class="price-menu-item-title">
                                    <h5 class="text-transform-none font-weight-semibold text-4 mb-0">Laser Teeth Whitening</h5>
                                </div>
                                <div class="price-menu-item-line opacity-4"></div>
                                <div class="price-menu-item-price">
                                    <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                        <span class="text-2-5">$</span>380
                                    </strong>
                                </div>
                            </div>
                            <div class="price-menu-item-desc">
                                <p class="text-2-5 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 text-center pt-4 pt-lg-0">
                    <img src="image/service-1.jpg" class="img-fluid box-shadow-4 appear-animation" alt="" data-appear-animation="expandIn" data-appear-animation-delay="100" data-appear-animation-duration="600ms" />
                </div>
            </div>

            <div class="row pt-lg-3">
                <div class="col-md-8 col-lg-9 mb-5 mb-md-0">

                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-color-light text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                        1 - Tristique sit amet condim vel?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-color-light text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                        2 - Cras a elit sit amet leo accumsan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-color-light text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                        3 - Hel officitur felis ultricis nan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-color-light text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                        4 - Wuspaisse hendreirit vehicula leo?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-color-light text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                        5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-3 text-center text-md-start">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                        <h3 class="font-weight-bold mb-3 text-5-5 text-color-dark text-capitalize">Ready to Start?</h3>
                        <p class="pb-1 mb-3">Curabitur vulputate posuere tortor luctus vulputate laoreet pretium blandit. </p>
                        <a href="{{route('contact')}}#book" class="btn btn-secondary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
