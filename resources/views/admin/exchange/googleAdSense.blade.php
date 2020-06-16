@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <h3>Link quảng cáo Google AdSense / <a href="{{ url('admin/google-adsense/create') }}">Add new</a></h3>
            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">

                    </div>
                    @if($adsense != null &&count($adsense) > 0)

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Chiều quảng cáo</th>
                                <th>Mã nhúng</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adsense as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->type }}</td>
                                    <td>{{ $value->link }}</td>
                                    <td><a href="{{ url('admin/google-adsense/delete' . $value->id) }}" class="btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                            </tfoot>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
