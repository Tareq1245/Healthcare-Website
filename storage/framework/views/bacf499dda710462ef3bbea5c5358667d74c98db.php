







































<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p><?php echo $settings['service_description']; ?></p>
        </div>

        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-heart-beat"></i></div>
                        <h4><a href=""><?php echo e($service->title); ?></a></h4>
                        <p><?php echo $service->message; ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/venues.blade.php ENDPATH**/ ?>