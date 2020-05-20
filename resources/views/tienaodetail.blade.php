@extends('layouts.frontend')

@section('content')
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Bitcoins</h3>
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
            <h2 class="h-head text-center">Biểu đồ giá Bitcoin (bitcoin) - bitcoin trực tiếp theo thời gian thực</h2>
            <br>
            <iframe style="height:450px; width: 100%;" id="tradingview_b92c2" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_b92c2&amp;symbol=BTCUSD&amp;interval=1&amp;symboledit=0&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=3&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en_US&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=ETHUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
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
