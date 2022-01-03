<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light"><?php echo e(trans('panel.site_title')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span><?php echo e(trans('global.dashboard')); ?></span>
                        </p>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e(request()->is('admin/permissions*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'menu-open' : ''); ?>">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.userManagement.title')); ?></span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.permission.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.role.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.user.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setting_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.settings.index")); ?>" class="nav-link <?php echo e(request()->is('admin/settings') || request()->is('admin/settings/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-cogs">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.setting.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('speaker_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.speakers.index")); ?>" class="nav-link <?php echo e(request()->is('admin/speakers') || request()->is('admin/speakers/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.speaker.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>












                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('venue_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.services.index")); ?>" class="nav-link <?php echo e(request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-map-marker-alt">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.venue.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hotel_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.hotels.index")); ?>" class="nav-link <?php echo e(request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-hotel">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.hotel.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gallery_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.galleries.index")); ?>" class="nav-link <?php echo e(request()->is('admin/galleries') || request()->is('admin/galleries/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-images">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.gallery.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sponsor_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.sponsors.index")); ?>" class="nav-link <?php echo e(request()->is('admin/sponsors') || request()->is('admin/sponsors/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-hand-holding-usd">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.sponsor.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.faqs.index")); ?>" class="nav-link <?php echo e(request()->is('admin/faqs') || request()->is('admin/faqs/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-question">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.faq.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('amenity_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.facilities.index")); ?>" class="nav-link <?php echo e(request()->is('admin/facilities') || request()->is('admin/facilities/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-check">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.amenity.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('price_access')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.prices.index")); ?>" class="nav-link <?php echo e(request()->is('admin/prices') || request()->is('admin/prices/*') ? 'active' : ''); ?>">
                            <i class="fa-fw fas fa-money-bill">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.price.title')); ?></span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span><?php echo e(trans('global.logout')); ?></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\event\resources\views/partials/menu.blade.php ENDPATH**/ ?>