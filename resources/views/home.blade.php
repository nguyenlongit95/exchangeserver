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
                    <img class="width-100-percent" src="{{ asset('frontend/images/ads/ads_ngang.gif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div id="app">
        <index-component></index-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
@endsection
