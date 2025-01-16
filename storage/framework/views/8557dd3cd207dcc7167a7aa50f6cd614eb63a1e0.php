<?php $__env->startSection('title'); ?>
    Bidding
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Menu
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Bidding
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">


        <?php $__currentLoopData = $mobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark">
                                        <?php echo e($mobile->name); ?>

                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark">
                                        <?php echo e($mobile->price); ?>

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
                                        Rs. <?php echo e($mobile->bid_starting_price); ?>

                                    </h3>
                                </div>
                            </div>
                            <?php if($mobile->bids): ?>
                                <h2>
                                    Biddings
                                </h2>
                            <?php endif; ?>
                            <?php $__currentLoopData = $mobile->bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-8">
                                        <span class="text-dark">
                                            <?php echo e($bid->email); ?>

                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="text-dark">
                                            <?php echo e($bid->phone); ?>

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
                                            <?php echo e($mobile->price); ?>

                                        </span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a data-bs-toggle="modal" data-bs-target=".view<?php echo e($mobile->id); ?>"
                                class="btn btn-info btn-sm"> <i class="ri-eye-line"></i></a>

                            <div class="modal fade
                                view<?php echo e($mobile->id); ?>" tabindex="-1"
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
                                                        <?php echo e($mobile->name); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <label for="">
                                                        Image
                                                    </label>
                                                    <img src="<?php echo e(asset('storage/' . $mobile->image)); ?>" alt=""
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
                                                        <?php echo e($mobile->price); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Release Date
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->release_date); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Sim Support
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->sim_support); ?>

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
                                                        <?php echo e($mobile->operating_system); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Phone Wieght
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->phone_weight); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Phone Dimensions
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->phone_dimensions); ?>

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
                                                        <?php echo e($mobile->screen_size); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Type
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->screen_resolution); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Screen Resolution
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->screen_type); ?>

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
                                                        <?php echo e($mobile->screen_protection); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Internal Memory
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->internal_memory); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Ram
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->ram); ?>

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
                                                        <?php echo e($mobile->card_slot); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Processor
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->processor); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        GPU
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->gpu); ?>

                                                    </h6>

                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Battery
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->battery); ?>

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
                                                        <?php echo e($mobile->front_camera); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Front Flash
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->front_flash); ?>

                                                    </h6>

                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Front Video Recording
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->front_video_recording); ?>

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
                                                        <?php echo e($mobile->back_camera); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Back Flash
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->back_flash); ?>

                                                    </h6>

                                                </div>
                                                <div class="col-4">
                                                    <label for="">
                                                        Back Video Recording
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->back_video_recording); ?>

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
                                                        <?php echo e($mobile->bluetooth); ?>

                                                    </h6>

                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        3G
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->{'3G'}); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        4G/LTE
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->{'4G/LTE'}); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        5G
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->{'5G'}); ?>

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
                                                        <?php echo e($mobile->radio); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Wi-Fi
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->wifi); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        NFC
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php echo e($mobile->nfc); ?>

                                                    </h6>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">
                                                        Is this a new mobile?
                                                    </label>
                                                    <h6
                                                        class="fs-15 text-primary mb-4">
                                                        <?php if($mobile->is_new == 1): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairnaeem/zappfinity/phonebid/Phone-Bid-admin-panel/resources/views/menu/bidding/view.blade.php ENDPATH**/ ?>