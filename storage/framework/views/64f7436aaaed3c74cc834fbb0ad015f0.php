

<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Screen Notifications')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Screen Notifications')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-button'); ?>
    <a href="<?php echo e(route('screen_notifications.create')); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('Create New Screen Notifications')); ?>" class="btn btn-sm btn-primary">
        <i class="ti ti-plus"></i> <?php echo e(__('Add New Screen Notifications')); ?>

    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
            <form action="<?php echo e(route('screen_notifications.index')); ?>" method="GET" class="mb-3">
            <div class="row align-items-end">
                <!-- Day Filter -->
                <div class="col-md-3">
                    <label for="day"><?php echo e(__('Filter by Day')); ?></label>
                    <select name="day" id="day" class="form-control" onchange="this.form.submit()">
                        <option value=""><?php echo e(__('All')); ?></option>
                        <?php $__currentLoopData = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($day); ?>" <?php echo e(request()->get('day') == $day ? 'selected' : ''); ?>>
                                <?php echo e(__($day)); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- Gender Filter -->
                <div class="col-md-3">
                    <label for="gender"><?php echo e(__('Filter by Gender')); ?></label>
                    <select name="gender" id="gender" class="form-control" onchange="this.form.submit()">
                        <option value=""><?php echo e(__('All')); ?></option>
                        <option value="male" <?php echo e(request()->get('gender') == 'male' ? 'selected' : ''); ?>><?php echo e(__('Male')); ?></option>
                        <option value="female" <?php echo e(request()->get('gender') == 'female' ? 'selected' : ''); ?>><?php echo e(__('Female')); ?></option>
                    </select>
                </div>

                <!-- Language Filter -->
                <div class="col-md-3">
                    <label for="language"><?php echo e(__('Filter by Language')); ?></label>
                    <select name="language" id="language" class="form-control" onchange="this.form.submit()">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($language); ?>" <?php echo e(request()->get('language') == $language ? 'selected' : ''); ?>>
                                <?php echo e(ucfirst($language)); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </form>
            </div>

        <div class="card">
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table" id="pc-dt-simple">
                    <thead>
                        <tr>
                            <th width="300px"><?php echo e(__('Actions')); ?></th>
                            <th><?php echo e(__('ID')); ?></th>
                            <th><?php echo e(__('Title')); ?></th>
                            <th><?php echo e(__('Description')); ?></th>
                            <th><?php echo e(__('Gender')); ?></th>
                            <th><?php echo e(__('Language')); ?></th>
                            <th><?php echo e(__('Time')); ?></th>
                            <th><?php echo e(__('Day')); ?></th>
                            <th><?php echo e(__('Logo')); ?></th>
                            <th><?php echo e(__('Image')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $screen_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $screen_notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="Action">
                                    <span>
                                        <!-- Edit Button -->
                                        <div class="action-btn bg-info ms-2">
                                            <a href="#" data-url="<?php echo e(route('screen_notifications.edit', $screen_notification->id)); ?>"
                                               data-ajax-popup="true" data-title="<?php echo e(__('Edit Screen Notification')); ?>"
                                               class="btn btn-sm align-items-center" data-bs-toggle="tooltip" title="<?php echo e(__('Edit')); ?>">
                                                <i class="ti ti-pencil text-white"></i>
                                            </a>
                                        </div>
                                        <!-- Delete Button -->
                                        <div class="action-btn bg-danger ms-2">
                                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['screen_notifications.destroy', $screen_notification->id], 'id' => 'delete-form-' . $screen_notification->id]); ?>

                                                <a href="#" class="btn btn-sm align-items-center bs-pass-para" data-bs-toggle="tooltip" title="<?php echo e(__('Delete')); ?>"
                                                   onclick="confirmDelete(event, '<?php echo e($screen_notification->id); ?>')">
                                                    <i class="ti ti-trash text-white"></i>
                                                </a>
                                            <?php echo Form::close(); ?>

                                        </div>
                                    </span>
                                </td>
                                <td><?php echo e($screen_notification->id); ?></td>  
                                <td><?php echo e($screen_notification->title); ?></td>
                                <td><?php echo e($screen_notification->description); ?></td>
                                <td><?php echo e(ucfirst($screen_notification->gender)); ?></td>
                                <td><?php echo e(ucfirst($screen_notification->language)); ?></td>
                                <td><?php echo e($screen_notification->time); ?></td>
                                <td><?php echo e(ucfirst($screen_notification->day)); ?></td>
                                <td>
                                    <?php if(!empty($screen_notification->logo)): ?>
                                        <img src="<?php echo e(asset('storage/app/public/' . $screen_notification->logo)); ?>" class="img-fluid" width="50px">
                                    <?php else: ?>
                                        <?php echo e(__('No Logo')); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(!empty($screen_notification->image)): ?>
                                        <img src="<?php echo e(asset('storage/app/public/' . $screen_notification->image)); ?>" class="img-fluid" width="50px">
                                    <?php else: ?>
                                        <?php echo e(__('No Image')); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#pc-dt-simple').DataTable();
    });

    // Confirmation for delete action
    function confirmDelete(event, id) {
        event.preventDefault();
        if (confirm("Are you sure you want to delete this notification?")) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hima_project\resources\views/screen_notifications/index.blade.php ENDPATH**/ ?>