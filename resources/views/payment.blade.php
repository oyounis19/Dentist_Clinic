@extends('layout.app')

@section('title', 'Contact Us')

@section('contact_nav_active', 'active')

@section('content')
<div role="main" class="main">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form class="" action="{{route('pay')}}" method="POST">
                    @csrf
                    <input type="hidden" name="paid" value="1">

                    <div class="form-group col">
                        <label class="form-label mb-1 text-2">Owner</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Card Number</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="16" class="form-control text-3 h-auto py-2" name="subject" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">CVV Code</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="3" class="form-control text-3 h-auto py-2" name="name" required="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Expiration Date</label>
                            <input type="date" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" value="Make Payment" class="btn btn-primary">
                                make payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
