<template>
    <div class="lai-suat-component">
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
                                        <h2 class="font-size-22px"><span class="theme_color"></span>Chi tiết lãi suất các ngân hàng</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pull-left">
                            <div class="row">
                                <div class="col-md-3 row pull-left">
                                    <label style="margin-top:10px;">Chọn kỳ hạn</label>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <select class="form-control" name="bankID" id="select_kyhan" v-model="this.kyhanslug" v-on:change="selectKyHan()">
                                        <option value="KHH">Không kỳ hạn</option>
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
                </div>
            </div>
        </div>

        <!-- section exchanges -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2 class="font-size-22px"><span class="theme_color"></span>Lãi suất tại quầy - <span class="font-size-16px">cập nhật lúc: {{ this.timeUpdate }}</span></h2>
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
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Techcombank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OceanBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">BIDV</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">VietinBank</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Bắc Á</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">SCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">OCB</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                    <th>15,290</th>
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
                <div class="col-md-12 row">
                    <p class="text-center">
                        <strong class="font-size-13px">Biểu đồ lãi suất <span id="txt_money_code" class="color-d66c0b text-uppercase">{{ this.kyhanText }}</span> tại các ngân hàng trong nước!</strong>
                    </p>
                </div>
                <div class="chart col-md-12 row">
                    <!-- Sales Chart Canvas -->
                    <canvas id="interest_chart" style="height: 350px; width: 100%;"></canvas>
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
                arrKHH: [], arrKyHan1THang: [], arrKyHan3THang: [], arrKyHan6THang: [], arrKyHan9THang: [],
                arrKyHan12THang: [], arrKyHan24THang: [],  arrKyHan36THang: [],
                kyhanslug: "KHH",
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
                        console.log(objExchangeData[i]);
                    }
                }).catch(error => {
                    console.log(error);
                });
            },

            /**
            * Function select an kyhan
            * Fill table data new
            **/
            selectKyHan() {

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
     * jQuery draw chart
     */
    $(function () {
        'use strict';

        /**
         * On load page draw chart
         * Default chart has sjc
         */
        $(document).ready(function () {
            initDrawChart(32);
        });

        /**
         * change gold make select
         * draw chart again
         */
        $('#select_gold').on('change', function () {
            var goldType = $(this).val();
            initDrawChart(goldType);
        });
    });

    /**
     * Function has running with change gold
     * Function has replace chart oid
     */
    function initDrawChart(kyhanslug) {
        if (kyhanslug == undefined) {
            goldType = $(this).val();
        }
        $.ajax({
            url: 'api/v1/get-interest-rate',
            type: 'GET',
            data: {},
            success: function (result) {
                var label = [], data = [];
                console.log(result);
                for (let i = 0; i < result.length; i++) {
                    label.push(result[i]['time']);
                    data.push(result[i]['mua']);
                }
                // Call function draw Charts
                drawChart(data, label)
            }
        });
    }

    /**
     * Code JS draw chart here
     * */
    function drawChart(data, label)
    {
        // Get context with jQuery - using jQuery's .get() method.
        var goldChartCanvas = $('#interest_chart').get(0).getContext('2d');
        // This will get the first returned node in the jQuery collection.
        var goldChart = new Chart(goldChartCanvas);

        var goldChartData = {
            labels  : label,
            datasets: [
                {
                    label               : 'Tỷ giá ngoại tệ',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#ff880e',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : data
                }
            ]
        };

        var goldChartOptions = {
            // Boolean - If we should show the scale at all
            showScale               : true,
            // Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            // String - Colour of the grid lines
            // scaleGridLineColor      : 'rgba(0,0,0,.05)',
            // Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            // Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: false,
            // Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            // Boolean - Whether the line is curved between points
            bezierCurve             : false,
            // Number - Tension of the bezier curve between points
            bezierCurveTension      : 0.3,
            // Boolean - Whether to show a dot for each point
            pointDot                : true,
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
        goldChart.Line(goldChartData, goldChartOptions);
    }
</script>

<style scoped>

</style>
