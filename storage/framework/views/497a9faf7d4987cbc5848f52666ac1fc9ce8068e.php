<?php $__env->startSection('title'); ?>
Repairing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Menu
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Repairing
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">


        <?php $__currentLoopData = $reqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php echo e($req->mobile_name); ?>

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
                                        <?php echo e($req->device_type); ?>

                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark">
                                        <?php echo e($req->email); ?>

                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        <?php echo e($req->phone); ?>

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
                                        <?php echo e($req->user->name); ?>

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
                                        <?php echo e($req->issue); ?>

                                    </span>
                                </div>
                            </div>
                            <?php if($req->status == 'Pending'): ?>
                                <a href="<?php echo e(route('accept', $req->id)); ?>" class="btn btn-primary">
                                    Accept
                                </a>
                            <?php else: ?>
                                <a href="#" class="btn btn-secondary">
                                    Already Accepted
                                </a>
                            <?php endif; ?>
                            
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
    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairnaeem/zappfinity/phonebid/Phone-Bid-admin-panel/resources/views/menu/repairing/view.blade.php ENDPATH**/ ?>