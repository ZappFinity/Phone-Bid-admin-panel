@extends('layouts.master')
@section('title')
    Blogs
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Menu
        @endslot
        @slot('title')
            Blogs
        @endslot
    @endcomponent
    @include('partials.session')
    <div class="row">
        <div class=" text-right">
            <a data-bs-toggle="modal" data-bs-target=".newBlog" class="btn btn-primary">Create
                Blog</a>
            <div class="modal fade newBlog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Write a new blog</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <label for="">
                                    Title
                                </label>
                                <input type="text" class="form-control" name="title" id="title">
                                <label for="">
                                    Content
                                </label>
                                <textarea name="content" id="content" cols="30" rows="20" class="form-control"></textarea>
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

        @foreach ($blogs as $blog)
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fs-15 text-success">{{ $blog->title }} <small class="text-muted fs-13 fw-normal">
                                    ({{ $blog->created_at->diffForHumans() }})
                                    <a data-bs-toggle="modal" data-bs-target=".editBlog{{ $blog->id }}"
                                        class="btn btn-primary btn-sm"><i class="ri-pencil-line"></i></a>
                                    <div class="modal fade
                                editBlog{{ $blog->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <!-- Modal content for editing blog -->
                                    </div>
                                    <a data-bs-toggle="modal" data-bs-target=".delete{{ $blog->id }}"
                                        class="btn btn-danger btn-sm"> <i class="ri-delete-bin-line"></i></a>
                                    <div class="modal fade
                                delete{{ $blog->id }}"
                                        id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <!-- Modal content for deleting blog -->
                                    </div>
                                </small></h5>
                            <p class="text-dark mb-2">
                                <span class="short-content">{{ Str::limit($blog->content, 200) }}</span>
                                <span class="full-content" style="display: none;">{{ $blog->content }}</span>
                                <button class="btn btn-link show-more-btn" data-toggle="collapse"
                                    data-target="#collapse{{ $blog->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $blog->id }}">Show More</button>
                                <button class="btn btn-link show-less-btn" style="display: none;">Show Less</button>
                            </p>
                            <div class="collapse" id="collapse{{ $blog->id }}">
                                <p class="text-dark mb-2">
                                    {{ $blog->content }}
                                </p>
                            </div>
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
    <script>
        document.querySelectorAll('.show-more-btn').forEach(button => {
            button.addEventListener('click', function() {
                const contentContainer = this.parentNode.querySelector('.short-content');
                const fullContent = this.parentNode.querySelector('.full-content');
                const showMoreBtn = this;
                const showLessBtn = this.parentNode.querySelector('.show-less-btn');
                contentContainer.style.display = 'none';
                fullContent.style.display = 'inline';
                showMoreBtn.style.display = 'none';
                showLessBtn.style.display = 'inline';
            });
        });

        document.querySelectorAll('.show-less-btn').forEach(button => {
            button.addEventListener('click', function() {
                const contentContainer = this.parentNode.querySelector('.short-content');
                const fullContent = this.parentNode.querySelector('.full-content');
                const showMoreBtn = this.parentNode.querySelector('.show-more-btn');
                const showLessBtn = this;
                contentContainer.style.display = 'inline';
                fullContent.style.display = 'none';
                showMoreBtn.style.display = 'inline';
                showLessBtn.style.display = 'none';
            });
        });
    </script>
@endsection
