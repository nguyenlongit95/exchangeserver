@extends('layouts.frontend')

@section('content')
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>{{ $tienao->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script>
    /**
     * JS more detail
     * Can using jQuery here
     */
</script>
