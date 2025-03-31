<?php echo e(Form::model($whatsapplink, ['route' => ['whatsapplinks.update', $whatsapplink->id], 'method' => 'PUT', 'id' => 'editForm'])); ?>

<div class="modal-body">
    <div class="row">
        <!-- Link Input -->
        <div class="form-group col-md-12">
            <?php echo e(Form::label('link', __('Link'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('link', null, ['class' => 'form-control', 'required' => 'required'])); ?>

        </div>

        <!-- Language Dropdown -->
        <div class="form-group col-md-12 mt-3">
            <?php echo e(Form::label('language', __('Language'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::select('language', [
                'Hindi' => __('Hindi'),
                'Telugu' => __('Telugu'),
                'Malayalam' => __('Malayalam'),
                'Kannada' => __('Kannada'),
                'Punjabi' => __('Punjabi'),
                'Tamil' => __('Tamil')
            ], null, ['class' => 'form-control', 'required' => 'required'])); ?>

        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
    <button type="submit" class="btn btn-primary"><?php echo e(__('Update WhatsApp Link')); ?></button>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH C:\xampp\htdocs\hima_project\resources\views/whatsapplinks/edit.blade.php ENDPATH**/ ?>