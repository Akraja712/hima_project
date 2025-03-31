<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Add Whatsapp Link')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('whatsapplinks.index')); ?>"><?php echo e(__('Whatsapp Link')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Add Whatsapp Link')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="card-header">
                <h5><?php echo e(__('Add New Whatsapp Link')); ?></h5>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('whatsapplinks.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <!-- Text Input -->
                    <div class="form-group">
                        <label for="link" class="form-label"><?php echo e(__('Link')); ?></label>
                        <input type="text" id="link" name="link" class="form-control" value="<?php echo e(old('link')); ?>" required>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="form-group mt-3">
                        <label for="language" class="form-label"><?php echo e(__('Language')); ?></label>
                        <select name="language" class="form-control" required>
                            <option value='Hindi' <?php echo e(old('language') == 'Hindi' ? 'selected' : ''); ?>>Hindi</option>
                            <option value='Telugu' <?php echo e(old('language') == 'Telugu' ? 'selected' : ''); ?>>Telugu</option>
                            <option value='Malayalam' <?php echo e(old('language') == 'Malayalam' ? 'selected' : ''); ?>>Malayalam</option>
                            <option value='Kannada' <?php echo e(old('language') == 'Kannada' ? 'selected' : ''); ?>>Kannada</option>
                            <option value='Punjabi' <?php echo e(old('language') == 'Punjabi' ? 'selected' : ''); ?>>Punjabi</option>
                            <option value='Tamil' <?php echo e(old('language') == 'Tamil' ? 'selected' : ''); ?>>Tamil</option>
                        </select>
                    </div>

                    <!-- Save Button -->
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                        <a href="<?php echo e(route('whatsapplinks.index')); ?>" class="btn btn-secondary"><?php echo e(__('Cancel')); ?></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hima_project\resources\views/whatsapplinks/create.blade.php ENDPATH**/ ?>