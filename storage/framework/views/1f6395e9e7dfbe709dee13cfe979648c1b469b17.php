<?php $__env->startSection('title', $user->name . ' 的个人中心'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive" src="<?php echo e($user->avatar); ?>" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>个人简介</strong></h4>
                        <p><?php echo e($user->introduction); ?></p>
                        <hr>
                        <h4><strong>注册于</strong></h4>
                        <p><?php echo e($user->created_at->diffForHumans()); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;"><?php echo e($user->name); ?> <small><?php echo e($user->email); ?></small></h1>
                </span>
            </div>
        </div>
        <hr>

        
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="<?php echo e(active_class(if_query('tab', null))); ?>">
                        <a href="<?php echo e(route('users.show', $user->id)); ?>">Ta 的话题</a>
                    </li>
                    <li class="<?php echo e(active_class(if_query('tab', 'replies'))); ?>">
                        <a href="<?php echo e(route('users.show', [$user->id, 'tab' => 'replies'])); ?>">Ta 的回复</a>
                    </li>
                </ul>
                <?php if(if_query('tab', 'replies')): ?>
                    <?php echo $__env->make('users._replies', ['replies' => $user->replies()->with('topic')->recent()->paginate(5)], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('users._topics', ['topics' => $user->topics()->recent()->paginate(5)], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>