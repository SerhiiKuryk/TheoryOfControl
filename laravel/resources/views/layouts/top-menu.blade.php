<div class="header clearfix">
    <nav>
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