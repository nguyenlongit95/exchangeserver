<template>
    <div class="gia-vang-component">
        <!-- Gia vang content -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center padding-bottom-25px">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết các hãng vàng</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn hãng vàng</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="select_gold" v-model="goldType" v-on:change="getGoldExchangesDetail()">
                                        <option value="sjc">SJC</option>
                                        <option value="pnj">PNJ</option>
                                        <option value="phu-quy">Phú Quý</option>
                                        <option value="bao-tin-minh-chau">Bảo Tín Minh Châu</option>
                                        <option value="doji">DOJI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- table begins -->
        <div class="section margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Giá vàng <span>SJC</span> - <span class="font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table exchanges pages home -->
                <div class="table-exchange-home">
                    <div class="col-md-12 pull-right">
                        <div class="row">
                            <table class="table table-hover table-bordered" id="table-exchange-page">
                                <thead>
                                <tr>
                                    <th class="text-left">Tỉnh thành</th>
                                    <th class="text-center">Loại</th>
                                    <th class="text-center">Mua vào</th>
                                    <th class="text-center">Bán ra</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="renderGiaVang in listGiaVang">
                                        <th class="bg-gray text-left">{{ renderGiaVang.tinhthanh }}</th>
                                        <th>{{ renderGiaVang.loai }}</th>
                                        <th>
                                            {{ renderGiaVang.mua }}
                                            <span v-if="renderGiaVang.tyle_mua > 0" class="font-size-13px font-color-green">
                                             <i class="fa fa-arrow-up"> {{ renderGiaVang.tyle_mua }}</i>
                                            </span>
                                            <span v-if="renderGiaVang.tyle_mua < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGiaVang.tyle_mua }}</i>
                                            </span>
                                        </th>
                                        <th>
                                            {{ renderGiaVang.ban }}
                                            <span v-if="renderGiaVang.tyle_ban > 0" class="font-size-13px font-color-green">
                                             <i class="fa fa-arrow-up"> {{ renderGiaVang.tyle_ban }}</i>
                                            </span>
                                            <span v-if="renderGiaVang.tyle_ban < 0" class="font-size-13px font-color-red">
                                                <i class="fa fa-arrow-down"> {{ renderGiaVang.tyle_ban }}</i>
                                            </span>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->

        <!-- section draw chart -->
        <div class="section">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 row">
                            <p class="text-center">
                                <strong class="font-size-13px">Giá vàng <span id="txt_money_code" class="color-d66c0b text-uppercase">{{ this.goldType }}</span> trong các ngày trước</strong>
                            </p>
                        </div>
                        <div class="chart col-md-12 row">
                            <!-- Sales Chart Canvas -->
                            <canvas id="gold_chart" style="height: 350px; width: 100%;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section draw chart -->
        <div class="section layout_padding margin-top-25">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 row">
                            <p class="text-center">
                                <strong class="font-size-13px"><span id="txt_money_code" class="color-d66c0b">Giá vàng thế giới</span> cập nhật theo thời gian thực</strong>
                            </p>
                        </div>
                        <div class="chart col-md-12">
                            <iframe style="height: 500px; width: 100%;" id="tradingview_5b9f7" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_5b9f7&amp;symbol=FX_IDC%3AXAUUSD&amp;interval=1&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Asia%2FBangkok&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=vi_VN&amp;referral_id=1713&amp;utm_source=tygia.vn&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=FX_IDC%3AXAUUSD" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    </div>
</template>

<script>
    export default {
        data() {
            /**
             * Create local variable
             */
            return {
                listGiaVang: [],
                goldType: 'sjc',
                timeUpdate: ''
            }
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getGoldExchanges();
        },
        methods: {
            /**
             * Implement function here
             */
            getGoldExchanges() {
                axios.get('api/v1/get-gold-exchange').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        this.listGiaVang.push(objExchangeData[i]);
                    }
                    this.listGiaVang.sort();
                }).catch(error => {
                    console.log(error);
                });
            },

            getGoldExchangesDetail() {
                axios.get('api/v1/get-gold-exchange/' + this.goldType).then(response => {
                    this.listGiaVang.splice(0, this.listGiaVang.length);
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        this.listGiaVang.push(objExchangeData[i]);
                    }
                    this.listGiaVang.sort();
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Get time now
             * Show has demo title
             */
            getTimeUpdate() {
                var today = new Date();
                this.timeUpdate = today.getHours() +":"+ today.getMinutes() + " " + today.getDate() + "-" + (today.getMonth()+1) + "-" + today.getFullYear();
            }
        }
    }
</script>

<!-- Css more -->
<style scoped>

</style>
