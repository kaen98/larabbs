<?php if(count($topics)): ?>

<ul class="list-group">
    <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <a href="<?php echo e(route('topics.show', $topic->id)); ?>">
                <?php echo e($topic->title); ?>

            </a>
            <span class="meta pull-right">
                <?php echo e($topic->reply_count); ?> 回复
                <span> ⋅ </span>
                <?php echo e($topic->created_at->diffForHumans()); ?>

            </span>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php else: ?>
   <div class="empty-block">暂无数据 ~_~ </div>
<?php endif; ?>


<?php echo $topics->render(); ?>