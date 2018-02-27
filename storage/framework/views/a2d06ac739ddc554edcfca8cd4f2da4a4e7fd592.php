<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'LaraBBS'); ?> - <?php echo e(setting('site_name', 'Laravel 进阶教程')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', setting('seo_description', 'LaraBBS 爱好者社区。')); ?>" />
    <meta name="keyword" content="<?php echo $__env->yieldContent('keyword', setting('seo_keyword', 'LaraBBS,社区,论坛,开发者论坛')); ?>" />
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <div id="app" class="<?php echo e(route_class()); ?>-page">

        <?php echo $__env->make('layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">
            <?php echo $__env->make('layouts._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <?php if(app()->isLocal()): ?>
        <?php echo $__env->make('sudosu::user-selector', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>