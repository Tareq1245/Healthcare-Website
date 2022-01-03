<section id="buy-tickets" class="section-with-bg wow fadeInUp" style="visibility: visible">
  <div class="container">

    <div class="section-header">
      <h2>Donations</h2>
      <p><?php echo $settings['donate_description']; ?></p>
    </div>

    <div class="row">
      <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center"><?php echo e($price->name); ?></h5>
              <h6 class="card-price text-center">$<?php echo e(number_format($price->price)); ?></h6>
              <hr>
              <ul class="fa-ul">
                <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li <?php if(!$price->amenities->contains($amenity->id)): ?>class="text-muted"<?php endif; ?>>
                    <span class="fa-li"><i class="fa fa-<?php echo e($price->amenities->contains($amenity->id) ? 'check' : 'times'); ?>"></i></span><?php echo e($amenity->name); ?>

                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="<?php echo e(Str::slug($price->name)); ?>">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Donates</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control" >
                <option value="">-- Select Your Donation Type --</option>
                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e(Str::slug($price->name)); ?>"><?php echo e($price->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn">Buy Now</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>




















































































































































































































































<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/buy_ticket.blade.php ENDPATH**/ ?>