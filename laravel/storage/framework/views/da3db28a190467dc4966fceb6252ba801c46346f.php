<?php $__env->startSection('content'); ?>



    <!--<ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="/food">Їжа</a>
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
    </ul>-->



    <!--<div class="blog-masthead">
        <div class="container-fluid">
            <nav class="blog-nav blog-nav-toggleable-md blog-nav-light bg-faded">
                <a class="blog-nav-item" href="/food">Їжа</a>
                <a class="blog-nav-item" href="/style">Стиль</a>
                <a class="blog-nav-item" href="/fun">Розваги</a>
                <a class="blog-nav-item" href="/sport">Спорт</a>
                <a class="blog-nav-item" href="/science">Наука</a>
            </nav>
        </div>
    </div>-->



    <!--<div class="panel panel-primary">
        <div class="panel-heading">
            All Posts
        </div>
        <div class="panel-body">
            <ul class="post-list">
                <li><a href="">Lorem ipsum dolor sit amet, consectetur</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur Lorem</a></li>
                <li><a href="">Lorem ipsum dolor sit amet, </a></li>
                <li><a href="">Lorem ipsum dolor sit amet, consectetur Lorem </a></li>
            </ul>
        </div>
    </div>-->




<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div>

    <div class="col-sm-2 container-fluid">
        <div class="tabs">
            <h4>Популярні автори</h4>
                 <ul class="nav nav-tabs">
                     <li class=" nav-item active">
                         <a role="tab" class="nav-link active"  data-toggle="tab" href="#tab-1">Тиждень</a>
                     </li>
                     <li class="nav-item">
                         <a data-toggle="tab" class="navbar-link disabled" href="#tab-2">Місяць</a>
                     </li>
                 </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab-1">
                    <a href="#"> Avtor1 </a>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab-2">
                    <a href="#">Avtor2</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="sidebar-module">
            <h4>Популярні статті</h4>
                <ul class="nav nav-tabs">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="tab" role="tab" href="#ta">Тиждень</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" role="tab" href="#ma">Місяць</a>
                    </li>
                </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ta">
                    <a href="#">Post1</a>
                </div>
                <div role="tabpanel" class="tab-pane" id="ma" href="#">
                    <a href="#">Post2</a>
                </div>
            </div>
            <hr>
        </div>
    </div><!-- /.blog-main -->
    </div><!-- /.row -->
    <div class="row">
    <nav class="col-lg-4 col-lg-offset-4">
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </nav>
    </div>
    </div><!-- /.container -->

    <footer class="blog-footer">
        <div class="col-lg-2">
            <a href="/conditions">Умови</a>
            <a href="#">Конфіденційність</a>
        </div>
    </footer>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>