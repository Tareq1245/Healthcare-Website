<section id="gallery" class="wow fadeInUp" style="visibility: visible;animation-name: fadeInUp;">

    <div class="container">
        <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from the recent events</p>
        </div>
    </div>

        <div class="owl-carousel gallery-carousel owl-loaded owl-drag">
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transition: all 0s ease 0s; width: 5038px; transform: translate3d(-839px, 0px, 0px);">
                    <?php $__currentLoopData = $gallery->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="owl-item cloned" style="width: 279.84px;">
                <a href="<?php echo e($photo->getUrl()); ?>" class="venobox" data-gall="gallery-carousel"><img src="<?php echo e($photo->getUrl()); ?>" alt="<?php echo e($gallery->name); ?>" title="<?php echo e($gallery->name); ?>"></a>
            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <div class="owl-nav disabled">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot active">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div><div class="owl-dot">
                    <span></span>
                </div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div>
            </div>
        </div>


</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/gallery.blade.php ENDPATH**/ ?>