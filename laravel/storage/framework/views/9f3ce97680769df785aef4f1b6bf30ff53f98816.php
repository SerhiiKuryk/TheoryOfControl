<?php $__env->startSection('content'); ?>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Title 1</td>
        <td>Php</td>
        <td><a href="" class="btn btn-warning">Edit</a> | <a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    </tbody>
</table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>