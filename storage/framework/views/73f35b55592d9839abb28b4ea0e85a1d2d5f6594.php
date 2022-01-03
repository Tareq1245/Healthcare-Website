<section id="faq" class="wow fadeInUp" style="visibility: visible">

  <div class="container">

    <div class="section-header">
      <h2>F.A.Q </h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
          <ul id="faq-list">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq<?php echo e($faq->id); ?>"><?php echo e($faq->question); ?> <i class="fa fa-minus-circle"></i></a>
                <div id="faq<?php echo e($faq->id); ?>" class="collapse" data-parent="#faq-list">
                  <p>
                    <?php echo e($faq->answer); ?>

                  </p>
                </div>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </ul>
      </div>
    </div>

  </div>

</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/faq.blade.php ENDPATH**/ ?>