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

                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('destroy', $reply)): ?>
                    <span class="meta pull-right">
                        <form action="<?php echo e(route('replies.destroy', $reply->id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="btn btn-default btn-xs pull-left">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </form>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="reply-content">
                    <?php echo $reply->content; ?>

                </div>
            </div>
        </div>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>