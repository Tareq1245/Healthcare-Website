<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.hotel.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.hotel.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($hotel->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.hotel.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($hotel->name); ?>

                        </td>
                    </tr>












                    <tr>
                        <th>
                            <?php echo e(trans('cruds.hotel.fields.address')); ?>

                        </th>
                        <td>
                            <?php echo e($hotel->address); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.hotel.fields.description')); ?>

                        </th>
                        <td>
                            <?php echo $hotel->description; ?>

                        </td>
                    </tr>








                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/hotels/show.blade.php ENDPATH**/ ?>