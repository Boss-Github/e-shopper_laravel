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
                    <a href="{{ route('category.create') }}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($category as $cat)

                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->title_en }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit',['id'=>$cat->id]) }}" class="fa fa-pencil"></a>

                            <form action="{{route('category.destroy',['id'=>$cat->id])}}" method="post">
                                @csrf

                                <input type="hidden" name="_method" value="delete">
                                <button onclick="return confirm('Are you sure?')" type="submit" class="delete" style="position: relative; border: 0;background: none; color: #3c8dbc; bottom: 23px; left: 30px;">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </form>

                        </td>
                    </tr>

                    @endforeach

                    </tbody>
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