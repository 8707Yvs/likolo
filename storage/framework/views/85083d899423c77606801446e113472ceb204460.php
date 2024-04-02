
<?php $__env->startSection('title', 'Openai'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Openai';
$data['title'] = 'Openai';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close"
                    title="<?php echo e(__('Close')); ?>">
                    <span aria-hidden="true" style="color:red;">&times;</span></button></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <!-- row started -->
        <div class="col-lg-12">
            <div class="card dashboard-card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('All Openai')); ?></h5>
                    <div>
                        <div class="widgetbar">
                            <button type="button" class="float-right btn btn-danger-rgba mr-2" data-toggle="modal"
                                data-target="#bulk_delete" title="<?php echo e(__('Delete Selected')); ?>"><i
                                    class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
                        </div>
                    </div>
                </div>
                <!-- card body started -->
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- table to display faq start -->
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <th>
                                    <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                        value="all" />
                                    <label for="checkboxAll" class="material-checkbox"></label> #
                                </th>
                                <th><?php echo e(__('Genrate')); ?></th>
                                <th><?php echo e(__('Prompt')); ?></th>
                                <th><?php echo e(__('Response')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </thead>
                             <tbody>
                                <?php $__currentLoopData = $openai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($test)): ?>
                                <tr>
                                    <td>
                                        <input type='checkbox' form='bulk_delete_form'
                                            class='check filled-in material-checkbox-input' name='checked[]'
                                            value="<?php echo e($test->id); ?>" id='checkbox<?php echo e($test->id); ?>'>
                                        <label for='checkbox<?php echo e($test->id); ?>' class='material-checkbox'></label>
                                        <?php echo $key+1; ?>
                                        <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            title="<?php echo e(__('Close')); ?>">&times;</button>
                                                        <div class="delete-icon"></div>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4 class="modal-heading"><?php echo e(__('Are You Sure')); ?> ?</h4>
                                                        <p><?php echo e(__('Do you really want to delete selected item ? This process
                                                    cannot be undone')); ?>.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form id="bulk_delete_form" method="post"
                                                            action="<?php echo e(route('openai.bulk.delete')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('POST'); ?>
                                                            <button type="reset" class="btn btn-gray translate-y-3"
                                                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                            <button type="submit"
                                                                class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo e($test->generate); ?>

                                    </td>
                                    <td>
                                        <?php echo e($test->prompt); ?>

                                    </td>
                                    <?php if($test->generate == 'Image Generate'): ?>
                                    <?php if(!empty($test->response)): ?>
                                    <td>
                                        <div class="ai-generate-image">
                                            <img src="<?php echo e($test->response); ?>" class="img-fluid img-circle" alt="">
                                            <div class="img-output-icon">
                                                <ul>
                                                    <li><a href="<?php echo e($test->response); ?>" title="Download" download><i class="feather icon-download"></i></a></li>
                                                    <li><a href="<?php echo e($test->response); ?>" data-lightbox="homePortfolio" title="View" target="_blank"><i class="feather icon-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <?php endif; ?>                                     
                                    <?php else: ?>
                                     <?php
                                        $jsonData = $test->response;
                                        $decodedData = json_decode($jsonData, true);
                                    ?>
                                    <td><?php echo e($decodedData['content'] ?? ''); ?></td>
                                     <?php endif; ?>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-round btn-outline-primary" type="button"
                                                id="CustomdropdownMenuButton1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                title="<?php echo e(__('Settings')); ?>"><i
                                                    class="feather icon-more-vertical-"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                                <a class="dropdown-item btn btn-link" data-toggle="modal"
                                                    data-target="#delete<?php echo e($test->id); ?>" title="<?php echo e(__('Delete')); ?>">
                                                    <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                                </a>
                                            </div>
                                        </div>
                                        ​
                                        <!-- delete Modal start -->
                                        <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($test->id); ?>"
                                            tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleSmallModalLabel">
                                                            <?php echo e(__('Delete')); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" title="<?php echo e(__('Close')); ?>">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                        <p><?php echo e(__('Do you really want to delete')); ?> <b><?php echo e($test->title); ?></b>
                                                            ? <?php echo e(__('This process cannot be undone.')); ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="<?php echo e(url('openai/delete/'.$test->id)); ?>"
                                                            class="pull-right">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field("DELETE")); ?>

                                                            <button type="reset" class="btn btn-secondary"
                                                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                            <button type="submit"
                                                                class="btn btn-primary"><?php echo e(__('Yes')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Model ended -->
                                        ​
                                    </td>

                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- table to display faq data end -->
                    </div><!-- table-responsive div end -->
                </div><!-- card body end -->

            </div><!-- col end -->
        </div>
    </div>
</div>
<!-- row end -->
<br><br>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url('admin_assets/assets/js/lightbox-plus-jquery.min.js')); ?>"></script>
<script>
    $("#checkboxAll").on('click', function () {
$('input.check').not(this).prop('checked', this.checked);
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eclass\resources\views/admin/openai/user.blade.php ENDPATH**/ ?>