<?php if(Session::has('message')): ?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('danger')): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo e(Session::get('danger')); ?>

    </div>
<?php endif; ?>