@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="box-body">
                    @include('admin.layouts.alert')
                    <div class="col-md-12 row">
                        <form action="{{ url('admin/interest') }}" method="GET">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-3 background-table-fillter">
                                        Bank code
                                    </th>
                                    <th class="col-md-9">
                                        <div class="col-md-4 row">
                                            <select name="bank" class="form-control" id="">
                                                @if (count($bankList) > 0)
                                                    @foreach ($bankList as $value)
                                                    <option value="{{ $value->id }}">{{  $value->bankname }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="" disabled>-----</option>
                                                @endif
                                            </select>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="col-md-3 background-table-fillter">
                                        Kỳ hạn
                                    </th>
                                    <th class="col-md-9">
                                        <div class="col-md-4 row">
                                            <select name="kyhan" class="form-control" id="">
                                                <option value="0">Không kỳ hạn</option>
                                                <option value="1">1 tháng</option>
                                                <option value="3">3 tháng</option>
                                                <option value="6">6 tháng</option>
                                                <option value="9">9 tháng</option>
                                                <option value="12">12 tháng</option>
                                                <option value="24">24 tháng</option>
                                                <option value="36">36 tháng</option>
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
                    @if($interest != null &&count($interest) > 0)

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank name</th>
                            <th>Hình thức tiết kiệm</th>
                            <th>Kỳ hạn</th>
                            <th>Lãi suất VNĐ</th>
                            <th>Lãi suất USD</th>
                            <th>Thời gian cập nhật</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($interest as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->bank_name }}</td>
                            <td>
                                @if ($value->hinhthuctietkiem == 1)
                                    Tại quầy
                                @elseif ($value->hinhthuctietkiem == 2)
                                    Online
                                @endif
                            </td>
                            <td>{{ $value->kyhan }}</td>
                            <td>{{ $value->laisuat_vnd }}</td>
                            <td>{{ $value->laisuat_usd }}</td>
                            <td>{{ $value->created_at }}</td>
                        </tr>
                        @endforeach
                        @else
                            <div class="col-md-12 row text-center">
                                <br>
                                <span style="color:red; font-weight: bold;">Chưa có thông tin lãi suất!</span>
                            </div>
                        @endif
                        </tfoot>
                    </table>
                    @if ($interestPaginate != null)
                    {!! $interestPaginate->appends(request()->input())->links() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
