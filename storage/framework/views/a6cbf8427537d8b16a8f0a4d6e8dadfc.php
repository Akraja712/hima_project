

<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Paid Withdrawals Reports')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Paid Withdrawals Reports')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
          

            <div class="card-body">
                <!-- Auto-Submit Date Filter Form -->
                <form method="GET" action="<?php echo e(route('withdrawalsreports.index')); ?>" id="filter-form" class="mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="date"><?php echo e(__('Select Date')); ?></label>
                            <input type="date" name="date" id="date" class="form-control" value="<?php echo e(request('date', $date)); ?>">
                        </div>
                    </div>
                </form>

                <div class="alert alert-success">
                    <strong><?php echo e(__('Grand Total: ')); ?></strong> 
                    $<?php echo e(number_format($grandTotal, 2)); ?>

                </div>

                <div class="table-responsive">
                    <table class="table" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th><?php echo e(__('Date')); ?></th>
                                <th><?php echo e(__('Total Amount')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e(\Carbon\Carbon::parse($withdrawal->date)->format('d-m-Y')); ?></td>
                                    <td>$<?php echo e(number_format($withdrawal->total, 2)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <?php echo e(__('No withdrawals found for the selected date.')); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Auto-Submit Script -->
<script>
    document.getElementById('date').addEventListener('change', function () {
        document.getElementById('filter-form').submit();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hima_project\resources\views/withdrawalsreports/index.blade.php ENDPATH**/ ?>