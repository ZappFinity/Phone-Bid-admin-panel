<?php $__env->startSection('title'); ?>
    Blogs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Menu
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Blogs
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <form action="<?php echo e(route('blog.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
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

        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fs-15 text-success"><?php echo e($blog->title); ?> <small class="text-muted fs-13 fw-normal">
                                    (<?php echo e($blog->created_at->diffForHumans()); ?>)
                                    <a data-bs-toggle="modal" data-bs-target=".editBlog<?php echo e($blog->id); ?>"
                                        class="btn btn-primary btn-sm"> <i class="ri-pencil-line"></i></a>
                                    <div class="modal fade
                                        editBlog<?php echo e($blog->id); ?>"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Blog</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(route('blog.update', $blog->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div
                                                        class="modal-body
                                                    ">
                                                        <label for="">
                                                            Title
                                                        </label>
                                                        <input type="text" class="form-control" name="title"
                                                            id="title" value="<?php echo e($blog->title); ?>">
                                                        <label for="">
                                                            Content
                                                        </label>
                                                        <textarea name="content" id="content" cols="30" rows="20" class="form-control"><?php echo e($blog->content); ?></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-link link-success fw-medium"
                                                            data-bs-dismiss="modal"><i
                                                                class="ri-close-line me-1 align-middle"></i>
                                                            Close</a>
                                                        <button type="submit" class="btn btn-primary ">Update</button>
                                                    </div>
                                                </form>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <a data-bs-toggle="modal" data-bs-target=".delete<?php echo e($blog->id); ?>"
                                        class="btn btn-danger btn-sm"> <i class="ri-delete-bin-line"></i></a>

                                    <div class="modal fade
                                        delete<?php echo e($blog->id); ?>

                                    "
                                        id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you sure you want to delete this blog?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <form method="POST" action="<?php echo e(route('blog.destroy', $blog->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <a href="<?php echo e(url('/blog/delete', $blog->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </small></h5>
                            <p class="text-dark mb-2">
                                <span class="short-content"><?php echo e(Str::limit($blog->content, 200)); ?></span>
                                <span class="full-content" style="display: none;"><?php echo e($blog->content); ?></span>
                                <button class="btn btn-link show-more-btn" data-toggle="collapse"
                                    data-target="#collapse<?php echo e($blog->id); ?>" aria-expanded="false"
                                    aria-controls="collapse<?php echo e($blog->id); ?>">Show More</button>
                                <button class="btn btn-link show-less-btn" style="display: none;">Show Less</button>
                            </p>
                            <div class="collapse" id="collapse<?php echo e($blog->id); ?>">
                                <p class="text-dark mb-2">
                                    <?php echo e($blog->content); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <!-- end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Vector map-->
    <script src="<?php echo e(URL::asset('assets/libs/jsvectormap/jsvectormap.min.js')); ?>"></script>

    <!-- Widget init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/widgets.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairnaeem/zappfinity/phonebid/Phone-Bid-admin-panel/resources/views/menu/blog/view.blade.php ENDPATH**/ ?>