
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.speaker.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($speaker->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($speaker->name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.description')); ?>

                        </th>
                        <td>
                            <?php echo $speaker->description; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.full_description')); ?>

                        </th>
                        <td>
                            <?php echo $speaker->full_description; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.photo')); ?>

                        </th>
                        <td>
                            <?php if($speaker->photo): ?>
                                <a href="<?php echo e($speaker->photo->getUrl()); ?>" target="_blank">
                                    <img src="<?php echo e($speaker->photo->getUrl('thumb')); ?>" width="50px" height="50px">
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.twitter')); ?>

                        </th>
                        <td>
                            <?php echo e($speaker->twitter); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.facebook')); ?>

                        </th>
                        <td>
                            <?php echo e($speaker->facebook); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.speaker.fields.linkedin')); ?>

                        </th>
                        <td>
                            <?php echo e($speaker->linkedin); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/speakers/show.blade.php ENDPATH**/ ?>