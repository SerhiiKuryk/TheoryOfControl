<div>


    <!--<div class="navbar navbar-inverse">-->
    <div class="navbar navbar-primary">
        <div class="container-fluid">

            <?php if(Auth::check()==false): ?>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="font-size: 20pt;">HandyBlog</a>
            <?php else: ?>
                <?php if(Sentinel::getUser()->roles()->first()->slug == 'admin'): ?>
                        <a class="navbar-brand" href="<?php echo e(url('/ahome')); ?>">HandyBlog</a>
                <?php elseif(Sentinel::getUser()->roles()->first()->slug == 'moderator'): ?>
                                <a class="navbar-brand" href="<?php echo e(url('/mhome')); ?>">HandyBlog</a>
                <?php elseif(Sentinel::getUser()->roles()->first()->slug == 'user'): ?>
                                        <a class="navbar-brand" href="<?php echo e(url('/uhome')); ?>">HandyBlog</a>
                <?php endif; ?>

            <?php endif; ?>

                                            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(url('/create')); ?>" class="btn btn-success">Створити статтю</a></li>
                                            <?php if(Sentinel::check()): ?>
                    <li><a href="<?php echo e(url('/manage')); ?>" class="btn btn-warning">Мої статті</a></li>
                        <?php endif; ?>
                <li>
                    <form class="navbar-form" role="search">
                        <div class="input-group">

                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Фільтр</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#contains">По назві</a></li>
                                    <li><a href="#its_equal">По автору</a></li>
                                </ul>
                            </div>

                            <input type="text" class="form-control" placeholder="Пошук">
                            <span class="input-group-btn">
							<button type="reset" class="btn btn-default">
								<span class="glyphicon glyphicon-remove">
									<span class="sr-only">Close</span>
								</span>
							</button>
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only">Search</span>
								</span>
							</button>
						</span>
                        </div>
                    </form>



                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if(Sentinel::check()): ?>
                    <li >
                        <form action="/logout" method="POST" id="logout-form">
                            <?php echo e(csrf_field()); ?>

                            <ul class="nav navbar-nav navbar-right" >
                            <li style="margin-right: 20px;"><a href="#" onClick="document.getElementById('logout-form').submit()">Logout</a>
                            </li>
                            </ul>
                        </form>
                    </li>
                <?php else: ?>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <ul class="nav nav-pills nav-justified navbar-default">
        <li class="nav-item">
            <a class="nav-link active" href="#">Всі категорії</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/food">Їжа</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/style">Стиль</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/fun">Розваги</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/sport">Спорт</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/science">Наука</a>
        </li>
    </ul>
</div>
