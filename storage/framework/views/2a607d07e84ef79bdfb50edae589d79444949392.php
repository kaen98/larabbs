<header>
	<h1>
		<a href="<?php echo e(route('admin_dashboard')); ?>"><?php echo e(config('administrator.title')); ?></a>
	</h1>

	<a href="#" id="menu_button"><div></div></a>
	<a href="#" id="filter_button" class="<?php echo e($configType === 'model' ? '' : 'hidden'); ?>"><div></div></a>

	<div id="mobile_menu_wrapper">
		<ul id="mobile_menu">
			<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('administrator::partials.menu_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>

	<ul id="menu">
		<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo $__env->make('administrator::partials.menu_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	<div id="right_nav">
		<?php if(count(config('administrator.locales')) > 0): ?>
			<ul id="lang_menu">
				<li class="menu">
				<span><?php echo e(config('app.locale')); ?></span>
					<?php if(count(config('administrator.locales')) > 1): ?>
						<ul>
							<?php $__currentLoopData = config('administrator.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if(config('app.locale') != $lang): ?>
									<li>
										<a href="<?php echo e(route('admin_switch_locale', array($lang))); ?>"><?php echo e($lang); ?></a>
									</li>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					<?php endif; ?>
				</li>
			</ul>
		<?php endif; ?>
		<a href="<?php echo e(url(config('administrator.back_to_site_path', '/'))); ?>" id="back_to_site"><?php echo e(trans('administrator::administrator.backtosite')); ?></a>
		<?php if(config('administrator.logout_path')): ?>
			<a href="<?php echo e(url(config('administrator.logout_path'))); ?>" id="logout"><?php echo e(trans('administrator::administrator.logout')); ?></a>
		<?php endif; ?>
	</div>
</header>