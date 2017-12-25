<div style="margin-top: 20px;">
    <div class="navbar navbar-primary">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-1 nav navbar-nav navbar" style="margin-left: 70px;">
                    

                        <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 20pt;">HandyBlog</a>

<<<<<<< HEAD
                @else
                    @endif
                </div>

                <div class="col-lg-2 col-lg-push-7">
                    <a href="{{ url('/create') }}" class="btn btn-success">Створити статтю</a>
=======
                </div>

                <div class="col-lg-2 col-lg-push-7">
                    @if(Sentinel::check())
                    <a href="{{ url('/post') }}" class="btn btn-success">Створити статтю</a>
                        @else
                        <a href="{{ url('/login') }}" class="btn btn-success">Створити статтю</a>
                        @endif
>>>>>>> 3712e080726f66956e0287b4fbb2f7829c5bbf0d
                </div>

                @if(Sentinel::check())
                    <div class="col-lg-2 col-lg-push-7">
                        <a href="{{ url('/manage') }}" class="btn btn-warning">Мої статті</a>
                    </div>

                    <div class="col-lg-4 col-lg-pull-2">
                        @else
                            <div class="col-lg-4">
                        @endif

                    <form class="navbar-form" role="search " style="margin: 0px 0px 0px 0px;">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <select id="inputState" class="form-control">
                                    <option selected><a href="#contains">по автору</a></option>
                                    <option><a href="#its_equal">по назві</a></option>
                                </select>
                            </div>

                            <input type="text" class="form-control" placeholder="Пошук">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
								    <span class="glyphicon glyphicon-remove">
									    <span class="sr-only">Закрити</span>
								    </span>
							    </button>

							    <button type="submit" class="btn btn-default">
								    <span class="glyphicon glyphicon-search">
									    <span class="sr-only">Пошук</span>
								    </span>
							    </button>
						    </span>
                        </div>
                    </form>
                            </div>

            <div class="col-lg-2 nav navbar-nav navbar-right">
                @if(Sentinel::check())

                    <form action="/logout" method="POST" id="logout-form">
                            {{ csrf_field() }}
                            <div class="nav navbar-nav navbar-right" >
                            <a href="#" class="btn btn-primary" style="margin-right: 20px;" role="button" onClick="document.getElementById('logout-form').submit()">Вийти</a>
                            </div>
                    </form>
                @else

                    <li>
                        <div class="nav navbar-nav col-lg-1">
                            <a class="btn btn-primary" href="/register" role="button">Зареєструватися</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav navbar-nav col-lg-1">
                            <a class="btn btn-primary" href="/login" role="button">Увійти</a>
                        </div>
                    </li>
            </div>
        </div>
                @endif
            </div>
        </div>
    </div>

    <ul class="nav nav-pills nav-justified navbar-default">
        <li class="nav-item">
            <a class="nav-link active" href="/allCategories">Всі категорії</a>
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
