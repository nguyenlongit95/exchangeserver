<template>
    <div class="ty-gia-component">
        <!-- Start Banner -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main pull-left">
                                        <h1 class="font-size-22px"><span class="theme_color"></span>Chi tiết tỷ giá các ngân hàng</h1>
                                    </div>
                                </div>
                            </div>
                            <a v-on:click="getBankDetail('techcom')" class="poiter-crusor">Techcombank</a>
                            <a v-on:click="getBankDetail('hsbc')" class="poiter-crusor">HSBC</a>
                            <a v-on:click="getBankDetail('shb')" class="poiter-crusor">SHB</a>
                            <a v-on:click="getBankDetail('tpb')" class="poiter-crusor">TPB</a>
                            <a v-on:click="getBankDetail('bidv')" class="poiter-crusor">BIDV</a>
                            <a v-on:click="getBankDetail('vietin')" class="poiter-crusor">VietinBank</a>
                            <a v-on:click="getBankDetail('sacombank')" class="poiter-crusor">SacomBank</a>
                            <a v-on:click="getBankDetail('vietcombank')" class="poiter-crusor">VietcomBank</a>
                            <a v-on:click="getBankDetail('dab')" class="poiter-crusor">DongABank</a>
                            <a v-on:click="getBankDetail('acb')" class="poiter-crusor">ACB</a>
                            <a v-on:click="getBankDetail('argibank')" class="poiter-crusor">ArgiBank</a>
                            <a v-on:click="getBankDetail('eximbank')" class="poiter-crusor">EximBank</a>
                            <a v-on:click="getBankDetail('mbbank')" class="poiter-crusor">MBank</a>
                        </div>
                        <div class="btn-item">
                            <a href="vn-index" class="poiter-crusor">VN-Index</a>
                        </div>
                        <hr>
                        <br>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn ngân hàng</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="" v-on:change="getBankDetail()" v-model="bankName">
                                        <option selected value="techcom">Techcombank</option>
                                        <option value="hsbc">HSBC</option>
                                        <option value="shb">SHB</option>
                                        <option value="tpb">TPB</option>
                                        <option value="bidv">BIDV</option>
                                        <option value="vietin">VietinBank</option>
                                        <option value="sacombank">SacomBank</option>
                                        <option value="vietcombank">VietcomBank</option>
                                        <option value="dab">DongABank</option>
                                        <option value="acb">ACB</option>
                                        <option value="argibank">ArgiBank</option>
                                        <option value="eximbank">EximBank</option>
                                        <option value="mbbank">MBank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="fb-like" data-href="https://tygia.site/" data-width="32" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
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
                            <div class="heading_main pull-left text-left col-md-6 row">
                                <h1 class="font-size-22px border-bottom-2px-solid"><span class="theme_color"></span>Tỷ giá <span class="text-uppercase">{{ this.thisBank }}</span> - <span class="font-weight-initial font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h1>
                            </div>
                            <div class="heading_main pull-right text-right col-md-6">
                                <div class="col-md-7 pull-left"></div>
                                <div class="col-md-6 pull-right margin-bottom-10">
                                    <input type="date" class="form-control pull-right row" name="bankID" id="time_input" v-model="timeSearch" v-on:change="getBankDetailSearch()">
                                </div>
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
                                    <th class="text-left">Ngoại tệ</th>
                                    <th class="text-center">Mua tiền mặt</th>
                                    <th class="text-center">Mua chuyển khoản</th>
                                    <th class="text-center">Bán tiền mặt</th>
                                    <th class="text-center">Bán chuyển khoản</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="renderExchanges in exchanges">
                                    <th class="bg-gray text-left">{{ renderExchanges.code }} <span class="font-size-13px"><i>({{ renderExchanges.currency_name }})</i></span></th>
                                    <th>
                                        {{ renderExchanges.muatienmat }}
                                        <span v-if="renderExchanges.muatienmat_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderExchanges.muatienmat_diff }}</i>
                                        </span>
                                        <span v-if="renderExchanges.muatienmat_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderExchanges.muatienmat_diff }}</i>
                                        </span>
                                    </th>
                                    <th>
                                        {{ renderExchanges.muachuyenkhoan }}
                                        <span v-if="renderExchanges.muachuyenkhoan_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderExchanges.muachuyenkhoan_diff }}</i>
                                        </span>
                                        <span v-if="renderExchanges.muachuyenkhoan_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderExchanges.muachuyenkhoan_diff }}</i>
                                        </span>
                                    </th>
                                    <th>
                                        {{ renderExchanges.bantienmat }}
                                        <span v-if="renderExchanges.bantienmat_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderExchanges.bantienmat_diff }}</i>
                                        </span>
                                        <span v-if="renderExchanges.bantienmat_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderExchanges.bantienmat_diff }}</i>
                                        </span>
                                    </th>
                                    <th>
                                        {{ renderExchanges.banchuyenkhoan }}
                                        <span v-if="renderExchanges.banchuyenkhoan_diff > 0" class="font-size-13px font-color-green">
                                            <i class="fa fa-arrow-up"> {{ renderExchanges.banchuyenkhoan_diff }}</i>
                                        </span>
                                        <span v-if="renderExchanges.banchuyenkhoan_diff < 0" class="font-size-13px font-color-red">
                                            <i class="fa fa-arrow-down"> {{ renderExchanges.banchuyenkhoan_diff }}</i>
                                        </span>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 layout_padding pull-left row" v-for="renderBankInfo in bankInfo">
                    <section v-html="renderBankInfo"></section>
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
                listBank: [
                    'tpb', 'mbbank', 'eximbank', 'dab', 'vietcombank', 'sacombank', 'vietin', 'shb',
                    'hsbc', 'techcom', 'bidv', 'acb', 'argibank'
                ],

                exchanges: [],
                thisBank: [],
                timeUpdate: [],
                timeSearch: "",
                bankName: 'vietcombank',
                bankInfo: []
            }
        },
        created: function () {
            /**
             * construction function call labs
             */
            this.getDefaultBank();
            this.getTimeUpdate();
        },
        methods: {
            /**
             * Implement function here
             * Default bank that vietcombank
             */
            getDefaultBank() {
                axios.get('api/v1/get-exchange/vietcombank').then(response => {
                    let objExchangeData = response.data;

                    for (let i = 0; i < objExchangeData.length; i++) {
                        let moneyName = this.fillNameMoney(objExchangeData[i]['code']);
                        objExchangeData[i]['currency_name'] = moneyName;
                        this.exchanges.push(objExchangeData[i]);
                    }
                    this.exchanges.sort();
                    this.thisBank = "VietcomBank";
                }).catch(error => {
                    console.log(error);
                });
                this.getBankInfo('vietcombank');
            },

            /**
             * Function get exchange of an bank
             * Fill data to tabe grid
             */
            getBankDetail(bank_code) {
                if (bank_code != undefined) {
                    this.bankName = bank_code;
                }
                axios.get('api/v1/get-exchange/' + this.bankName).then(response => {
                    let objExchangeData = response.data;
                    this.exchanges.splice(0, this.exchanges.length);

                    for (let i = 0; i < objExchangeData.length; i++) {
                        let moneyName = this.fillNameMoney(objExchangeData[i]['code']);
                        objExchangeData[i]['currency_name'] = moneyName;
                        this.exchanges.push(objExchangeData[i]);
                    }
                    this.thisBank = this.bankName;
                    this.getBankInfo(bank_code);
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Function get exchange of an bank use input search day
             * Fill data to tabe grid
             */
            getBankDetailSearch() {
                axios.post('api/v1/get-exchange/'+ this.bankName, {
                    timeSearch: this.timeSearch,
                }).then(response => {
                    let objExchangeData = response.data;
                    this.exchanges.splice(0, this.exchanges.length);

                    for (let i = 0; i < objExchangeData.length; i++) {
                        let moneyName = this.fillNameMoney(objExchangeData[i]['code']);
                        objExchangeData[i]['currency_name'] = moneyName;
                        this.exchanges.push(objExchangeData[i]);
                    }
                    this.thisBank = this.bankName;
                })
                .catch(error => {
                    console.log(error)
                });
            },

            getBankInfo(bank_code) {
                if (bank_code == undefined) {
                    bank_code = this.bankName;
                }
                axios.get('api/v1/get-bank-info/' + bank_code).then(response => {
                    let objExchangeData = response.data;
                    this.bankInfo.splice(0, this.bankInfo.length);
                    this.bankInfo.push(objExchangeData['description']);
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
             * Function fill name of money
             * @param exchanges
             * @returns {string|null}
             */
            fillNameMoney(exchanges) {
                switch (exchanges) {
                    case 'USD':
                        return "Đollar Mỹ";
                        break;
                    case "THB":
                        return "Bạt Thái Lan";
                        break;
                    case "SGD":
                        return "Dollar Singapore";
                        break;
                    case "SEK":
                        return "Krone Thuỵ Điển";
                        break;
                    case "SAR":
                        return "Đồng Audi Arabia";
                        break;
                    case "RUB":
                        return "Đồng Rup Nga";
                        break;
                    case "NOK":
                        return "Đồng Krone Na-uy";
                        break;
                    case "MYR":
                        return "Đồng Dollar Myanmar";
                        break;
                    case "KWD":
                        return "Dollar Kuwait";
                        break;
                    case "KRW":
                        return "Đồng Won Hàn Quốc";
                        break;
                    case "JPY":
                        return "Đồng Yên Nhật";
                        break;
                    case "INR":
                        return "Đồng Inrin Ấn Độ";
                        break;
                    case "HKD":
                        return "Dollar Hong Kong";
                        break;
                    case "GBP":
                        return "Bảng Anh";
                        break;
                    case "EUR":
                        return "Đồng Euro";
                        break;
                    case "DKK":
                        return "Krone Đan Mạch";
                        break;
                    case "CHF":
                        return "Đồng France Thuỵ Sỹ";
                        break;
                    case "CAD":
                        return "Dollar Canada";
                        break;
                    case "AUD":
                        return "Dollar Úc";
                        break;
                    case "NZD":
                        return "Dollar Newzelan";
                        break;
                    case "TWD":
                        return "Dollar Đài Loan";
                        break;
                    case "CNY":
                        return "Nhân Dân Tệ";
                        break;
                    default:
                        return null;
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
