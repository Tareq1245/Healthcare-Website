
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.speaker.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.speakers.update", [$speaker->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.speaker.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($speaker) ? $speaker->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('name')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                <label for="description"><?php echo e(trans('cruds.speaker.fields.description')); ?></label>
                <textarea id="description" name="description" class="form-control "><?php echo e(old('description', isset($speaker) ? $speaker->description : '')); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('description')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.description_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('full_description') ? 'has-error' : ''); ?>">
                <label for="full_description"><?php echo e(trans('cruds.speaker.fields.full_description')); ?></label>
                <textarea id="full_description" name="full_description" class="form-control "><?php echo e(old('full_description', isset($speaker) ? $speaker->full_description : '')); ?></textarea>
                <?php if($errors->has('full_description')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('full_description')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.full_description_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('photo') ? 'has-error' : ''); ?>">
                <label for="photo"><?php echo e(trans('cruds.speaker.fields.photo')); ?></label>
                <div class="needsclick dropzone" id="photo-dropzone">

                </div>
                <?php if($errors->has('photo')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('photo')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.photo_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('twitter') ? 'has-error' : ''); ?>">
                <label for="twitter"><?php echo e(trans('cruds.speaker.fields.twitter')); ?></label>
                <input type="text" id="twitter" name="twitter" class="form-control" value="<?php echo e(old('twitter', isset($speaker) ? $speaker->twitter : '')); ?>">
                <?php if($errors->has('twitter')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('twitter')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.twitter_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('facebook') ? 'has-error' : ''); ?>">
                <label for="facebook"><?php echo e(trans('cruds.speaker.fields.facebook')); ?></label>
                <input type="text" id="facebook" name="facebook" class="form-control" value="<?php echo e(old('facebook', isset($speaker) ? $speaker->facebook : '')); ?>">
                <?php if($errors->has('facebook')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('facebook')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.facebook_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('linkedin') ? 'has-error' : ''); ?>">
                <label for="linkedin"><?php echo e(trans('cruds.speaker.fields.linkedin')); ?></label>
                <input type="text" id="linkedin" name="linkedin" class="form-control" value="<?php echo e(old('linkedin', isset($speaker) ? $speaker->linkedin : '')); ?>">
                <?php if($errors->has('linkedin')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('linkedin')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.speaker.fields.linkedin_helper')); ?>

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
    url: '<?php echo e(route('admin.speakers.storeMedia')); ?>',
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
<?php if(isset($speaker) && $speaker->photo): ?>
      var file = <?php echo json_encode($speaker->photo); ?>

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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/speakers/edit.blade.php ENDPATH**/ ?>