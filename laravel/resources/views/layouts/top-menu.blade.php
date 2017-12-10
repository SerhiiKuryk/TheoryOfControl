<div >


    <!--<div class="navbar navbar-inverse">-->
    <div class="navbar navbar-primary">
        <div class="container-fluid">

            @if(Auth::check()==false)
            <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 20pt;">HandyBlog</a>

            <ul class="nav navbar-nav navbar">

            @else
            {

                @if(Sentinel::getUser()->roles()->first()->slug == 'admin')
                        <a class="navbar-brand" href="{{ url('/ahome') }}">HandyBlog</a>

                        <ul class="nav navbar-nav">

                @elseif (Sentinel::getUser()->roles()->first()->slug == 'moderator')
                                <a class="navbar-brand" href="{{ url('/mhome') }}">HandyBlog</a>

                                <ul class="nav navbar-nav">

                @elseif (Sentinel::getUser()->roles()->first()->slug == 'user')
                                        <a class="navbar-brand" href="{{ url('/uhome') }}">HandyBlog</a>

                                        <ul class="nav navbar-nav">

                @endif
            }
            @endif


                <li><a href="{{ url('/create') }}" class="btn btn-success">Створити статтю</a></li>
                                            @if(Sentinel::check())
                    <li><a href="{{ url('/manage') }}" class="btn btn-warning">Мої статті</a></li>
                        @endif
                <li>
                    <form class="navbar-form" role="search">
                        <div class="input-group">

                            <div class="input-group-btn search-panel">
                                <select id="inputState" class="form-control">
                                    <option selected><a href="#contains">по автору</a></option>
                                    <option><a href="#its_equal">по назві</a></option>
                                </select>

                            </div>

                            <input type="text" class="form-control" placeholder="Search">
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
                @if(Sentinel::check())
                    <li >
                        <form action="/logout" method="POST" id="logout-form">
                            {{ csrf_field() }}
                            <ul class="nav navbar-nav navbar-right" >
                            <li style="margin-right: 20px;"><a href="#" onClick="document.getElementById('logout-form').submit()">Logout</a>
                            </li>
                            </ul>
                        </form>
                    </li>
                @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                @endif
            </ul>
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
