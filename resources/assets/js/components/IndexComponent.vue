<template>
    <!-- Content layout -->
    <div class="index-component">
        <!-- section exchanges -->
        <div class="section layout_padding" style="margin-top:85px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main pull-left">
                                <h2 class="font-size-22px"><span class="theme_color"></span>TỔNG HỢP TỶ GIÁ NGÂN HÀNG TRÊN TOÀN QUỐC <span class="font-size-16px font-weight-initial">Cập nhật lúc: 17:15:02 20/05/2020</span></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group-tabs" id="table-home">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" style="padding-left:0px;"><a href="#muatienmat" class="active" aria-controls="muatienmat" role="tab" data-toggle="tab">Mua tiền mặt</a></li>
                        <li role="presentation"><a href="#muachuyenkhoan" aria-controls="muachuyenkhoan" role="tab" data-toggle="tab">Mua chuyển khoản</a></li>
                        <li role="presentation"><a href="#bantienmat" aria-controls="bantienmat" role="tab" data-toggle="tab">Bán tiền mặt</a></li>
                        <li role="presentation"><a href="#banchuyenkhoan" aria-controls="banchuyenkhoan" role="tab" data-toggle="tab">Bán chuyển khoản</a></li>
                    </ul>
                </div>
                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-3 col-xs-4 col-sm-3 col-md-3 pull-left">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-currency-code-home">
                                <thead>
                                <tr>
                                    <th id="currency-code">Mã ngoại tệ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>AUD</th>
                                </tr>
                                <tr>
                                    <th>EUR</th>
                                </tr>
                                <tr>
                                    <th>USD</th>
                                </tr>
                                <tr>
                                    <th>CNY</th>
                                </tr>
                                <tr>
                                    <th>JPY</th>
                                </tr>
                                <tr>
                                    <th>SGD</th>
                                </tr>
                                <tr>
                                    <th>CAD</th>
                                </tr>
                                <tr>
                                    <th>KRW</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-9 col-xs-8 col-sm-9 col-md-9 pull-right">
                        <div class="wrap-home">
                            <div class="row">
                                <table class="table table-hover table-bordered" id="table-exchange-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TCB.png"> <span class="bank-name padding-top-3px">Techcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VCB.png" alt=""><span class="bank-name padding-top-3px">Vietcombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/VTB.png" alt=""><span class="bank-name padding-top-3px">Vietinbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SAC.png" alt=""><span class="bank-name padding-top-3px">Sacombank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/SHB.png" alt=""><span class="bank-name padding-top-3px">SHB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/BIDV.png" alt=""><span class="bank-name padding-top-3px">BIDV</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/acb.png" alt=""><span class="bank-name padding-top-3px">ACB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/agribank.png" alt=""><span class="bank-name padding-top-3px">ArgiBank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/exim.jpg" alt=""><span class="bank-name padding-top-3px">Eximbank</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/HSBC.png" alt=""><span class="bank-name padding-top-3px">HSBC</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/TPB.png" alt=""><span class="bank-name padding-top-3px">TPB</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/DAB.png" alt=""><span class="bank-name padding-top-3px">DongA</span></span></th>
                                        <th class="text-center"><span class="bank-img min-width-130 text-center"><img src="frontend/images/Bank/mbank.png" alt=""><span class="bank-name padding-top-3px">MBank</span></span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                        <th>15,359</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                        <th>15,357</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table exchange home -->
            </div>
        </div>
        <!-- end section -->

        <!-- section exchanges -->
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Tổng hợp giá vàng SJC mới nhất <span class="font-size-16px font-weight-initial">Cập nhật lúc: 17:15:02 20/05/2020</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-3 col-xs-4 col-sm-3 col-md-3 pull-left">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-currency-code-home">
                                <thead>
                                <tr>
                                    <th id="currency-code">-</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Hồ Chí Minh</th>
                                </tr>
                                <tr>
                                    <th>Hà Nội</th>
                                </tr>
                                <tr>
                                    <th>Đà Nẵng</th>
                                </tr>
                                <tr>
                                    <th>Nha Trang</th>
                                </tr>
                                <tr>
                                    <th>Cà Mau</th>
                                </tr>
                                <tr>
                                    <th>Buôn Ma Thuật</th>
                                </tr>
                                <tr>
                                    <th>Huế</th>
                                </tr>
                                <tr>
                                    <th>Đà Lạt</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-9 col-xs-8 col-sm-9 col-md-9 pull-right">
                        <div class="wrap-home">
                            <div class="row">
                                <table class="table table-hover table-bordered" id="table-gold-home">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Loại</th>
                                        <th class="text-center">Mua vào</th>
                                        <th class="text-center">Bán ra</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                    </tr>
                                    <tr>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                    </tr>
                                    <tr>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                    </tr>
                                    <tr>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                    </tr>
                                    <tr>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                        <th>3600000</th>
                                    </tr>
                                    <tr>
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                    </tr>
                                    <tr>
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                    </tr>
                                    <tr>
                                        <th>15,141</th>
                                        <th>15,333</th>
                                        <th>15,290</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table exchange home -->
            </div>
        </div>

        <div class="section">
            <div class="container">
                <section>
                    <div class="heading_main pull-left">
                        <h2 class="font-size-22px"><span class="theme_color"></span>Biểu đồ giá Dầu Crude Oil (Brent)- UKOIL trực tiếp theo thời gian thực</h2>
                    </div>
                    <br>
                    <iframe style="height: 550px; width: 100%;" id="tradingview_cbf8a" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_cbf8a&amp;symbol=TVC%3AUKOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi_VN&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUKOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                </section>
                <hr>
                <section>
                    <div class="heading_main pull-left">
                        <h2 class="font-size-22px"><span class="theme_color"></span>Biểu đồ giá Dầu Crude Oil (WTI)- USOIL trực tiếp theo thời gian thực</h2>
                    </div>
                    <br>
                    <iframe style="height: 550px; width: 100%;" id="tradingview_9a8db" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_9a8db&amp;symbol=TVC%3AUSOIL&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=TVC%3AUSOIL" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                </section>
                <br>
            </div>
        </div>
    </div>
</template>

<script>
    /**
     * Vue.JS code function example
     * Test function vue js core
     */
    export default {
        name: "IndexComponent"
    }
</script>

<!-- CSS more -->
<style scoped>

</style>
