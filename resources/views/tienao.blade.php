@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
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
