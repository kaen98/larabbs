<?php $__env->startSection('title', '无权限访问'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php if(Auth::check()): ?>
                <div class="alert alert-danger text-center">
                    当前登录账号无后台访问权限。
                </div>
            <?php else: ?>
                <div class="alert alert-danger text-center">
                    请登录以后再操作
                </div>

                <a class="btn btn-lg btn-primary btn-block" href="<?php echo e(route('login')); ?>">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                    登 录
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>