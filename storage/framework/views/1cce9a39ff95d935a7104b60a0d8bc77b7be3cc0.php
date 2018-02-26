<div class="media">
    <div class="avatar pull-left">
        <a href="<?php echo e(route('users.show', $notification->data['user_id'])); ?>">
        <img class="media-object img-thumbnail" alt="<?php echo e($notification->data['user_name']); ?>" src="<?php echo e($notification->data['user_avatar']); ?>"  style="width:48px;height:48px;"/>
        </a>
    </div>

    <div class="infos">
        <div class="media-heading">
            <a href="<?php echo e(route('users.show', $notification->data['user_id'])); ?>"><?php echo e($notification->data['user_name']); ?></a>
            评论了
            <a href="<?php echo e($notification->data['topic_link']); ?>"><?php echo e($notification->data['topic_title']); ?></a>

            
            <span class="meta pull-right" title="<?php echo e($notification->created_at); ?>">
                <span class="glyphicon glyphicon-clock" aria-hidden="true"></span>
                <?php echo e($notification->created_at->diffForHumans()); ?>

            </span>
        </div>
        <div class="reply-content">
            <?php echo $notification->data['reply_content']; ?>

        </div>
    </div>
</div>
<hr>