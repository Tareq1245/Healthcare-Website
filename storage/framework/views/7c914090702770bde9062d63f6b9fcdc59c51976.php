<section id="supporters" class="section-with-bg wow fadeInUp" style="visibility: visible">

  <div class="container">
    <div class="section-header">
      <h2>Sponsors</h2>
    </div>

    <div class="row no-gutters supporters-wrap clearfix">
      <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="<?php echo e($sponsor->logo->getUrl()); ?>" class="img-fluid" alt="<?php echo e($sponsor->name); ?>">
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>

</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/sponsors.blade.php ENDPATH**/ ?>