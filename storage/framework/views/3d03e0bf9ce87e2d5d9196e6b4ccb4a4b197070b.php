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
            <a data-bs-toggle="modal" data-bs-target=".newBlog" class="btn btn-primary">Add
                Mobile</a>
            <div class="modal fade newBlog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">
                                Add Mobile
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form action="<?php echo e(route('mobile.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">
                                            Name
                                        </label>
                                        <input required type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            Image
                                        </label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Price
                                        </label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Release Date
                                        </label>
                                        <input type="text" class="form-control" name="release_date">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Sim Support
                                        </label>
                                        <input type="text" class="form-control" name="sim_support">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Operating System
                                        </label>
                                        <input type="text" class="form-control" name="operating_system">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Phone Wieght
                                        </label>
                                        <input type="text" class="form-control" name="phone_weight">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Phone Dimensions
                                        </label>
                                        <input type="text" class="form-control" name="phone_dimensions">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Screen Size
                                        </label>
                                        <input type="text" class="form-control" name="screen_size">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Screen Type
                                        </label>
                                        <input type="text" class="form-control" name="screen_resolution">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Screen Resolution
                                        </label>
                                        <input type="text" class="form-control" name="screen_type">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Screen Protection
                                        </label>
                                        <input type="text" class="form-control" name="screen_protection">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Internal Memory
                                        </label>
                                        <input type="text" class="form-control" name="internal_memory">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Ram
                                        </label>
                                        <input type="text" class="form-control" name="ram">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">
                                            Card Slot
                                        </label>
                                        <input type="text" class="form-control" name="card_slot">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            Processor
                                        </label>
                                        <input type="text" class="form-control" name="processor">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            GPU
                                        </label>
                                        <input type="text" class="form-control" name="gpu">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            Battery
                                        </label>
                                        <input type="text" class="form-control" name="battery">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Front Camera
                                        </label>
                                        <input type="text" class="form-control" name="front_camera">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Front Flash
                                        </label>
                                        <input type="text" class="form-control" name="front_flash">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Front Video Recording
                                        </label>
                                        <input type="text" class="form-control" name="front_video_recording">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="">
                                            Back Camera
                                        </label>
                                        <input type="text" class="form-control" name="back_camera">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Back Flash
                                        </label>
                                        <input type="text" class="form-control" name="back_flash">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Back Video Recording
                                        </label>
                                        <input type="text" class="form-control" name="back_video_recording">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">
                                            Bluetooth
                                        </label>
                                        <input type="text" class="form-control" name="bluetooth">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            3G
                                        </label>
                                        <input type="text" class="form-control" name="3G">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            4G/LTE
                                        </label>
                                        <input type="text" class="form-control" name="4G/LTE">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            5G
                                        </label>
                                        <input type="text" class="form-control" name="5G">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="">
                                            Radio
                                        </label>
                                        <input type="text" class="form-control" name="radio">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            Wi-Fi
                                        </label>
                                        <input type="text" class="form-control" name="wifi">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            NFC
                                        </label>
                                        <input type="text" class="form-control" name="nfc">
                                    </div>
                                    <div class="col-3">
                                        <label for="">
                                            Is this a new mobile?
                                        </label>
                                        <select name="is_new" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                </div>

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

        <?php $__currentLoopData = $mobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="timeline-item">
                <div class="content">
                    <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="fs-15 text-dark mb-4">
                                        <?php echo e($mobile->name); ?>

                                    </h3>
                                </div>
                                <div class="col-4">
                                    <h3 class="fs-15 text-dark mb-4">
                                        <?php echo e($mobile->price); ?>

                                    </h3>
                                </div>
                            </div>
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


                            <a data-bs-toggle="modal" data-bs-target=".editBlog<?php echo e($mobile->id); ?>"
                                class="btn btn-primary btn-sm"> <i class="ri-pencil-line"></i></a>
                            <div class="modal fade
                                        editBlog<?php echo e($mobile->id); ?>"
                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Edit Mobile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('mobile.update', $mobile->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="">
                                                            Name
                                                        </label>
                                                        <input required type="text" class="form-control"
                                                            value="<?php echo e($mobile->name); ?>" name="name">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">
                                                            Image
                                                        </label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Price
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->price); ?>" name="price">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Release Date
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->release_date); ?>" name="release_date">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Sim Support
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->sim_support); ?>" name="sim_support">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Operating System
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->operating_system); ?>"
                                                            name="operating_system">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Phone Wieght
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->phone_weight); ?>" name="phone_weight">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Phone Dimensions
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->phone_dimensions); ?>"
                                                            name="phone_dimensions">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Screen Size
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->screen_size); ?>" name="screen_size">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Screen Type
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->screen_resolution); ?>"
                                                            name="screen_resolution">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Screen Resolution
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->screen_type); ?>" name="screen_type">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Screen Protection
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->screen_protection); ?>"
                                                            name="screen_protection">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Internal Memory
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->internal_memory); ?>"
                                                            name="internal_memory">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Ram
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->ram); ?>" name="ram">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="">
                                                            Card Slot
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->card_slot); ?>" name="card_slot">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            Processor
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->processor); ?>" name="processor">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            GPU
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->gpu); ?>" name="gpu">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            Battery
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->battery); ?>" name="battery">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Front Camera
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->front_camera); ?>" name="front_camera">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Front Flash
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->front_flash); ?>" name="front_flash">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Front Video Recording
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->front_video_recording); ?>"
                                                            name="front_video_recording">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">
                                                            Back Camera
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->back_camera); ?>" name="back_camera">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Back Flash
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->back_flash); ?>" name="back_flash">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">
                                                            Back Video Recording
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->back_video_recording); ?>"
                                                            name="back_video_recording">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="">
                                                            Bluetooth
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->bluetooth); ?>" name="bluetooth">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            3G
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->{'3G'}); ?>" name="3G">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            4G/LTE
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->{'4G/LTE'}); ?>" name="4G/LTE">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            5G
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->{'5G'}); ?>" name="5G">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="">
                                                            Radio
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->radio); ?>" name="radio">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            Wi-Fi
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->wifi); ?>" name="wifi">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            NFC
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo e($mobile->nfc); ?>" name="nfc">
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">
                                                            Is this a new mobile?
                                                        </label>
                                                        <select name="is_new" class="form-control">
                                                            <option <?php if($mobile->is_new == 1): ?> selected <?php endif; ?>
                                                                value="1">Yes</option>
                                                            <option <?php if($mobile->is_new == 0): ?> selected <?php endif; ?>
                                                                value="0">No</option>
                                                        </select>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium"
                                                    data-bs-dismiss="modal"><i
                                                        class="ri-close-line me-1 align-middle"></i>
                                                    Close</a>
                                                <button type="submit" class="btn btn-primary ">Save</button>
                                            </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <a data-bs-toggle="modal" data-bs-target=".delete<?php echo e($mobile->id); ?>"
                                class="btn btn-danger btn-sm"> <i class="ri-delete-bin-line"></i></a>

                            <div class="modal fade
                                        delete<?php echo e($mobile->id); ?>

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
                                            <p>Do you sure you want to delete this mobile?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form method="POST" action="<?php echo e(route('mobile.destroy', $mobile->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
    <script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\ZappFinity\PhoneBid\adminpanel\resources\views/menu/mobile/view.blade.php ENDPATH**/ ?>