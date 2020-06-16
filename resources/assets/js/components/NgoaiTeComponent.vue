<template>
    <div class="ngoai-te-component">
        <!-- Start Banner -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center padding-bottom-25px">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Tỷ giá các đồng</h2>
                                    </div>
                                </div>
                            </div>
                            <button v-on:click="getExchangeDetail('USD')" class="poiter-crusor tabs-money btn-tabs" value="USD">USD</button>
                            <button v-on:click="getExchangeDetail('EUR')" class="poiter-crusor tabs-money btn-tabs" value="EUR">EUR</button>
                            <button v-on:click="getExchangeDetail('AUD')" class="poiter-crusor tabs-money btn-tabs" value="AUD">AUD</button>
                            <button v-on:click="getExchangeDetail('SGD')" class="poiter-crusor tabs-money btn-tabs" value="SGD">SGD</button>
                            <button v-on:click="getExchangeDetail('JPY')" class="poiter-crusor tabs-money btn-tabs" value="JPY">JPY</button>
                            <button v-on:click="getExchangeDetail('KRW')" class="poiter-crusor tabs-money btn-tabs" value="KRW">KRW</button>
                            <button v-on:click="getExchangeDetail('HKD')" class="poiter-crusor tabs-money btn-tabs" value="HKD">HKD</button>
                            <button v-on:click="getExchangeDetail('CNY')" class="poiter-crusor tabs-money btn-tabs" value="CNY">CNY</button>
                            <button v-on:click="getExchangeDetail('KRR')" class="poiter-crusor tabs-money btn-tabs" value="KRR">KRR</button>
                            <button v-on:click="getExchangeDetail('INR')" class="poiter-crusor tabs-money btn-tabs" value="INR">INR</button>
                            <button v-on:click="getExchangeDetail('GBP')" class="poiter-crusor tabs-money btn-tabs" value="GBP">GBP</button>
                            <button v-on:click="getExchangeDetail('MYR')" class="poiter-crusor tabs-money btn-tabs" value="MYR">MYR</button>
                            <button v-on:click="getExchangeDetail('SEK')" class="poiter-crusor tabs-money btn-tabs" value="SEK">SEK</button>
                        </div>
                        <hr>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn loại tiền</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="change_currency" v-on:change="getExchangeDetail()" v-model="currencyCode">
                                        <option value="USD">USD <label class="font-size-13px"><i>(Dollar Mỹ)</i></label></option>
                                        <option value="EUR">EUR <label class="font-size-13px"><i>(Đồng Euro)</i></label></option>
                                        <option value="AUD">AUD <label class="font-size-13px"><i>(Dollar Úc)</i></label></option>
                                        <option value="SGD">SGD <label class="font-size-13px"><i>(Dollar Singapore)</i></label></option>
                                        <option value="JPY">JPY <label class="font-size-13px"><i>(Yên Nhật)</i></label></option>
                                        <option value="KRW">KRW <label class="font-size-13px"><i>(Won Hàn Quốc)</i></label></option>
                                        <option value="HKD">HKD <label class="font-size-13px"><i>(Dollar Hồng kông)</i></label></option>
                                        <option value="CNY">CNY <label class="font-size-13px"><i>(Đồng Nhân Dân Tệ)</i></label></option>
                                        <option value="KRR">KRR <label class="font-size-13px"><i>(Đồng Kíp Laos)</i></label></option>
                                        <option value="INR">INR <label class="font-size-13px"><i>(Inndi Ấn Độ)</i></label></option>
                                        <option value="GBP">GBP <label class="font-size-13px"><i>(Đồng Bảng Anh)</i></label></option>
                                        <option value="MYR">MYR <label class="font-size-13px"><i>(Kíp Myanmar)</i></label></option>
                                        <option value="SEK">SEK <label class="font-size-13px"><i>(Đồng Kíp SÉC)</i></label></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- section exchanges -->
        <div class="section margin-top-25px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Chi tiết đồng <span>{{ this.currency }}</span> - <span class="font-weight-initial font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h1>
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
                                    <th class="text-center">Mua tiền mặt</th>
                                    <th class="text-center">Mua chuyển khoản</th>
                                    <th class="text-center">Bán tiền mặt</th>
                                    <th class="text-center">Bán chuyển khoản</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="renderCurrency in arrListCurrency">
                                        <th class="bg-gray text-left">{{ renderCurrency.bank_name }}</th>
                                        <th>
                                            {{ renderCurrency.muatienmat }}
                                            <span v-if="renderCurrency.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderCurrency.muatienmat_diff }}</i>
                                        </span>
                                            <span v-if="renderCurrency.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderCurrency.muatienmat_diff }}</i>
                                        </span>
                                        </th>
                                        <th>
                                            {{ renderCurrency.bantienmat }}
                                            <span v-if="renderCurrency.bantienmat_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderCurrency.bantienmat_diff }}</i>
                                        </span>
                                            <span v-if="renderCurrency.bantienmat_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderCurrency.bantienmat_diff }}</i>
                                        </span>
                                        </th>
                                        <th>
                                            {{ renderCurrency.muachuyenkhoan }}
                                            <span v-if="renderCurrency.muachuyenkhoan_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderCurrency.muachuyenkhoan_diff }}</i>
                                        </span>
                                            <span v-if="renderCurrency.bantienmat_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderCurrency.muachuyenkhoan_diff }}</i>
                                        </span>
                                        </th>
                                        <th>
                                            {{ renderCurrency.banchuyenkhoan }}
                                            <span v-if="renderCurrency.banchuyenkhoan_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderCurrency.banchuyenkhoan_diff }}</i>
                                        </span>
                                            <span v-if="renderCurrency.banchuyenkhoan_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderCurrency.banchuyenkhoan_diff }}</i>
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
        <!-- end section -->

        <!-- section draw chart -->
        <div class="section">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 row">
                            <p class="text-center">
                                <strong class="font-size-13px">Tỷ giá đồng <span id="txt_money_code" class="color-d66c0b">{{ this.currency }}</span> trong các lần cập nhật gần nhất</strong>
                            </p>
                        </div>
                        <div class="chart col-md-12 row">
                            <!-- Sales Chart Canvas -->
                            <canvas id="exchangeChart" style="height: 350px; width: 100%;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                        <input type="hidden" id="currnecy_code" :value="this.currency">
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <!-- Start Banner -->
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-left">
                            <strong class="font-size-13px">Chuyển đổi đồng <span id="txt_money_code" class="color-d66c0b">{{ this.currency }}</span> sang VNĐ</strong>
                        </p>
                        <div class="form-group well well-lg" style="margin-top: 10px; visibility: visible; padding: 1% 5% 0 5%; margin-bottom: 5px;background: #e3e3e3">
                            <div class="text-center" style="padding-bottom: 2%;">
                                <small class="text-red">Chuyển đồi tỷ giá trung bình: <span id="txt_money_code" class="color-d66c0b">{{ this.currency }}</span></small>
                            </div>
                            <form class="form-inline">
                                <div class="col-md-12 row">
                                    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
                                        <div class="form-group pull-right" id="from_coin">
                                            <div class="input-group">
                                                <input type="number" id="money1" class="form-control input-coin" data-rate="1" data-mo="AUD" v-model="this.inputFirstMoney" v-on:change="changeMoney(this.inputFirstMoney)">
                                                <label for="money1" class="input-group-addon" style="margin-left:5px;">
                                                    <span>{{ this.currency }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 text-center">
                                        <button type="button" id="swap_button" class="btn btn-sm btn-primary money1" style="margin-top:3%;">
<!--                                            <i class="fa fa-arrow-right "></i>-->
                                            <img src="/frontend/images/arrows-alt-h-solid.svg" alt="" height="20px">
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
                                        <div class="form-group" id="to_coin">
                                            <div class="input-group">
                                                <input type="text" id="moneyVN" disabled class="form-control input-coin" data-mo="VND" v-model="this.inputSecondMoney">
                                                <label for="moneyVN" class="input-group-addon text-flag" style="margin-left:5px;">
                                                    <span>VND</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div id="convert_text" style="margin-top: 20px; color: #f00; font-weight: 600; letter-spacing: 0.5px; word-break: break-all"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-right" style="padding-bottom: 1%;">
                                <small><i> Cập nhật:  {{ this.timeUpdate }} </i></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

    </div>
</template>

<script>
    /**
     * Code JS Vue component here
     */
    export default {
        data() {
            /**
             * Create local variable
             */
            return {
                arrListCurrency: [],
                currency: '',
                currencyCode: 'USD',
                timeUpdate: '',
                inputFirstMoney: 0,
                inputSecondMoney: 0,
                exchangeMoney: 0
            }
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getExchanges();
        },
        methods: {
            /**
             * Implement function here
             */
            getExchanges() {
                axios.get('api/v1/get-currency').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        objExchangeData[i]['bank_name'] = this.fillBankName(objExchangeData[i]['bank_code']);
                        this.arrListCurrency.push(objExchangeData[i]);
                        if (this.arrListCurrency[i]['bank_code'] === 'vietin' && this.arrListCurrency[i]['code'] == this.currencyCode) {
                            this.exchangeMoney = this.arrListCurrency[i]['muatienmat'];
                        }
                    }
                    this.arrListCurrency.reverse();
                    this.currency = "USD";
                    this.getTimeUpdate();
                }).catch(error => {
                    console.log(error);
                });
            },

            getExchangeDetail(currency_code) {
                if (currency_code != undefined) {
                    this.currencyCode = currency_code;
                }
                this.arrListCurrency.splice(0, this.arrListCurrency.length);
                axios.get('api/v1/get-currency/' + this.currencyCode).then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        objExchangeData[i]['bank_name'] = this.fillBankName(objExchangeData[i]['bank_code']);
                        this.arrListCurrency.push(objExchangeData[i]);
                        if (this.arrListCurrency[i]['bank_code'] === 'vietin' && this.arrListCurrency[i]['code'] == this.currencyCode) {
                            this.exchangeMoney = this.arrListCurrency[i]['muatienmat'];
                        }
                    }
                    this.arrListCurrency.reverse();
                    this.currency = this.currencyCode;
                    this.getTimeUpdate();
                }).catch(error => {
                    console.log(error);
                });
                this.getTimeUpdate();
            },

            fillBankName(bank_code) {
                switch (bank_code) {
                    case "tpb":
                        return "TPB";
                        break;
                    case 'eximbank':
                        return "EximBank";
                        break;
                    case 'dab':
                        return "DongA";
                        break;
                    case 'vietcombank':
                        return "VietcomBank";
                        break;
                    case 'sacombank':
                        return "SacomBank";
                        break;
                    case 'vietin':
                        return "VietinBank";
                        break;
                    case 'shb':
                        return "SHB";
                        break;
                    case 'hsbc':
                        return "HSBC";
                        break;
                    case 'techcom':
                        return "TechcomBank";
                        break;
                    case 'bidv':
                        return "BIDV";
                        break;
                    case 'acb':
                        return "ACB";
                        break;
                    case 'argibank':
                        return "ArgiBank";
                        break;
                    case 'mbbank':
                        return "MBBank";
                        break;
                    default:
                        return null;
                        break;
                }
            },

            changeMoney(numberMoney) {
                let tempMoney = 0;
                if (numberMoney == null && numberMoney <= 0) {
                    this.inputSecondMoney = 0;
                } else {
                    for (let i = 0; i < this.arrListCurrency.length; i++) {
                        if (this.arrListCurrency[i]['bank_code'] === 'vietin' && this.arrListCurrency[i]['code'] == this.currencyCode) {
                            tempMoney = this.arrListCurrency[i]['muatienmat'];
                        }
                    }
                }
                let calMoney = numberMoney * tempMoney;
                this.inputFirstMoney = numberMoney;
                this.inputSecondMoney = calMoney;
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
