@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <h3>Link quảng cáo Google AdSense / <a href="{{ url('admin/google-adsense') }}">Danh sách</a></h3>
            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="/admin/google-adsense/store" method="get" class="form-group" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label for="type">Chiều quảng cáo</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control" name="type" id="type">
                                            <option value="doc">Dọc</option>
                                            <option value="ngang">Ngang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label for="type">Mã nhúng</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="link" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center" style="margin-top:25px;">
                                <input type="submit" class="btn btn-primary" value="Add new">
                                <input type="button" class="btn btn-warning" value="Clear">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
