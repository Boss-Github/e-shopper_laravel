@extends("main.mainLara")

@section("content")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{ route("post.create") }}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Категория</th>
                        <th>Теги</th>
                        <th>Картинка</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Как изучить Laravel на основе Блога?
                        </td>
                        <td>Обучение</td>
                        <td>Laravel, PHP</td>
                        <td>
                            <img src="/public/adminlara/dist/img/boxed-bg.jpg" alt="" width="100">
                        </td>
                        <td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Работа на фрилансе
                        </td>
                        <td>Работа</td>
                        <td>Фриланс, Upwork</td>
                        <td>
                            <img src="/public/adminlara/dist/img/photo1.png" alt="" width="100">
                        </td>
                        <td><a href="edit.html" class="fa fa-pencil"></a> <a href="#" class="fa fa-remove"></a></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    @endsection