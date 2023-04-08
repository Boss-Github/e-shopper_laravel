@extends("main.mainLara")


@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Добавить категорию
            <small>приятные слова..</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="{{ route("category.update",['id'=>$edit->id]) }}" method="post">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Меняем категорию</h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>


                            @csrf

                            <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="" value="<?=$edit->title_en?>">
                        <input type="hidden" name="_method" value="PUT">



                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ route('category.index') }}"> <button class="btn btn-default">Назад</button></a>
                <button type="submit" class="btn btn-warning pull-right">Изменить</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection