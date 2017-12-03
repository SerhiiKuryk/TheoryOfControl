<div >
    <nav>

        <div class="row">


            <?php
            if(Sentinel::check()==false)
                echo ('<div class="navbar-header col-xs-3" style="font-size: 20pt;"><a href="/">HandyBlog</a></div>');
            else
            {
                $slug = Sentinel::getUser()->roles()->first()->slug;

                if($slug == 'admin')
                    echo ('<div class="navbar-header"><a href="/ahome">HandyBlog</a></div>');
                elseif ($slug == 'moderator')
                    echo ('<div class="navbar-header"><a href="/mhome">HandyBlog</a></div>');
                elseif ($slug == 'user')
                    echo ('<div class="navbar-header"><a href="/uhome">HandyBlog</a></div>');
            }
            ?>


            <div class="col-xs-6" >
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Name</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#author"><i class="fa fa-angle-double-right"></i>Author</a></li>
                            <li><a href="#title"><i class="fa fa-angle-double-right"></i>Title</a></li>

                        </ul>
                    </div>
                    <input type="hidden" name="search_param" value="name" id="search_param">
                    <input type="text" class="form-control" name="q" placeholder="Search.." id="search_key" value="">
                    <span class="input-group-btn">
			<a class="btn btn-default text-muted" href="http://adminlte.dev/user/item" title="Clear"><i class="glyphicon glyphicon-remove"></i> </a>
			<button class="btn btn-info" type="submit">  Search  </button>
	    </span>
                </div>
            </div>


            <ul class="nav nav-pills pull-right col-xs-2 col-md-offset-1">
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


        </div>


    </nav>


</div>
