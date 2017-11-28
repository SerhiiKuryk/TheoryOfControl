<?php $__env->startSection('content'); ?>
     <div class="col-md-12">
        <?php echo e(Form::open(array('route' => 'posts.store'))); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php echo e(implode('', $errors->all('<li class="error">:message</li>'))); ?>

            </div>
            <?php endif; ?>
        <div class="control-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Please insert your title here.'))); ?>

    </div>
    <br>
        <div class="control-group">
            <?php echo e(Form::label('body', 'This is the main body of your post.')); ?>

            <?php echo e(Form::text('body', '', array('class' => 'ckeditor'))); ?>

        </div>
        <br>
        <div class="control-group">
            <?php echo e(Form::label('m_desc', 'This is the description of your post.')); ?>

            <?php echo e(Form::text('m_desc', '', array('class' => 'form-control', 'placeholder' => 'Option post description.'))); ?>

        </div>
        <br>
        <div class="control-group">
            <?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success'))); ?>

            <!--<?php echo e(link_to_route('')); ?>-->
        </div>

    </div>>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>