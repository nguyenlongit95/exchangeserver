@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
    <!-- End Banner -->
    <div id="app">
        <tien-ao-detail-component></tien-ao-detail-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>

    <div class="section">
        <div class="container">
            <h2 class="font-size-22px"><span class="theme_color"></span>Biểu đồ giá {{ $tienao->name }} ({{ $tienao->slug }}) - {{ $tienao->symbol }} trực tiếp theo thời gian thực</h2>
            <br>
            {!! $tienao->iframe_chart !!}
            <div class="">
            {!! $tienao->description !!}
            </div>
        </div>
        <br>
    </div>
@endsection
