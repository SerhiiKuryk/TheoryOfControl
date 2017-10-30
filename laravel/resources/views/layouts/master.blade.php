
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HandyBlog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="search-bar.js">
</head>

</head>

<body>

<div class="container">
    @include('layouts.top-menu')

    @yield('content')
</div>
</body>
</html>
