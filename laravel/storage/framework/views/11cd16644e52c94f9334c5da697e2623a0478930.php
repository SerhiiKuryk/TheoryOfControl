<?php $__env->startSection('content'); ?>
    <div class="container">
    <form action="createpost" method="post" class="was-validated">
        <div class="form-group">
            <label for="">Заголовок статті</label>
            <input type="text" name="" class="form-control" placeholder="Post title">
        </div>

        <!--<label class="custom-file">Додати зображення</label>
            <input type="file" id="file" class="custom-file-input" required>
            <span class="custom-file-control"></span>-->
        <br>
        <div class="form-group">
            <label for="">Категорія статті</label>
            <select name="" id="" class="form-control">
                <option value="">Food</option>
                <option value="">Fun</option>
                <option value="">Science</option>
                <option value="">Sport</option>
                <option value="">Style</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Стаття</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" name="" class="btn btn-success pull-right" value="Додати статтю">
    </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>