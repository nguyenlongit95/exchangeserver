@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="{{ url('admin/gold-info') }}" method="GET">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-3 background-table-fillter">
                                        Money code
                                    </th>
                                    <th class="col-md-9">
                                        <div class="col-md-4 row">
                                            <select name="gold" class="form-control" id="">
                                                <option value="sjc">SJC</option>
                                                <option value="pnj">PNJ</option>
                                                <option value="doji">DOJI</option>
                                                <option value="bao-tin-minh-chau">Bảo Tín Minh Châu</option>
                                                <option value="phu-quy">Phú Quý</option>
                                            </select>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                </tfoot>
                            </table>
                            <div class="text-center">
                                <button type="submit" name="search" class="btn btn-success btn-search">
                                    Search
                                    <i class="fa fa-search margin-left-5px"></i>
                                    <img class="iconLoading" src="{{ asset('admin/asset/icon/loading.gif') }}" style="width: 32px; display: none;" class="margin-left-5px" alt="">
                                </button>
                            </div>
                            <div class="text-right margin-bottom">
                                <a class="btn btn-default" href="{{ url('admin/gold') }}">Cập nhật giá vàng</a>
                            </div>
                        </form>
                    </div>

                    <div class="content col-md-12 row">
                        <form action="{{ url('admin/gold-info/update/' . $goldInfo->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-md-12 row">
                                <div class="col-md-2 row">Gold name</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ $goldInfo->name }}">
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 25px;">
                                <div class="col-md-2 row">Thông tin hãng vàng</div>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control ckeditor row" name="description">{{ $goldInfo->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 25px;">
                                <div class="col-md-2 row">Đơn vị</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control ckeditor" name="donvi" value="{{ $goldInfo->donvi }}">
                                </div>
                            </div>
                            <br>
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
