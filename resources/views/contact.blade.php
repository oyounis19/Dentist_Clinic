@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-quaternary p-relative">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-color-dark font-weight-bold text-9">Contact</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-flex justify-content-md-end text-4 font-weight-medium">
                            <li class="text-capitalize"><a href="demo-dentist.html" class="text-color-default text-color-hover-primary text-decoration-none text-capitalize">Home</a></li>
                            <li class="text-capitalize active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col">
                    <div class="featured-boxes featured-boxes-style-9">
                        <div class="row">
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-primary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="img/demos/dentist/icons/icon-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semibold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Convenient Location</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, consec tetur adipiscing el nc viverra erat orcias ac auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-secondary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="img/demos/dentist/icons/icon-2.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semibold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Full-Service</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, con sectetur adipiscing el nc viverra eratorci ac auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 px-lg-3">
                                <div class="featured-box featured-box-tertiary">
                                    <div class="box-content">
                                        <span class="icon-featured icon-featured-lg">
                                            <img height="100" src="img/demos/dentist/icons/icon-3.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary mt-1'}" />
                                        </span>
                                        <h4 class="font-weight-semibold mt-3 pt-2 mb-3 text-5-5 text-color-dark">Top Rated Dentists</h4>
                                        <p class="mb-0 text-3-5 font-weight-medium">Lorem ipsum dolor sit amet, consec tetur adipiscing el nc viverra eratorciac auctor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <hr class="m-0 p-0">
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-md-6 mb-4 mb-md-0">

                    <ul class="list list-icons font-weight-semibold text-color-dark text-5">
                        <li>
                            <i class="icon-location-pin icons text-color-tertiary p-relative top-2 me-2"></i> 99 Porto St, Los Angeles, CA 10000
                        </li>
                        <li>
                            <i class="icon-envelope icons text-color-tertiary p-relative top-2 me-2"></i> <a href="mailto:mail@domain.com" class="text-color-dark text-color-hover-tertiary text-decoration-none">mail@domain.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list list-icons font-weight-semibold text-color-dark text-4">
                        <li>
                            <i class="icon-clock icons text-color-tertiary p-relative top-2 me-2"></i> Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
                        </li>
                        <li>
                            <i class="icon-phone icons text-color-tertiary p-relative top-2 me-2"></i> <a href="tel:123-456-7890" class="text-color-dark text-color-hover-tertiary text-decoration-none">123-456-7890</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <section class="section border-0 bg-color-light m-0 py-5" id="book">
            <div class="container py-5 my-2">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="d-inline-block line-height-5 text-4 positive-ls-3 font-weight-semibold text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">BOOK ONLINE</h2>
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Request an Appointment</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non.</p>

                        <form class="contact-form text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row row-gutter-sm">
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-0 p-3 box-shadow-none" name="name" id="name" required placeholder="Your Name">
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-0 p-3 box-shadow-none" name="phone" id="phone" required placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row row-gutter-sm">
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-0 p-3 box-shadow-none" name="email" id="email" required placeholder="E-mail Address">
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="text" value="" data-msg-required="Please enter the service." maxlength="100" class="form-control border-0 p-3 box-shadow-none" name="service" id="service" required placeholder="Service">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-4">
                                    <textarea maxlength="5000" data-msg-required="Please enter the details." rows="10" class="form-control border-0 p-3 box-shadow-none" name="message" id="message" required placeholder="Details"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col text-end mb-0">
                                    <button type="submit" class="btn btn-secondary border-0 text-3-5 font-weight-semi-bold btn-px-5 btn-py-3">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
