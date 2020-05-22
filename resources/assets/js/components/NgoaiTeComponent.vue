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
                            <a href="">USD</a>
                            <a href="">EUR</a>
                            <a href="">AUD</a>
                            <a href="">SGD</a>
                            <a href="">JPY</a>
                            <a href="">KRW</a>
                            <a href="">HKD</a>
                            <a href="">CNY</a>
                            <a href="">KRR</a>
                            <a href="">INR</a>
                            <a href="">GBP</a>
                            <a href="">MYR</a>
                            <a href="">SEK</a>
                        </div>
                        <hr>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn loại tiền</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="">
                                        <option value="1">USD <label class="font-size-13px"><i>(Dollar Mỹ)</i></label></option>
                                        <option value="2">EUR <label class="font-size-13px"><i>(Đồng Euro)</i></label></option>
                                        <option value="3">AUD <label class="font-size-13px"><i>(Dollar Úc)</i></label></option>
                                        <option value="4">SGD <label class="font-size-13px"><i>(Dollar Singapore)</i></label></option>
                                        <option value="5">JPY <label class="font-size-13px"><i>(Yên Nhật)</i></label></option>
                                        <option value="6">KRW <label class="font-size-13px"><i>(Won Hàn Quốc)</i></label></option>
                                        <option value="7">HKD <label class="font-size-13px"><i>(Dollar Hồng kông)</i></label></option>
                                        <option value="8">CNY <label class="font-size-13px"><i>(Đồng Nhân Dân Tệ)</i></label></option>
                                        <option value="9">KRR <label class="font-size-13px"><i>(Đồng Kíp Laos)</i></label></option>
                                        <option value="10">INR <label class="font-size-13px"><i>(Inndi Ấn Độ)</i></label></option>
                                        <option value="11">GBP <label class="font-size-13px"><i>(Đồng Bảng Anh)</i></label></option>
                                        <option value="12">MYR <label class="font-size-13px"><i>(Kíp Myanmar)</i></label></option>
                                        <option value="13">SEK <label class="font-size-13px"><i>(Đồng Kíp SÉC)</i></label></option>
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
                                <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết đồng <span>USD</span> - <span class="font-weight-initial font-size-16px">cập nhật lúc: 17:15:02 20/05/2020</span></h2>
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
                                <tr>
                                    <th class="bg-gray text-left">Techcombank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">HSBC</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">VietcomBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">SHB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">BIDV</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">ArgiBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">VietinBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">DongABank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,359</th>
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
                                <strong class="font-size-13px">Tỷ giá đồng <span id="txt_money_code" class="color-d66c0b">USD</span> trong 6 tháng trước</strong>
                            </p>
                        </div>
                        <div class="chart col-md-12 row">
                            <!-- Sales Chart Canvas -->
                            <canvas id="exchangeChart" style="height: 350px; width: 100%;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
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
            return {}
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
                axios.get('api/v1/get-exchange').then(response => {
                    let objExchangeData = response.data;
                    for (let i = 0; i < objExchangeData.length; i++) {
                        console.log(objExchangeData[i]);
                    }
                }).catch(error => {
                    console.log(error);
                });
            }
        }
    }

    /**
     * function chart JS
     * */
    $(function () {
        'use strict';
        /**
         * Code JS draw chart here
         * */
        // Get context with jQuery - using jQuery's .get() method.
        var exchangeChartCanvas = $('#exchangeChart').get(0).getContext('2d');
        // This will get the first returned node in the jQuery collection.
        var exchangeChart = new Chart(exchangeChartCanvas);

        var exchangeChartData = {
            labels  : [
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'January', 'February', 'March', 'April', 'May', 'June', 'July'
            ],
            datasets: [
                {
                    label               : 'Tỷ giá ngoại tệ',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [
                        28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86, 27, 90
                    ]
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
    });
</script>

<style scoped>

</style>
