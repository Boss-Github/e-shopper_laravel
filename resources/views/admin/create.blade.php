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

        <form action="{{ route("category.store") }}" method="post">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Добавляем категорию</h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название</label>
@csrf
                        <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

                <a href="{{ route('category.index') }}" class="btn btn-default">Назад</a>
                <button type="submit" class="btn btn-success pull-right">Добавить</button>

            </div>
            <!-- /.box-footer-->
        </div>

        </form>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection