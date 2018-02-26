<?php if(count($replies)): ?>

<ul class="list-group">
    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <a href="<?php echo e($reply->topic->link(['#reply' . $reply->id])); ?>">
                <?php echo e($reply->topic->title); ?>

            </a>

            <div class="reply-content" style="margin: 6px 0;">
                <?php echo $reply->content; ?>

            </div>

            <div class="meta">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 回复于 <?php echo e($reply->created_at->diffForHumans()); ?>

            </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php else: ?>
   <div class="empty-block">暂无数据 ~_~ </div>
<?php endif; ?>


<?php echo $replies->appends(Request::except('page'))->render(); ?>