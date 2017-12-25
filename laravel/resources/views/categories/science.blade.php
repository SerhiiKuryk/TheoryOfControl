@extends('layouts.master')

@section('content')
    <!--<h3>Science</h3>-->

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-10">


                <?php
                foreach ($articles as $a){
                    echo "\t\t\t\t<div class='post'>" . "\n";
                    echo "\t\t\t\t\t<h3>$a->title</h3>" . "\n";
                    echo "\t\t\t\t\t" . "<p>$a->text</p>" . "\n";
                    echo "\t\t\t\t\t" . "<a href='#' class='btn btn-primary'>Читати більше</a>" . "\n";
                    echo "\t\t\t\t</div>" . "\n";
                    echo "\t\t\t\t<hr>" . "\n";
                }
                ?>
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
                            <a href="#"> Автор1 </a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-2">
                            <a href="#"> Автор2 </a>
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
                            <a href="#">Стаття1</a>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="ma" href="#">
                            <a href="#">Стаття2</a>
                        </div>
                    </div>

                    <hr>
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

    </div>

    <footer class="blog-footer">
        <div class="col-lg-2">
            <a href="/conditions">Умови</a>
            <a href="#">Конфіденційність</a>
        </div>
    </footer>
@endsection