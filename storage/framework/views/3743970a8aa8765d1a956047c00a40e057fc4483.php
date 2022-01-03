<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <img src="img/logo.png" alt="TheEvenet">
          <p><?php echo e($settings['footer_description'] ?? ''); ?></p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            <?php if(auth()->guard()->guest()): ?>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo e(route('login')); ?>">Login</a></li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo e(route('admin.home')); ?>">Admin Panel</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            <?php if(auth()->guard()->guest()): ?>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo e(route('login')); ?>">Login</a></li>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo e(route('admin.home')); ?>">Admin Panel</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            <?php echo $settings['footer_address'] ?? ''; ?><br>
            <strong>Phone:</strong> <?php echo e($settings['contact_phone']); ?><br>
            <strong>Email:</strong> <?php echo e($settings['contact_email']); ?><br>
          </p>

          <div class="social-links">
            <a href="<?php echo e($settings['footer_twitter'] ?? ''); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo e($settings['footer_facebook'] ?? ''); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo e($settings['footer_instagram'] ?? ''); ?>" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="<?php echo e($settings['footer_googleplus'] ?? ''); ?>" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="<?php echo e($settings['footer_linkedin'] ?? ''); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><?php echo e(env('APP_NAME', 'TheEvent')); ?></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- #footer -->
<?php /**PATH C:\xampp\htdocs\event\resources\views/partials/footer.blade.php ENDPATH**/ ?>