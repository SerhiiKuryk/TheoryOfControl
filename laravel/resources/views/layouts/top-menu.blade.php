<div class="header clearfix">
    <nav>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Filter by</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#contains">Contains</a></li>
                            <li><a href="#its_equal">It's equal</a></li>
                            <li><a href="#greather_than">Greather than ></a></li>
                            <li><a href="#less_than">Less than < </a></li>
                            <li class="divider"></li>
                            <li><a href="#all">Anything</a></li>
                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills pull-right">
            @if(Sentinel::check())
                <li role="presentation">
                    <form action="/logout" method="POST" id="logout-form">
                        {{ csrf_field() }}

                        <a href="#" onClick="document.getElementById('logout-form').submit()">Logout</a>
                    </form>
                </li>
            @else
            <li role="presentation"><a href="/login">Sign in</a></li>
            <li role="presentation"><a href="/register">Sign up</a></li>
            @endif
        </ul>
    </nav>
    <?php
        if(Sentinel::check()==false)
            echo ('<h3 class="text-muted"><a href="/">HandyBlog</a></h3>');
        else
            {
                $slug = Sentinel::getUser()->roles()->first()->slug;

                if($slug == 'admin')
                    echo ('<h3 class="text-muted"><a href="/ahome">HandyBlog</a></h3>');
                elseif ($slug == 'moderator')
                    echo ('<h3 class="text-muted"><a href="/mhome">HandyBlog</a></h3>');
                elseif ($slug == 'user')
                    echo ('<h3 class="text-muted"><a href="/uhome">HandyBlog</a></h3>');
            }
    ?>

</div>
