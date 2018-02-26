<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/sudo-su/css/app.css">

<div class="sudoSu">
    <div class="sudoSu__btn <?php echo e($hasSudoed ? 'sudoSu__btn--hasSudoed' : ''); ?>" id="sudosu-js-btn">
        <i class="fa fa-user-secret" aria-hidden="true"></i>
    </div>
    
    <div class="sudoSu__interface <?php echo e($hasSudoed ? 'sudoSu__interface--hasSudoed' : ''); ?> hidden" id="sudosu-js-interface">
        <?php if($hasSudoed): ?>
            <div class="sudoSu__infoLine">
                You are using account: <span><?php echo e($currentUser->name); ?></span>
            </div>
            
            <?php if($originalUser): ?>
                <div class="sudoSu__infoLine">
                    You are logged in as: <span><?php echo e($originalUser->name); ?></span>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo e(route('sudosu.return')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <input type="submit" class="sudoSu__resetBtn" value="<?php echo e($originalUser ? 'Return to original user' : 'Log out'); ?>">
            </form>
        <?php endif; ?>

        <form action="<?php echo e(route('sudosu.login_as_user')); ?>" method="post">
            <select name="userId" onchange="this.form.submit()">
                <option disabled selected>Sudo Su</option>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            <?php echo csrf_field(); ?>


            <input type="hidden" name="originalUserId" value="<?php echo e($originalUser->id ?? null); ?>">
        </form>
    </div>
</div>

<script>
    const btn = document.getElementById('sudosu-js-btn');
    const element = document.getElementById('sudosu-js-interface');

    btn.addEventListener('click', event => element.classList.toggle('hidden'));
</script>