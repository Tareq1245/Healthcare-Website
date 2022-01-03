<?php $__env->startSection('content'); ?>
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn" style="visibility: visible">
    <div class="container">
      <div class="section-header">
        <h2>Doctors Details</h2>
        <p>Praesentium ut qui possimus sapiente nulla.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo e($speaker->photo->getUrl()); ?>" alt="<?php echo e($speaker->name); ?>" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2><?php echo e($speaker->name); ?></h2>
            <div class="social">
              <a href="<?php echo e($speaker->twitter); ?>"><i class="fa fa-twitter"></i></a>
              <a href="<?php echo e($speaker->facebook); ?>"><i class="fa fa-facebook"></i></a>
              <a href="<?php echo e($speaker->linkedin); ?>"><i class="fa fa-linkedin"></i></a>
            </div>
            <p><?php echo e($speaker->full_description); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/speaker.blade.php ENDPATH**/ ?>