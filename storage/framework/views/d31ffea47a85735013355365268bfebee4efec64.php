<?php $__env->startSection('title'); ?>
我的通知
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 class="text-center">
                        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> 我的通知
                    </h3>
                    <hr>

                    <?php if($notifications->count()): ?>

                        <div class="notification-list">
                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('notifications.types._' . snake_case(class_basename($notification->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php echo $notifications->render(); ?>

                        </div>

                    <?php else: ?>
                        <div class="empty-block">没有消息通知！</div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>