@extends('layouts.master')
@section('title')
    Accessories
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Menu
        @endslot
        @slot('title')
            Accessories
        @endslot
    @endcomponent
    @include('partials.session')
    <div class="row">
        <div class=" text-right">
            <a data-bs-toggle="modal" data-bs-target=".newBlog" class="btn btn-primary">Add
                Accessory</a>
            <div class="modal fade newBlog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Add a new Accessory</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form action="{{ route('accessories.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <label for="">
                                    Name
                                </label>
                                <input required autocomplete="off" type="text" class="form-control" name="name" id="name">
                                <label for="">
                                    Price
                                </label>
                                <input required autocomplete="off" type="number" class="form-control" name="price" id="price">
                                <label for="">
                                    Description
                                </label>
                                <input required autocomplete="off" type="text" class="form-control" name="description" id="description">
                                <label for="">
                                    Image Link
                                </label>
                                <input required autocomplete="off" type="text" class="form-control" name="image" id="image">
                                <label for="">
                                    Type
                                </label>
                                <input required autocomplete="off" type="text" class="form-control" name="type" id="type">
                                <label for="">
                                    Brand
                                </label>
                                <input required autocomplete="off" type="text" class="form-control" name="brand" id="brand">
                            </div>
                            <div class="modal-footer">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
                                    data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>
                                    Close</a>
                                <button type="submit" class="btn btn-primary ">Save</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($accessories as $key => $accessory)
                                    <tr>
                                        <td>{{ $accessory->name }}</td>
                                        <td>{{ $accessory->price }}</td>
                                        <td>{{ $accessory->description }}</td>
                                        <td>
                                            <img src="{{ $accessory->image }}" alt="" width="100">
                                        </td>
                                        <td>{{ $accessory->type }}</td>
                                        <td>{{ $accessory->brand }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target=".edit{{ $key }}">Edit</a>
                                            <div class="modal fade edit{{ $key }}" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel">Update this
                                                                Accessory</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('accessories.update', $accessory->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <label for="">
                                                                    Name
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="{{ $accessory->name }}"
                                                                    class="form-control" name="name" id="name">
                                                                <label for="">
                                                                    Price
                                                                </label>
                                                                <input required autocomplete="off" type="number"
                                                                value="{{ $accessory->price }}"
                                                                    class="form-control" name="price" id="price">
                                                                <label for="">
                                                                    Description
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="{{ $accessory->description }}"
                                                                    class="form-control" name="description" id="description">
                                                                <label for="">
                                                                    Image Link
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="{{ $accessory->image }}"
                                                                    class="form-control" name="image" id="image">
                                                                <label for="">
                                                                    Type
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="{{ $accessory->type }}"
                                                                    class="form-control" name="type" id="type">
                                                                <label for="">
                                                                    Brand
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="{{ $accessory->brand }}"
                                                                    class="form-control" name="brand" id="brand">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-link link-success fw-medium"
                                                                    data-bs-dismiss="modal"><i
                                                                        class="ri-close-line me-1 align-middle"></i>
                                                                    Close</a>
                                                                <button type="submit"
                                                                    class="btn btn-primary ">Update</button>
                                                            </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <form action="{{ route('accessories.destroy', $accessory->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>


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
@endsection
