@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="{{ url('admin/exchange') }}" method="GET">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-3 background-table-fillter">
                                        Money code
                                    </th>
                                    <th class="col-md-9">
                                        <input type="text" class="form-control" name="code" placeholder="USD">
                                    </th>
                                </tr>
                                <tr>
                                    <th class="col-md-3 background-table-fillter custom-label">
                                        Time start
                                    </th>
                                    <th class="col-md-9">
                                        <div class="col-md-3 row pull-left">
                                            <input type="text" class="form-control" name="time_start" id="time_start" value="">
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <span class="custom-label dau-nga">~</span>
                                        </div>
                                        <div class="col-md-3 row pull-left">
                                            <input type="text" class="form-control" name="time_end" id="time_end" value="">
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
                        </form>
                    </div>
                    @if($ngoaiTe != null &&count($ngoaiTe) > 0)

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Bank name</th>
                            <th>Mua tiền mặt</th>
                            <th>Tỷ lệ mua tiền mặt</th>
                            <th>Mua chuyển khoản</th>
                            <th>Tỷ lệ mua chuyển khoản</th>
                            <th>Bán tiền mặt</th>
                            <th>Tỷ lệ bán tiền mặt</th>
                            <th>Bán chuyển khoản</th>
                            <th>Tỷ lệ bán chuyển khoản</th>
                            <th>Thời gian cập nhật</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ngoaiTe as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->code }}</td>
                            <td>{{ $value->bank_name }}</td>
                            <td>{{ $value->muatienmat }}</td>
                            <td>
                                @if($value->muatienmat_diff < 0)
                                    <span style="color:red">{{ $value->muatienmat_diff }}</span>
                                @elseif($value->muatienmat_diff > 0))
                                    <span style="color:green">{{ $value->muatienmat_diff }}</span>
                                @else
                                    <span>{{ $value->muatienmat_diff }}</span>
                                @endif
                            </td>
                            <td>{{ $value->bantienmat }}</td>
                            <td>
                                @if($value->bantienmat_diff < 0)
                                    <span style="color:red">{{ $value->bantienmat_diff }}</span>
                                @elseif($value->bantienmat_diff > 0))
                                    <span style="color:green">{{ $value->bantienmat_diff }}</span>
                                @else
                                    <span>{{ $value->bantienmat_diff }}</span>
                                @endif
                            </td>
                            <td>{{ $value->muachuyenkhoan }}</td>
                            <td>
                                @if($value->muachuyenkhoan_diff < 0)
                                    <span style="color:red">{{ $value->muachuyenkhoan_diff }}</span>
                                @elseif($value->muachuyenkhoan_diff > 0))
                                    <span style="color:green">{{ $value->muachuyenkhoan_diff }}</span>
                                @else
                                    <span>{{ $value->muachuyenkhoan_diff }}</span>
                                @endif
                            </td>
                            <td>{{ $value->banchuyenkhoan }}</td>
                            <td>
                                @if($value->banchuyenkhoan_diff < 0)
                                    <span style="color:red">{{ $value->banchuyenkhoan_diff }}</span>
                                @elseif($value->banchuyenkhoan_diff > 0))
                                    <span style="color:green">{{ $value->banchuyenkhoan_diff }}</span>
                                @else
                                    <span>{{ $value->banchuyenkhoan_diff }}</span>
                                @endif
                            </td>
                            <td>{{ $value->created_at }}</td>
                        </tr>
                        @endforeach
                        @else
                            <div class="col-md-12 row text-center">
                                <br>
                                <span style="color:red; font-weight: bold;">Chưa có thông tin ngoại tệ!</span>
                            </div>
                        @endif
                        </tfoot>
                    </table>
                    {!! $ngoaiTePaginate->appends(request()->input())->links() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
