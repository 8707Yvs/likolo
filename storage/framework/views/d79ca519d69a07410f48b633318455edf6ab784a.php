
<?php $__env->startSection('title', 'Edit Language Translation - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Edit Language Translation';
$data['title'] = 'Site Setting';
$data['title1'] = 'Language Translation';
$data['title1'] = 'Edit Language Translation';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
  <div class="row">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close" title="<?php echo e(__('Close')); ?>">
          <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <!-- row started -->
    <div class="col-lg-12">
      <div class="card dashboard-card m-b-30">
        <!-- Card header will display you the heading -->
        <div class="card-header">
          <h5 class="card-box"><?php echo e(__('Edit Language Translation')); ?></h5>
        </div>
        <div class="widgetbar">
          <a href="<?php echo e(url('change/words')); ?>" class="btn btn-primary-rgba" title="<?php echo e(__('Back')); ?>"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
        </div>
        <!-- card body started -->
        <div class="card-body">
          <form action="<?php echo e(action('ChangewordController@update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
          <input type="hidden" name="langcode" value="<?php echo e($langCode); ?>">
          <textarea name="content" cols="30" rows="15" class="form-control"><?php echo e($jsonContents); ?></textarea>
          <div class="row mt-4">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                <button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Update')); ?>"><i class="fa fa-check-circle"></i>
                  <?php echo e(__("Update")); ?></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eclass\resources\views/admin/changeword/edit.blade.php ENDPATH**/ ?>