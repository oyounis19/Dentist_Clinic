@extends('layout.app')

@section('title', 'Contact Us')

@section('contact_nav_active', 'active')

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
                            <li class="text-capitalize"><a href="{{route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none text-capitalize">Home</a></li>
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
                        <h3 class="text-color-dark text-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Schedule an Appointment</h3>
                        <p class="text-3-5 font-weight-medium pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Schedule your appointment conveniently by selecting a time that suits you and the doctor you prefer.</p>

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
