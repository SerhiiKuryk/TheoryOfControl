@extends('layouts.master')

@section('content')

    <div class="container">
    <form action="post" method="post" class="was-validated">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Заголовок статті</label>
            <input type="text" name="title" class="form-control" placeholder="Post title">
        </div>

        <!--<label class="custom-file">Додати зображення</label>
            <input type="file" id="file" class="custom-file-input" required>
            <span class="custom-file-control"></span>-->
        <br>
        <div class="form-group">
            <label for="">Категорія статті</label>
            <select name="category" id="" class="form-control">
                <!--<option value="">Food</option>
                <option value="">Fun</option>
                <option value="">Science</option>
                <option value="">Sport</option>
                <option value="">Style</option>-->
                <?php
                    foreach ($categories as $categ){
                        echo "<option value=\"$categ->id\">$categ->category</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Стаття</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" name="" class="btn btn-success pull-right" value="Додати статтю">
    </form>
    </div>
@endsection