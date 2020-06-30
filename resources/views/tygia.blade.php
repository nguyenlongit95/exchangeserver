@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/images/ads/ads_ngang.gif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <div id="app">
        <ty-gia-component></ty-gia-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>

    <script>
        /**
         * JS more detail
         * Can using jQuery here
         */
    </script>
@endsection
