
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.gallery.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.galleries.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.gallery.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($gallery) ? $gallery->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.gallery.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('photos') ? 'has-error' : ''); ?>">
                <label for="photos"><?php echo e(trans('cruds.gallery.fields.photos')); ?></label>
                <div class="needsclick dropzone" id="photos-dropzone">

                </div>
                <?php if($errors->has('photos')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('photos')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.gallery.fields.photos_helper')); ?>

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
    var uploadedPhotosMap = {}
Dropzone.options.photosDropzone = {
    url: '<?php echo e(route('admin.galleries.storeMedia')); ?>',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
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
      $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
<?php if(isset($gallery) && $gallery->photos): ?>
      var files =
        <?php echo json_encode($gallery->photos); ?>

          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
        }
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/galleries/create.blade.php ENDPATH**/ ?>