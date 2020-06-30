@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
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
