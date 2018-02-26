<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                LaraBBS
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="<?php echo e(active_class(if_route('topics.index'))); ?>"><a href="<?php echo e(route('topics.index')); ?>">话题</a></li>
                <li class="<?php echo e(active_class((if_route('categories.show') && if_route_param('category', 1)))); ?>"><a href="<?php echo e(route('categories.show', 1)); ?>">分享</a></li>
                <li class="<?php echo e(active_class((if_route('categories.show') && if_route_param('category', 2)))); ?>"><a href="<?php echo e(route('categories.show', 2)); ?>">教程</a></li>
                <li class="<?php echo e(active_class((if_route('categories.show') && if_route_param('category', 3)))); ?>"><a href="<?php echo e(route('categories.show', 3)); ?>">问答</a></li>
                <li class="<?php echo e(active_class((if_route('categories.show') && if_route_param('category', 4)))); ?>"><a href="<?php echo e(route('categories.show', 4)); ?>">公告</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">登录</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">注册</a></li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo e(route('topics.create')); ?>">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="<?php echo e(route('notifications.index')); ?>" class="notifications-badge" style="margin-top: -2px;">
                            <span class="badge badge-<?php echo e(Auth::user()->notification_count > 0 ? 'hint' : 'fade'); ?> " title="消息提醒">
                                <?php echo e(Auth::user()->notification_count); ?>

                            </span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="<?php echo e(Auth::user()->avatar); ?>" width="30px" height="30px">
                            </span>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(route('users.show', Auth::id())); ?>">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    个人中心
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('users.edit', Auth::id())); ?>">编辑资料</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    退出登录
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>