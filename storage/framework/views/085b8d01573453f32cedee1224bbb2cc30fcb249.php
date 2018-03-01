<div class="panel panel-default">
    <div class="panel-body">
        <a href="<?php echo e(route('topics.create')); ?>" class="btn btn-success btn-block" aria-label="Left Align">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新建帖子
        </a>
    </div>
</div>

<?php if(count($active_users)): ?>
    <div class="panel panel-default">
        <div class="panel-body active-users">

            <div class="text-center">活跃用户</div>
            <hr>
            <?php $__currentLoopData = $active_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $active_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="media" href="<?php echo e(route('users.show', $active_user->id)); ?>">
                    <div class="media-left media-middle">
                        <img src="<?php echo e($active_user->avatar); ?>" width="24px" height="24px" class="img-circle media-object">
                    </div>

                    <div class="media-body">
                        <span class="media-heading"><?php echo e($active_user->name); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php endif; ?>