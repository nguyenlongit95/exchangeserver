@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <div class="text-right margin-bottom">
                            <a class="btn btn-default" href="{{ url('admin/virual-money-type') }}">Các loại tiền ảo</a>
                        </div>
                    </div>

                    <div class="content col-md-12 row">
                        <form action="{{ url('admin/virual-money-type/update/' . $loaiTienAo->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-12 row">
                                <div class="col-md-2 row">Gold name</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled name="name" value="{{ $loaiTienAo->name }}">
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 25px;">
                                <div class="col-md-2 row">Thông tin hãng vàng</div>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control ckeditor row" name="description">{{ $loaiTienAo->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row text-center" style="margin-top: 25px;">
                                <input type="submit" name="update" value="Cập nhật" class="btn btn-primary">
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
