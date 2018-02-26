<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Reply
                    <a class="btn btn-success pull-right" href="<?php echo e(route('replies.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                <?php if($replies->count()): ?>
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Topic_id</th> <th>User_id</th> <th>Content</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><strong><?php echo e($reply->id); ?></strong></td>

                                    <td><?php echo e($reply->topic_id); ?></td> <td><?php echo e($reply->user_id); ?></td> <td><?php echo e($reply->content); ?></td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('replies.show', $reply->id)); ?>">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="<?php echo e(route('replies.edit', $reply->id)); ?>">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="<?php echo e(route('replies.destroy', $reply->id)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo $replies->render(); ?>

                <?php else: ?>
                    <h3 class="text-center alert alert-info">Empty!</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>