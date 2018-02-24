<?php if(count($topics)): ?>

    <ul class="media-list">
        <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="media">
                <div class="media-left">
                    <a href="<?php echo e(route('users.show', [$topic->user_id])); ?>">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="<?php echo e($topic->user->avatar); ?>" title="<?php echo e($topic->user->name); ?>">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="<?php echo e($topic->link()); ?>" title="<?php echo e($topic->title); ?>">
                            <?php echo e($topic->title); ?>

                        </a>
                        <a class="pull-right" href="<?php echo e($topic->link()); ?>" >
                            <span class="badge"> <?php echo e($topic->reply_count); ?> </span>
                        </a>
                    </div>

                    <div class="media-body meta">

                        <a href="<?php echo e(route('categories.show', $topic->category->id)); ?>" title="<?php echo e($topic->category->name); ?>">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             <?php echo e($topic->category->name); ?>

                        </a>

                        <span> • </span>
                        <a href="<?php echo e(route('users.show', [$topic->user_id])); ?>" title="<?php echo e($topic->user->name); ?>">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php echo e($topic->user->name); ?>

                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于"><?php echo e($topic->updated_at->diffForHumans()); ?></span>
                    </div>

                </div>
            </li>

            <?php if( ! $loop->last): ?>
                <hr>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

<?php else: ?>
   <div class="empty-block">暂无数据 ~_~ </div>
<?php endif; ?>