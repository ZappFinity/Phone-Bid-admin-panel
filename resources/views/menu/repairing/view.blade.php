@extends('layouts.master')
@section('title')
Repairing
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Menu
        @endslot
        @slot('title')
            Repairing
        @endslot
    @endcomponent
    @include('partials.session')
    <div class="row">


        @foreach ($reqs as $req)
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        Device Name
                                    </h3>
                                </div>
                                <div class="col-8">
                                    <span class="fs-15 text-dark text-primary">
                                        {{ $req->mobile_name }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        Type
                                    </h3>
                                </div>
                                <div class="col-8">
                                    <span class="fs-15 text-dark text-primary">
                                        {{ $req->device_type }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark">
                                        {{ $req->email }}
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        {{ $req->phone }}
                                    </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        Request By
                                    </h3>
                                </div>
                                <div class="col-8">
                                    <span class="fs-15 text-dark">
                                        {{ $req->user->name }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        Issue
                                    </h3>
                                </div>
                                <div class="col-8">
                                    <span class="fs-15 text-dark">
                                        {{ $req->issue }}
                                    </span>
                                </div>
                            </div>
                            @if ($req->status == 'Pending')
                                <a href="{{ route('accept', $req->id) }}" class="btn btn-primary">
                                    Accept
                                </a>
                            @else
                                <a href="#" class="btn btn-secondary">
                                    Already Accepted
                                </a>
                            @endif
                            
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
