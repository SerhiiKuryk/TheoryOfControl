<?php $__env->startSection('content'); ?>
<h3>PAGE FOR USER</h3>
<!--<form action="/logout" method="POST" id="logout-form">
    <?php echo e(csrf_field()); ?>


    <a href="#" onClick="document.getElementById('logout-form').submit()">Logout</a>
</form>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>