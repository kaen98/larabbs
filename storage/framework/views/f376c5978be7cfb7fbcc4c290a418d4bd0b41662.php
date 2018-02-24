<?php $__env->startSection('content'); ?>
<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    作者：<?php echo e($topic->user->name); ?>

                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="<?php echo e(route('users.show', $topic->user->id)); ?>">
                            <img class="thumbnail img-responsive" src="<?php echo e($topic->user->avatar); ?>" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    <?php echo e($topic->title); ?>

                </h1>

                <div class="article-meta text-center">
                    <?php echo e($topic->created_at->diffForHumans()); ?>

                    ⋅
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    <?php echo e($topic->reply_count); ?>

                </div>

                <div class="topic-body">
                    <?php echo $topic->body; ?>

                </div>

                <div class="operate">
                    <hr>
                    <a href="<?php echo e(route('topics.edit', $topic->id)); ?>" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-edit"></i> 编辑
                    </a>
                    <a href="#" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-trash"></i> 删除
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>