@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="{{ url('admin/virual-money') }}" method="GET">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-3 background-table-fillter">
                                        Money code
                                    </th>
                                    <th class="col-md-9">
                                        <div class="col-md-4 row">
                                            <select name="money" class="form-control" id="">
                                                @if (count($loaiTienAo) > 0)
                                                    @foreach ($loaiTienAo as $value)
                                                        <option value="{{ $value->slug }}">{{ $value->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="">-----</option>
                                                @endif
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
                        </form>
                    </div>
                    @if($tienAo != null &&count($tienAo) > 0)

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Symbol</th>
                            <th>Vốn xoay vòng</th>
                            <th>Tổng số</th>
                            <th>Huy động</th>
                            <th>Giá</th>
                            <th>Thanh khoản 24h</th>
                            <th>Thay đổi 1h</th>
                            <th>Thay đổi 24h</th>
                            <th>Thay đổi 7 ngày</th>
                            <th>Vốn hoá</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tienAo as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->symbol }}</td>
                            <td>{{ $value->circulating_supply }}</td>
                            <td>{{ $value->total_supply }}</td>
                            <td>{{ $value->max_supply }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->volume_24h }}</td>
                            <td>
                                @if($value->percent_change_1h < 0)
                                    <span style="color:red">{{ $value->percent_change_1h }}</span>
                                @elseif($value->percent_change_1h > 0))
                                    <span style="color:green">{{ $value->percent_change_1h }}</span>
                                @else
                                    <span>{{ $value->percent_change_1h }}</span>
                                @endif
                            </td>
                            <td>
                                @if($value->percent_change_24h < 0)
                                    <span style="color:red">{{ $value->percent_change_24h }}</span>
                                @elseif($value->percent_change_24h > 0))
                                    <span style="color:green">{{ $value->percent_change_24h }}</span>
                                @else
                                    <span>{{ $value->percent_change_24h }}</span>
                                @endif
                            </td>
                            <td>
                                @if($value->percent_change_7d < 0)
                                    <span style="color:red">{{ $value->percent_change_7d }}</span>
                                @elseif($value->percent_change_7d > 0))
                                    <span style="color:green">{{ $value->percent_change_7d }}</span>
                                @else
                                    <span>{{ $value->percent_change_7d }}</span>
                                @endif
                            </td>
                            <td>
                               {{ $value->market_cap }}
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <div class="col-md-12 row text-center">
                                <br>
                                <span style="color:red; font-weight: bold;">Chưa có thông tin tiền ảo!</span>
                            </div>
                        @endif
                        </tfoot>
                    </table>
                    @if (isset($virualMoneyPaginate) && $virualMoneyPaginate != null)
                    {!! $virualMoneyPaginate->appends(request()->input())->links() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
