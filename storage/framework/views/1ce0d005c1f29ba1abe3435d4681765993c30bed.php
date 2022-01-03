<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo e(env('APP_NAME', 'TheEvent')); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset('lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">



<!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('frontend/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('frontend/css/style.css')); ?>" rel="stylesheet">

</head>

<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?php echo e(asset('lib/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/jquery/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/superfish/hoverIntent.js')); ?>"></script>
<script src="<?php echo e(asset('lib/superfish/superfish.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/venobox/venobox.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>

<!-- Contact Form JavaScript File -->
<script src="<?php echo e(asset('js/contactform.js')); ?>"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\event\resources\views/layouts/main.blade.php ENDPATH**/ ?>