
<section id="abouts" class="about">
    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">

                

                <h3><?php echo $settings['about_title']; ?>

                </h3>
                <p><?php echo $settings['about_description']; ?></p>
                <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="icon-box">
                        <div class="icon"><i class="<?php echo e($hotel->address); ?>" ></i></div>
                        <h4 class="title"><a href=""><?php echo e($hotel->name); ?></a></h4>
                        <p class="description"><?php echo e($hotel->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>


    </div>
</section>
<?php /**PATH C:\xampp\htdocs\event\resources\views/sections/about.blade.php ENDPATH**/ ?>