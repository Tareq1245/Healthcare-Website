<?php $__env->startPush('header'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div id="right-panel" class="right-panel">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($errors->any()): ?>

                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-danger">Erorr</span> <?php echo e($error); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php endif; ?>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Service Table</strong>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                        data-target="#createModal">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Created_At</th>
                                        <th>Updated_At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($service->title); ?></td>
                                            <td><?php echo e($service->message); ?></td>
                                            <td><?php echo e($service->created_at); ?></td>
                                            <td><?php echo e($service->updated_at); ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                                        data-target="#viewModal-<?php echo e($service->id); ?>">
                                                    <i class="fa fa-eye"></i>
                                                </button>

                                                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                                        data-target="#editModal-<?php echo e($service->id); ?>">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                        data-target="#deleteModal-<?php echo e($service->id); ?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
            <div class="animated">
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                     data-backdrop="static" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Create Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('admin.services.store')); ?>" method="post" id="createCategory" enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="title" placeholder="Text" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                        <div class="col-12 col-md-9"><textarea name="message" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                    document.getElementById('createCategory').submit();">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="modal fade" id="viewModal-<?php echo e($service->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">View</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo e($service->title); ?></p>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Created At</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo e($service->created_at); ?></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Updated At</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo e($service->updated_at); ?></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Message</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo e($service->message); ?></p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal-<?php echo e($service->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo e(route('admin.services.update', $service->id)); ?>" method="post" id="editcategory-<?php echo e($service->id); ?>" enctype="multipart/form-data" class="form-horizontal">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="title" placeholder="Text" class="form-control" value="<?php echo e($service->title); ?>">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                            <div class="col-12 col-md-9"><textarea name="message" id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?php echo e($service->message); ?></textarea></div>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                            document.getElementById('editcategory-<?php echo e($service->id); ?>').submit();">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModal-<?php echo e($service->id); ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Delete About</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        The about will be deleted !!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                        document.getElementById('deletecategory-<?php echo e($service->id); ?>').submit();">Confirm</button>
                                    <form action="<?php echo e(route('admin.services.destroy', $service->id)); ?>" style="display: none" id="deletecategory-<?php echo e($service->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- .content -->
            </div>


            <!-- .content -->
            <?php $__env->stopSection(); ?>

            <?php $__env->startPush('footer'); ?>

                <script src="<?php echo e(asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/jszip/dist/jszip.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>
                <script src="<?php echo e(asset('backend/assets/js/init-scripts/data-table/datatables-init.js')); ?>"></script>
                <script>
                    $(document).ready(function () {

                        (function ($) {

                            $('#filter').keyup(function () {

                                var rex = new RegExp($(this).val(), 'i');
                                $('.searchable tr').hide();
                                $('.searchable tr').filter(function () {
                                    return rex.test($(this).text());
                                }).show();

                            })

                        }(jQuery));

                    });
                </script>
                <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
                <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
                
            <?php $__env->stopPush(); ?>
        </div>
    </div>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\event\resources\views/admin/services/index.blade.php ENDPATH**/ ?>