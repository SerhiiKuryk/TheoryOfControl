<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Register </h3>
                </div>


                <div class="panel-body">
                    <form action="/register" method="POST">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                <input type="email" name="email" class="form-control" placeholder="example@example.com" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" name="user_name" class="form-control" placeholder="User Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>