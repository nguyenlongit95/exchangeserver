@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
    <!-- End Banner -->

    <div id="app">
        <index-component></index-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
@endsection
