
<?php $__env->startSection('title','Push Notifications'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php
$data['heading'] = 'Push Notifications';
$data['title'] = 'Push Notifications';
?>
<?php echo $__env->make('admin.layouts.topbar',$data, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contentbar">
    <div class="row">
        <div class="col-md-8">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <form action="<?php echo e(route('admin.push.notif')); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Select Users Group')); ?>: <span
                                            class="text-danger">*</span> </label>
                                    <select required data-placeholder="Please select user group" name="user_group" id=""
                                        class="select2 form-control">
                                        <option value=""><?php echo e(__('Select Users Group')); ?></option>
                                        <option <?php echo e(old('user_group') == 'all_users' ? "selected" : ""); ?> value="all_customers">
                                            <?php echo e(__('All Users')); ?> </option>
                                        <option <?php echo e(old('user_group') == 'all_instructors' ? "selected" : ""); ?>

                                            value="all_sellers">
                                            <?php echo e(__('All Instructors')); ?> </option>
                                        <option <?php echo e(old('user_group') == 'all_admins' ? "selected" : ""); ?> value="all_admins">
                                            <?php echo e(__('All Admin')); ?> </option>
                                        <option <?php echo e(old('user_group') == 'all' ? "selected" : ""); ?> value="all">
                                            <?php echo e(__('All')); ?>

                                            (<?php echo e(__('Users')); ?> + <?php echo e(__('Instructors')); ?> +
                                            <?php echo e(__('Admin')); ?>)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Subject')); ?>: <span
                                            class="text-danger">*</span></label>
                                    <input placeholder="" type="text" class="form-control" required name="subject"
                                        value="<?php echo e(old('subject')); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Notification Body')); ?> : <span
                                            class="text-danger">*</span> </label>
                                    <textarea required placeholder="" class="form-control" name="message" id="" cols="3"
                                        rows="5"><?php echo e(old('message')); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Target URL')); ?> : </label>
                                    <input value="<?php echo e(old('target_url')); ?>" class="form-control" name="target_url" type="url"
                                        placeholder="<?php echo e(url('/')); ?>">
                                    <small class="text-info">
                                        <i class="fa fa-question-circle"></i> <?php echo e(__('On click of notification where you want to
                                        redirect the user')); ?>.
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Notification Icon')); ?> : </label>
                                    <input value="<?php echo e(old('icon')); ?>" name="icon" class="form-control" type="url"
                                        placeholder="https://someurl/icon.png">
                                    <small class="text-info">
                                        <i class="fa fa-question-circle"></i><?php echo e(__('If not enter than default icon will use which you upload at time of create one signal app')); ?>.
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Image')); ?>: </label>
                                    <input  value="<?php echo e(old('image')); ?>" class="form-control" name="image" type="url"
                                        placeholder="https://someurl/image.png">
                                    <small class="text-info">
                                        <i class="fa fa-question-circle"></i> <b><?php echo e(__('Recommended Size')); ?>:
                                            <?php echo e(__('450x228PX')); ?>.</b>
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for=""><?php echo e(__('Show Button')); ?>: </label>
                                    <br>
                                    <label class="switch">
                                        <input type="checkbox" class="push" name="show_button"  <?php echo e(old('show_button') ? "checked" : ""); ?> />
                                        <span class="knob"></span>
                                    </label>
                                </div>
                                <div style="display: <?php echo e(old('show_button') ? 'block' : 'none'); ?>;" id="buttonBox">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Button Text')); ?>: <span
                                            class="text-danger">*</span></label>
                                    <input value="<?php echo e(old('btn_text')); ?>" class="form-control" name="btn_text" type="text"
                                        placeholder="Grab Now !">
                                </div>
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Button Target URL')); ?> : </label>
                                    <input value="<?php echo e(old('btn_url')); ?>" class="form-control" name="btn_url" type="url"
                                        placeholder="https://someurl/image.png">
                                    <small class="text-muted">
                                        <i class="fa fa-question-circle"></i> <?php echo e(__('On click of button where you want to redirect the users')); ?>.
                                    </small>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     <button type="reset" class="btn btn-danger-rgba" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i>
                              <?php echo e(__('Reset')); ?></button>
                                    <button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Send')); ?>"><i class="fa fa-check-circle"></i>
                                        <?php echo e(__('Send')); ?></button>
                                </div>
                            </div>
                        </form>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card dashboard-card m-b-30">
                <div class="card-header">
                    <a title="<?php echo e(__('Get your keys from here')); ?>" href="https://onesignal.com/" class="pull-right" target="__blank">
                        <i class="fa fa-key"></i> <?php echo e(__('Get your keys from here')); ?>

                    </a>
                    <br>
                     <form action="<?php echo e(route('onesignal.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="ONESIGNAL_APP_ID"><?php echo e(__('ONESIGNAL APP ID')); ?>: <span
                                    class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input id="password-field"  value="<?php echo e(env('ONESIGNAL_APP_ID')); ?>" type="password"  name="ONESIGNAL_APP_ID" class="form-control" placeholder="<?php echo e(__('Enter ONESIGNAL APP ID')); ?>">
                                <div class="input-group-prepend text-center">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ONESIGNAL_REST_API_KEY"> <?php echo e(__('ONESIGNAL REST API KEY')); ?>: <span
                                class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input id="password-fieldscds"  value="<?php echo e(env('ONESIGNAL_REST_API_KEY')); ?>" type="password"  name="ONESIGNAL_REST_API_KEY" class="form-control" placeholder="<?php echo e(__('Enter ONESIGNAL REST API KEY')); ?>">
                                <div class="input-group-prepend text-center">
                                <span toggle="#password-fieldscds" class="fa fa-fw fa-eye field-icon toggle-password"></span></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger-rgba" title="<?php echo e(__('Reset')); ?>"><i class="fa fa-ban"></i>
                              <?php echo e(__('Reset')); ?></button>
                            <button type="submit" class="btn btn-primary-rgba" title="<?php echo e(__('Update')); ?>"><i class="fa fa-check-circle"></i>
                              <?php echo e(__('Update')); ?></button>
                        </div>
                    </form>
                    <div class="clear-both"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $('.push').on('change', function () {
        if ($(this).is(":checked")) {
            $('input[name=btn_text]').attr('required', 'required');
            $('#buttonBox').show('fast');
        } else {
            $('input[name=btn_text]').removeAttr('required');
            $('#buttonBox').hide('fast');
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eclass\resources\views/admin/push_notification/index.blade.php ENDPATH**/ ?>