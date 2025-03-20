<?php if(Session::has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(Session::get('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php if(Session::has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(Session::get('error')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Downloads\laravel-job-portal-master\laravel-job-portal-master\resources\views/front/message.blade.php ENDPATH**/ ?>