<div class="reply-list">
    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" media"  name="reply<?php echo e($reply->id); ?>" id="reply<?php echo e($reply->id); ?>">
            <div class="avatar pull-left">
                <a href="<?php echo e(route('users.show', [$reply->user_id])); ?>">
                <img class="media-object img-thumbnail" alt="<?php echo e($reply->user->name); ?>" src="<?php echo e($reply->user->avatar); ?>"  style="width:48px;height:48px;"/>
                </a>
            </div>

            <div class="infos">
                <div class="media-heading">
                    <a href="<?php echo e(route('users.show', [$reply->user_id])); ?>" title="<?php echo e($reply->user->name); ?>">
                    <?php echo e($reply->user->name); ?>

                    </a>
                    <span> •  </span>
                    <span class="meta" title="<?php echo e($reply->created_at); ?>"><?php echo e($reply->created_at->diffForHumans()); ?></span>

                    
                    <span class="meta pull-right">
                        <a title="删除回复">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </span>
                </div>
                <div class="reply-content">
                    <?php echo $reply->content; ?>

                </div>
            </div>
        </div>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>