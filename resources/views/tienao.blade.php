@extends('layouts.frontend')

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
        <tien-ao-component></tien-ao-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
@endsection
<script>
    /**
     * JS more detail
     * Can using jQuery here
     */
</script>
