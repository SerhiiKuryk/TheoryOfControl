
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HandyBlog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <script src="search-bar.js"></script>
</head>

<body>

<!--<div class="container">-->
<div class="container-fluid">
    <?php echo $__env->make('layouts.top-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <br>
    <?php echo $__env->yieldContent('content'); ?>
</div>
    <!--</div>-->
</body>
</html>
