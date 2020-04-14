@extends('admin.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="box">
                <div class="col-md-12 row">
                    <iframe style="height: 450px; width: 100%;" id="tradingview_cbf8a" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_cbf8a&amp;symbol=TVC%3AUKOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi_VN&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUKOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-12 row">
                    <iframe style="height: 450px; width: 100%;" id="tradingview_9a8db" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_9a8db&amp;symbol=TVC%3AUSOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUSOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                </div>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
