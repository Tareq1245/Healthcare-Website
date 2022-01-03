<header id="header" class="header-scrolled">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="<?php echo e(route('home')); ?>#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          <?php echo e(env('APP_NAME', 'The Event')); ?>

        </a>
      </h1>
    </div>

    <nav id="nav-menu-containers">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#intro">Home</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#abouts">About</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#speakers">Doctors</a></li>
          <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#facilities">Facility</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#services">Service</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#gallery">Gallery</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#supporters">Sponsors</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#contact">Contact</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#buy-tickets">Donations</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php /**PATH C:\xampp\htdocs\event\resources\views/partials/header.blade.php ENDPATH**/ ?>