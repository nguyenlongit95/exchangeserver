@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="{{ url('admin/gold') }}" method="GET">
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
                                                <option value="thegioi">Vàng Thế Giới</option>
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
                    @if($gold != null &&count($gold) > 0)

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tiêu đề</th>
                            <th>Loại</th>
                            <th>Mua vào</th>
                            <th>Tỷ lệ mua</th>
                            <th>Bán ra</th>
                            <th>Tỷ lệ Bán</th>
                            <th>Tỉnh thành</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($gold as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->tieude }}</td>
                            <td>{{ $value->loai }}</td>
                            <td>{{ $value->mua }}</td>
                            <td>
                                @if($value->tyle_mua < 0)
                                    <span style="color:red">{{ $value->tyle_mua }}</span>
                                @elseif($value->tyle_mua > 0))
                                    <span style="color:green">{{ $value->tyle_mua }}</span>
                                @else
                                    <span>{{ $value->tyle_mua }}</span>
                                @endif
                            </td>
                            <td>{{ $value->ban }}</td>
                            <td>
                                @if($value->tyle_ban < 0)
                                    <span style="color:red">{{ $value->tyle_ban }}</span>
                                @elseif($value->tyle_ban > 0))
                                    <span style="color:green">{{ $value->tyle_ban }}</span>
                                @else
                                    <span>{{ $value->tyle_ban }}</span>
                                @endif
                            </td>
                            <td>{{ $value->tinhthanh }}</td>
                        </tr>
                        @endforeach
                        @else
                            <div class="col-md-12 row text-center">
                                <br>
                                <span style="color:red; font-weight: bold;">Chưa có thông tin giá vàng!</span>
                            </div>
                        @endif
                        </tfoot>
                    </table>
                    @if (isset($goldPaginate) && $goldPaginate != null)
                    {!! $goldPaginate->appends(request()->input())->links() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
