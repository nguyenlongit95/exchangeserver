@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <div class="text-center">
                            <div class="text-right margin-bottom">
                                <a class="btn btn-default" href="{{ url('admin/virual-money-type') }}">Cập nhật tiền ảo</a>
                            </div>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Slug</th>
                            <th class="text-center">Symbol</th>
                            <th class="text-center">icon</th>
                            <th class="text-center">Chỉnh sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($loaiTienAo as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->slug }}</td>
                                <td class="text-center">{{ $value->symbol }}</td>
                                <td class="text-center"><img height="16px" width="16px" src="{{ asset('/iconVirualMoney/' . $value->icon) }}" alt=""></td>
                                <td class="text-center">
                                    <a href="{{ url('admin/virual-money-type/' . $value->id) }}" class="text-warning">Chỉnh sửa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="container text-center">
                    {!! $loaiTienAo->render() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
