@extends('layouts.master')

@section('content')

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
        </div>
    </div>

    <div class="row">
        <nav class="col-lg-4 col-lg-offset-4">
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>
    </div>

</div>

    <footer class="blog-footer">
        <div class="col-lg-2">
            <a href="/conditions">Умови</a>
            <a href="#">Конфіденційність</a>
        </div>
    </footer>

@endsection