<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-10">
                <div class="post">
                    <h3>Заголовок статті</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                    <a href="#" class="btn btn-primary">Читати більше</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Заголовок статті</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                    <a href="#" class="btn btn-primary">Читати більше</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Заголовок статті</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                    <a href="#" class="btn btn-primary">Читати більше</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Заголовок статті</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis amet tenetur eum, consequuntur assumenda officiis quidem omnis placeat. Sequi ex fugiat reiciendis at eligendi inventore ad, odio magnam velit doloribus...</p>
                    <a href="#" class="btn btn-primary">Читати більше</a>
                </div>

                <hr>
            </div>

            <div class="col-sm-2 container-fluid">


                <h4>Популярні статті</h4>
                <div class="tabs1">




                    <input class="tabs__tab" type="radio" id="tabs__tab3" name="tabstab" checked="checked"/>
                    <label class="tabs__title" for="tabs__tab3">Тиждень</label>

                    <a class="top" href="#3">Автор1</a>

                    <input class="tabs__tab" type="radio" id="tabs__tab4" name="tabstab"/>
                    <label class="tabs__title" for="tabs__tab4">Місяць</label>

                    <a class="top" href="#3">Автор2</a>
                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <nav class="col-lg-4 col-lg-offset-4">
            <ul class="pager">
                <li><a href="#">Попередня</a></li>
                <li><a href="#">Наступна</a></li>
            </ul>
        </nav>
    </div>



    <footer class="blog-footer">
        <div class="col-lg-2">
            <a href="/conditions">Умови</a>
            <a href="#">Конфіденційність</a>
        </div>
    </footer>


    <Style>
        input{
            display: none;
        }
        .tabs1 {
            display: flex;
            flex-wrap: wrap;
            max-width: 600px;
        }

        .tabs__title {
            width: 1px;
            flex-grow: 1;
            order: -1;
            color: #fff;
            background-color: #2c2c2c;
            cursor: pointer;
            user-select: none;
            text-transform: uppercase;
            text-align: center;
            padding: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .top {
            display: none;
            width: 100%;
            flex-grow: 2;
            margin: 0;
            padding: 10px;
            background-color: #ddd;
        }

        .tabs__tab:checked+.tabs__title {
            color: #000;
            background-color: #ddd;
        }

        .tabs__tab:checked+.tabs__title+ .top {display: flex;}
        .tabs__title:hover {opacity: 0.9;}


    </Style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>