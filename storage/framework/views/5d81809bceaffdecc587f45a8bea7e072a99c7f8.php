
<?php $__env->startSection('title', 'Create Language'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Create Language';
$data['title'] = 'Site Setting';
$data['title1'] = 'Language';
$data['title2'] = 'Create Language';
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
                    <h5 class="card-box"><?php echo e(__('Create Language')); ?></h5>
                    <div>
                      <div class="widgetbar">
                      <a href="<?php echo e(route('show.lang')); ?>" class="btn btn-primary-rgba" title="<?php echo e(__('Back')); ?>"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
                      </div>
                    </div>
                </div>                
                <!-- card body started -->
                <div class="card-body">
                 <!-- form start -->
                 <form id="demo-form2" method="post" action="<?php echo e(action('LanguageController@store')); ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                          <!-- Local -->
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="text-dark" for="local"><?php echo e(__('Local')); ?> : <span class="text-danger">*</span></label>
                              <input class="form-control <?php $__errorArgs = ['local'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('local')); ?>" type="text" name="local" placeholder="<?php echo e(__('Please enter language local name')); ?>" required>
                            </div>
                          </div>
                          <!-- Name -->
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="text-dark" for="name"><?php echo e(__('Name')); ?> : <span class="text-danger">*</span></label>
                              <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" name="name" id="sub_heading" placeholder="<?php echo e(__('Please enter language name')); ?> eg:English" required>
                            </div>
                          </div>
                          <!-- SetDefault -->
                          <div class="form-group col-md-2">
                              <label for="exampleInputDetails"><?php echo e(__('Set Default')); ?> :</label><br>
                              <input type="checkbox" class="custom_toggle" name="def" checked />
                              <input type="hidden"  name="free" value="0" for="status" id="status">
                          </div>                
                    </div>                   
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger-rgba mr-1" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                        <button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Create')); ?>"><i class="fa fa-check-circle"></i>
                        <?php echo e(__("Create")); ?></button>
                    </div>                  
                  </form>
                  <!-- form end -->
                </div>
                <!-- card body end -->
        </div><!-- col end -->
    </div>
</div>
</div><!-- row end -->
    <br><br>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eclass\resources\views/admin/language/create.blade.php ENDPATH**/ ?>