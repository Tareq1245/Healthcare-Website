
<section id="facilities" class="departments">

    <div class="container">

        <div class="section-title">
            <h2>EmmanuelHealth Facility</h2>
            <p><?php echo $settings['facility_description']; ?></p>
        </div>

        <div class="row">

                <div class="col-lg-3">

                    <ul class="nav nav-tabs flex-column">
                        <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item <?php echo e(($index == 0) ? 'active show':''); ?>">
                            <a class="nav-link" data-toggle="tab" href="#tab-<?php echo e($team->id); ?>"><?php echo e($team->title); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane <?php echo e(($index == 0) ? 'active show':''); ?>" id="tab-<?php echo e($team->id); ?>">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?php echo e($team->title); ?></h3>

                                    <p><?php echo e($team->message); ?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="<?php echo e(asset('storage/service/'.$team->image)); ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

        </div>

    </div>

</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/schedule.blade.php ENDPATH**/ ?>