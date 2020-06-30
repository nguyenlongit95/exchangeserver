@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')

    <div class="section col-md-12 layout_padding margin-top-25px">
        <div class="container">
            <div class="pull-right">
                <div class="fb-like" data-href="https://tygia.site/" data-width="32" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>
            <section>
                <h1 class="font-size-22px padding-bottom-zero"><span class="theme_color"></span>Biểu đồ giá Dầu Crude Oil (Brent)- UKOIL trực tiếp theo thời gian thực</h1>
                <br>
                <iframe style="height: 550px; width: 100%;" id="tradingview_cbf8a" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_cbf8a&amp;symbol=TVC%3AUKOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi_VN&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUKOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
            </section>
            <hr>
            <section>
                <h2 class="font-size-22px padding-bottom-zero"><span class="theme_color"></span>Biểu đồ giá Dầu Crude Oil (WTI)- USOIL trực tiếp theo thời gian thực</h2>
                <br>
                <iframe style="height: 550px; width: 100%;" id="tradingview_9a8db" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_9a8db&amp;symbol=TVC%3AUSOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUSOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
            </section>
        </div>
    </div>
    <br>
@endsection
<script>
    /**
     * JS more detail
     * Can using jQuery here
     */
</script>
