<template>
    <div class="ngoai-te-component">
        <!-- Start Banner -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Tỷ giá các đồng</h2>
                                    </div>
                                </div>
                            </div>
                            <a v-on:click="getExchangeDetail('USD')" class="poiter-crusor">USD</a>
                            <a v-on:click="getExchangeDetail('EUR')" class="poiter-crusor">EUR</a>
                            <a v-on:click="getExchangeDetail('AUD')" class="poiter-crusor">AUD</a>
                            <a v-on:click="getExchangeDetail('SGD')" class="poiter-crusor">SGD</a>
                            <a v-on:click="getExchangeDetail('JPY')" class="poiter-crusor">JPY</a>
                            <a v-on:click="getExchangeDetail('KRW')" class="poiter-crusor">KRW</a>
                            <a v-on:click="getExchangeDetail('HKD')" class="poiter-crusor">HKD</a>
                            <a v-on:click="getExchangeDetail('CNY')" class="poiter-crusor">CNY</a>
                            <a v-on:click="getExchangeDetail('KRR')" class="poiter-crusor">KRR</a>
                            <a v-on:click="getExchangeDetail('INR')" class="poiter-crusor">INR</a>
                            <a v-on:click="getExchangeDetail('GBP')" class="poiter-crusor">GBP</a>
                            <a v-on:click="getExchangeDetail('MYR')" class="poiter-crusor">MYR</a>
                            <a v-on:click="getExchangeDetail('SEK')" class="poiter-crusor">SEK</a>
                        </div>
                        <hr>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn loại tiền</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="changeCurrency" v-on:change="getExchangeDetail()" v-model="currencyCode">
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
                                <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết đồng <span>{{ this.currency }}</span> - <span class="font-weight-initial font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h2>
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
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti cum, temporibus tempora soluta assumenda est, veritatis asperiores possimus placeat quis nesciunt fugiat officiis ipsa quae, unde facere eos recusandae sapiente?</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit eos ipsum dignissimos voluptatem voluptatibus quod magni vel distinctio asperiores quibusdam esse consequuntur ut amet excepturi labore, delectus voluptates hic consequatur.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, non ad. Molestiae velit nemo minus, tempora saepe accusantium exercitationem, natus sint sapiente officiis doloribus assumenda minima ea suscipit, autem optio.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit unde vel inventore nisi culpa libero perspiciatis placeat corrupti, maxime consequatur tenetur suscipit consectetur molestiae delectus necessitatibus excepturi eius doloremque voluptates?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, id? Maxime, hic animi sit nulla voluptatibus non dolores quam amet reiciendis rem doloribus ducimus molestias sequi temporibus quasi dolorum soluta.</p>
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
                timeUpdate: ''
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
                    // console.log(objExchangeData);
                    for (let i = 0; i < objExchangeData.length; i++) {
                        objExchangeData[i]['bank_name'] = this.fillBankName(objExchangeData[i]['bank_code']);
                        this.arrListCurrency.push(objExchangeData[i]);
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

    /**
     * function chart JS
     * function has runing with init pages
     * */
    $(function () {
       'use strict';
       let currencyCode = $('#currnecy_code').val();
       $.ajax({
           url: 'api/v1/get-currency/charts/USD',
           type: 'GET',
           data: {},
           success: function (result) {
               var label = [], data = [];
               for (let i = 0; i < result.length; i++) {
                    label.push(result[i]['time']);
                    data.push(result[i]['muatienmat']);
               }
               // Call function draw Charts
               drawChart(data, label)
           }
       });

       /**
        * Function has running with change Currency
        * Function has replace chart oid
        */
        $('#changeCurrency').on('change', function () {
            var currency = $(this).val();
            $.ajax({
            url: 'api/v1/get-currency/charts/' + currency,
            type: 'GET',
            data: {},
            success: function (result) {
                var label = [], data = [];
                for (let i = 0; i < result.length; i++) {
                        label.push(result[i]['time']);
                        data.push(result[i]['muatienmat']);
                }
                // Call function draw Charts
                drawChart(data, label)
            }
       });
        });
    });


    function drawChart(data, label)
    {
        /**
         * Code JS draw chart here
         * */
            // Get context with jQuery - using jQuery's .get() method.
        var exchangeChartCanvas = $('#exchangeChart').get(0).getContext('2d');
        // This will get the first returned node in the jQuery collection.
        var exchangeChart = new Chart(exchangeChartCanvas);

        var exchangeChartData = {
            labels  : label,
            datasets: [
                {
                    label               : 'Tỷ giá ngoại tệ',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : data
                }
            ]
        };

        var exchangeChartOptions = {
            // Boolean - If we should show the scale at all
            showScale               : true,
            // Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            // String - Colour of the grid lines
            // scaleGridLineColor      : 'rgba(0,0,0,.05)',
            // Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            // Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            // Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            // Boolean - Whether the line is curved between points
            bezierCurve             : false,
            // Number - Tension of the bezier curve between points
            bezierCurveTension      : 0.3,
            // Boolean - Whether to show a dot for each point
            pointDot                : false,
            // Number - Radius of each point dot in pixels
            pointDotRadius          : 4,
            // Number - Pixel width of point dot stroke
            pointDotStrokeWidth     : 1,
            // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius : 20,
            // Boolean - Whether to show a stroke for datasets
            datasetStroke           : true,
            // Number - Pixel width of dataset stroke
            datasetStrokeWidth      : 2,
            // Boolean - Whether to fill the dataset with a color
            datasetFill             : false,

            maintainAspectRatio     : true,

            responsive              : true
        };
        exchangeChart.Line(exchangeChartData, exchangeChartOptions);
    }
</script>

<style scoped>

</style>
