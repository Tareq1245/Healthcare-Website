
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.sponsor.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sponsor.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($sponsor->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sponsor.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($sponsor->name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sponsor.fields.logo')); ?>

                        </th>
                        <td>
                            <?php if($sponsor->logo): ?>
                                <a href="<?php echo e($sponsor->logo->getUrl()); ?>" target="_blank">
                                    <img src="<?php echo e($sponsor->logo->getUrl('thumb')); ?>" width="50px" height="50px">
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.sponsor.fields.link')); ?>

                        </th>
                        <td>
                            <?php echo e($sponsor->link); ?>

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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/sponsors/show.blade.php ENDPATH**/ ?>