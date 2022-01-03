<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.hotel.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.hotels.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.hotel.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($hotel) ? $hotel->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.hotel.fields.name_helper')); ?>

                </p>
            </div>














            <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                <label for="address"><?php echo e(trans('cruds.hotel.fields.address')); ?></label>
                <input type="text" id="address" name="address" class="form-control" value="<?php echo e(old('address', isset($hotel) ? $hotel->address : '')); ?>">
                <?php if($errors->has('address')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('address')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.hotel.fields.address_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                <label for="description"><?php echo e(trans('cruds.hotel.fields.description')); ?></label>
                <textarea id="description" name="description" class="form-control "><?php echo e(old('description', isset($hotel) ? $hotel->description : '')); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('description')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.hotel.fields.description_helper')); ?>

                </p>
            </div>












            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    Dropzone.options.photoDropzone = {
    url: '<?php echo e(route('admin.hotels.storeMedia')); ?>',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($hotel) && $hotel->photo): ?>
      var file = <?php echo json_encode($hotel->photo); ?>

          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
<?php endif; ?>
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/hotels/create.blade.php ENDPATH**/ ?>