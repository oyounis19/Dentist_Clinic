@extends('layout.app')

@section('title', 'Appointments')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-quaternary p-relative">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="text-color-dark font-weight-bold text-9">Your Appointments</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-flex justify-content-md-end text-4 font-weight-medium">
                            <li class="text-capitalize"><a href="{{route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none text-capitalize">Home</a></li>
                            <li class="text-capitalize active">Appointments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="px-4">
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Doctor
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Time
                        </th>
                        <th>
                            Booked On
                        </th>
                        <th>
                            Cancel
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>
                                {{$appointment->id}}
                            </td>
                            <td>
                                {{$appointment->doctor->name}}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($appointment->date_time)->format('l, F j, Y') }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($appointment->date_time)->format('g:i A') }}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($appointment->created_at)->format('l, F j, Y') }}
                            </td>
                            <td>
                                @if(\Carbon\Carbon::parse($appointment->date_time)->isPast())
                                    <button class="btn btn-danger" disabled>Cancel</button>
                                @else
                                    <form action="{{route('appointment.cancel', $appointment->id)}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger">Cancel</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="container-fluid py-4">
            <div class="row align-items-center text-center py-5">
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="{{url('Image/logo-8.png')}}" alt="" class="img-fluid" style="max-width: 90px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="{{url('Image/logo-9.png')}}" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
                    <img src="{{url('Image/logo-10.png')}}" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
                    <img src="{{url('Image/logo-11.png')}}" alt="" class="img-fluid" style="max-width: 140px;">
                </div>
                <div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
                    <img src="{{url('Image/logo-12.png')}}" alt="" class="img-fluid" style="max-width: 100px;">
                </div>
                <div class="col-sm-4 col-lg-2">
                    <img src="{{url('Image/logo-13.png')}}" alt="" class="img-fluid" style="max-width: 100px;">
                </div>
            </div>
        </div>

        <div id="textimonialsCarousel" class="owl-carousel owl-theme full-width nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-4 manual p-relative mb-0">
            <div class="container-fluid">
                <div class="row align-items-center bg-color-tertiary">
                    <div class="col-xl-6 p-0">
                        <div data-plugin-before-after data-plugin-options="{'before_label': '', 'after_label': ''}">
                            <!-- The before image is first -->
                            <img src="{{url('Image/before-after-1.jpg')}}" />
                            <!-- The after image is last -->
                            <img src="{{url('Image/before-after-2.jpg')}}" />
                        </div>
                    </div>
                    <div class="col-xl-6 p-0 bg-color-tertiary text-center text-color-light">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center custom-min-height-1">

                            <div class="testimonial testimonial-style-2 px-lg-5">
                                <div class="d-block">
                                    <img height="80" width="80" src="{{url('Image/demos/dentist/icons/icon-8.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
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
                            <img src="{{url('Image/before-after-1.jpg')}}" />
                            <!-- The after image is last -->
                            <img src="{{url('Image/before-after-2.jpg')}}" />
                        </div>
                    </div>
                    <div class="col-xl-6 p-0 bg-color-primary text-center text-color-light">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center custom-min-height-1">

                            <div class="testimonial testimonial-style-2 px-lg-5">
                                <div class="d-block">
                                    <img height="80" width="80" src="{{url('Image/demos/dentist/icons/icon-8.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-light mt-1'}" />
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
                        <i class="icon-clock icons text-color-tertiary p-relative top-2 me-2"></i> Everyday 6:00 am to 11:00 pm
                    </li>
                    <li>
                        <i class="icon-phone icons text-color-tertiary p-relative top-2 me-2"></i> <a href="tel:123-456-7890" class="text-color-dark text-color-hover-tertiary text-decoration-none">123-456-7890</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection
