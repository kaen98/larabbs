<?php $__env->startSection('title', isset($category) ? $category->name : '话题列表'); ?>;

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-9 col-md-9 topic-list">
        <?php if(isset($category)): ?>
            <div class="alert alert-info" role="alert">
                <?php echo e($category->name); ?> ：<?php echo e($category->description); ?>

            </div>
        <?php endif; ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">最后回复</a></li>
                    <li role="presentation"><a href="#">最新发布</a></li>
                </ul>
            </div>

            <div class="panel-body">
                
                <?php echo $__env->make('topics._topic_list', ['topics' => $topics], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <?php echo $topics->render(); ?>

            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        <?php echo $__env->make('topics._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>