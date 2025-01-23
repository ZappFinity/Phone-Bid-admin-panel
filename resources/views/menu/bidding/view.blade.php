@extends('layouts.master')
@section('title')
    Bidding
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Menu
        @endslot
        @slot('title')
            Bidding
        @endslot
    @endcomponent
    @include('partials.session')
    <div class="row">


        @foreach ($mobiles as $mobile)
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark">
                                        {{ $mobile->name }}
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        {{ $mobile->price }}
                                    </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark ">
                                        Bidding Starting Price
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        Rs. {{ $mobile->bid_starting_price }}
                                    </h3>
                                </div>
                            </div>
                            @if ($mobile->bids)
                                <h2>
                                    Biddings
                                </h2>
                            @endif
                            @foreach ($mobile->bids as $bid)
                                <div class="row">
                                    <div class="col-8">
                                        <span class="text-dark">
                                            Bid Status
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="badge 
                                            @if ($bid->status === 'Pending') bg-warning 
                                            @elseif ($bid->status === 'Accepted') bg-success 
                                            @elseif ($bid->status === 'Rejected') bg-danger 
                                            @else bg-secondary @endif">
                                            {{ $bid->status }}
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <span class="text-dark">
                                            {{ $bid->email }}
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-dark">
                                            {{ $bid->phone }}
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <span class="text-dark">
                                            Bid Price
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-dark">
                                            {{ $mobile->price }}
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-2">
                                    <div class="col-4">
                                        <a href="{{ url('/bidding/delete/'. $bid->id) }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ url('/bidding/accept/'. $bid->id) }}"
                                            class="btn btn-success btn-sm">Accept</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ url('/bidding/reject/'. $bid->id) }}"
                                            class="btn btn-dark btn-sm">Reject</a>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                            <a data-bs-toggle="modal" data-bs-target=".view{{ $mobile->id }}"
                                class="btn btn-info btn-sm"> <i class="ri-eye-line"></i></a>

                            <div class="modal fade
                                view{{ $mobile->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">View Mobile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="">
                                                        Name
                                                    </label>
                                                    <h6 class="fs-15 text-primary mb-4">
                                                        {{ $mobile->name }}
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <label for="">
                                                        Image
                                                    </label>
                                                    <img src="{{ asset('storage/' . $mobile->image) }}" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Price
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->price }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Release Date
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->release_date }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Sim Support
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->sim_support }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Operating System
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->operating_system }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Phone Wieght
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->phone_weight }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Phone Dimensions
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->phone_dimensions }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Size
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->screen_size }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Type
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->screen_resolution }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Resolution
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->screen_type }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Protection
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->screen_protection }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Internal Memory
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->internal_memory }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Ram
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->ram }}
                                                    </h6>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">
                                                        Card Slot
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->card_slot }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Processor
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->processor }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        GPU
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->gpu }}
                                                    </h6>

                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Battery
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->battery }}
                                                    </h6>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Front Camera
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->front_camera }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Front Flash
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->front_flash }}
                                                    </h6>

                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Front Video Recording
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->front_video_recording }}
                                                    </h6>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="">
                                                        Back Camera
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->back_camera }}
                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Back Flash
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->back_flash }}
                                                    </h6>

                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Back Video Recording
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->back_video_recording }}
                                                    </h6>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">
                                                        Bluetooth
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->bluetooth }}
                                                    </h6>

                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        3G
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->{'3G'} }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        4G/LTE
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->{'4G/LTE'} }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        5G
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->{'5G'} }}
                                                    </h6>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">
                                                        Radio
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->radio }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Wi-Fi
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->wifi }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        NFC
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        {{ $mobile->nfc }}
                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Is this a new mobile?
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        @if ($mobile->is_new == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </h6>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- end row-->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>

    <!-- Widget init -->
    <script src="{{ URL::asset('assets/js/pages/widgets.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script></script>
@endsection
