<template>
    <div class="lai-suat-component">
        <!-- section exchanges -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Lãi suất tại quầy - <span class="font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h1>
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
                                    <th class="text-left">Ngân hàng</th>
                                    <th class="text-center">Không kỳ hạn</th>
                                    <th class="text-center">1 tháng</th>
                                    <th class="text-center">3 tháng</th>
                                    <th class="text-center">6 tháng</th>
                                    <th class="text-center">9 tháng</th>
                                    <th class="text-center">12 tháng</th>
                                    <th class="text-center">24 tháng</th>
                                    <th class="text-center">36 tháng</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="bg-gray text-left">VietcomBank</th>
                                        <th v-for="renderVietcomBank in arrVietcomBank">{{ renderVietcomBank.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">NCB</th>
                                        <th v-for="renderNCB in arrNCB">{{ renderNCB.laisuat_vnd}}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">VietinBank</th>
                                        <th v-for="renderVietinBank in arrVietinBank">{{ renderVietinBank.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">SCB</th>
                                        <th v-for="renderSCB in arrNCB">{{ renderSCB.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">ArgiBank</th>
                                        <th v-for="renderArgiBank in arrArgiBank">{{ renderArgiBank.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">DongA</th>
                                        <th v-for="renderDongA in arrDongA">{{ renderDongA.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">SHB</th>
                                        <th v-for="renderSHB in arrSHB">{{ renderSHB.laisuat_vnd }}</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray text-left">VIB</th>
                                        <th v-for="renderVIB in arrVIB">{{ renderVIB.laisuat_vnd }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- section exchanges -->
        <div class="section margin-top-25px">
            <div class="container">
                <div class="col-md-12 pull-left">
                    <div class="row">
                        <div class="col-md-6 row pull-left">
                            <div class="col-md-3 row pull-left">
                                <label style="margin-top:10px;">Chọn kỳ hạn</label>
                            </div>
                            <div class="col-md-8 pull-left">
                                <select class="form-control" name="bankID" id="select_kyhan" v-model="this.kyhanslug" v-on:change="changeKyHan(this.kyhanslug)">
                                    <option value="KKH">Không kỳ hạn</option>
                                    <option value="1">1 tháng</option>
                                    <option value="3">3 tháng</option>
                                    <option value="6">6 tháng</option>
                                    <option value="9">9 tháng</option>
                                    <option value="12">12 tháng</option>
                                    <option value="24">24 tháng</option>
                                    <option value="36">36 tháng</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 row margin-top-5px">
                    <p class="text-center">
                        <strong class="font-size-13px">Biểu đồ lãi suất tại các ngân hàng trong nước!</strong>
                    </p>
                </div>
                <div class="chart col-md-12 row">
                    <!-- Sales Chart Canvas -->
                    <canvas id="interest_chart_draw" style="height: 450px; width: 100%;"></canvas>
                </div>
                <!-- /.chart-responsive -->
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
                arrVietcomBank: [], arrNCB: [], arrVietinBank: [], arrSCB: [], arrArgiBank: [],
                arrDongA: [], arrSHB: [], arrVIB: [],
                kyhanslug: "3",
                kyhanText: "Không kỳ hạn",
                timeUpdate: ""
            }
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getInterest();
            this.getTimeUpdate();
        },
        methods: {
            /**
             * Implement function here
             */
            getInterest() {
                axios.get('api/v1/get-interest-rate').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        if (objExchangeData[i]['bank_code'] === 'vietcombank') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrVietcomBank.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'ncb') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrNCB.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'vietin') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrVietinBank.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'scb') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrSCB.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'agribank') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrArgiBank.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'donga') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrDongA.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'shb') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrSHB.push(objExchangeData[i]);
                        } if (objExchangeData[i]['bank_code'] === 'vib') {
                            if (objExchangeData[i]['laisuat_vnd'] == null) {
                                objExchangeData[i]['laisuat_vnd'] = "-"
                            }
                            this.arrVIB.push(objExchangeData[i]);
                        }
                    }
                    this.arrVietcomBank.reverse(); this.arrNCB.reverse(); this.arrVietinBank.reverse();
                    this.arrSCB.reverse(); this.arrArgiBank.reverse(); this.arrDongA.reverse();
                    this.arrSHB.reverse(); this.arrVIB.reverse();
                }).catch(error => {
                    console.log(error);
                });
            },

            changeKyHan(kyhanSlug) {
                switch (kyhanSlug) {
                    case 'KKH':
                        this.kyhanText = "Không kỳ hạn";
                        break;
                    case 1:
                        this.kyhanText = "1 tháng";
                        break;
                    case 3:
                        this.kyhanText = "3 tháng";
                        break;
                    case 6:
                        this.kyhanText = "6 tháng";
                        break;
                    case 9:
                        this.kyhanText = "9 tháng";
                        break;
                    case 12:
                        this.kyhanText = "12 tháng";
                        break;
                    case 24:
                        this.kyhanText = "24 tháng";
                        break;
                    case 36:
                        this.kyhanText = "36 tháng";
                        break;
                    default:
                        break;
                }
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

<style scoped>

</style>
