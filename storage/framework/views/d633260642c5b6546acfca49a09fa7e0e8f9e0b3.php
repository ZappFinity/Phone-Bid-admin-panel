<?php $__env->startSection('title'); ?>
    Accessories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Menu
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Accessories
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <form action="<?php echo e(route('accessories.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
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
                                <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($accessory->name); ?></td>
                                        <td><?php echo e($accessory->price); ?></td>
                                        <td><?php echo e($accessory->description); ?></td>
                                        <td>
                                            <img src="<?php echo e($accessory->image); ?>" alt="" width="100">
                                        </td>
                                        <td><?php echo e($accessory->type); ?></td>
                                        <td><?php echo e($accessory->brand); ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target=".edit<?php echo e($key); ?>">Edit</a>
                                            <div class="modal fade edit<?php echo e($key); ?>" tabindex="-1" role="dialog"
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
                                                        <form action="<?php echo e(route('accessories.update', $accessory->id)); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="modal-body">
                                                                <label for="">
                                                                    Name
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="<?php echo e($accessory->name); ?>"
                                                                    class="form-control" name="name" id="name">
                                                                <label for="">
                                                                    Price
                                                                </label>
                                                                <input required autocomplete="off" type="number"
                                                                value="<?php echo e($accessory->price); ?>"
                                                                    class="form-control" name="price" id="price">
                                                                <label for="">
                                                                    Description
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="<?php echo e($accessory->description); ?>"
                                                                    class="form-control" name="description" id="description">
                                                                <label for="">
                                                                    Image Link
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="<?php echo e($accessory->image); ?>"
                                                                    class="form-control" name="image" id="image">
                                                                <label for="">
                                                                    Type
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="<?php echo e($accessory->type); ?>"
                                                                    class="form-control" name="type" id="type">
                                                                <label for="">
                                                                    Brand
                                                                </label>
                                                                <input required autocomplete="off" type="text"
                                                                value="<?php echo e($accessory->brand); ?>"
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
                                            <form action="<?php echo e(route('accessories.destroy', $accessory->id)); ?>"
                                                method="POST" style="display: inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Vector map-->
    <script src="<?php echo e(URL::asset('assets/libs/jsvectormap/jsvectormap.min.js')); ?>"></script>

    <!-- Widget init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/widgets.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairnaeem/zappfinity/phonebid/Phone-Bid-admin-panel/resources/views/menu/accessories/view.blade.php ENDPATH**/ ?>