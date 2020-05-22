<template>
    <div class="gia-vang-component">
        <!-- Gia vang content -->
        <div class="section margin-top-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-item">
                            <div class="col-md-12 row">
                                <div class="full">
                                    <div class="heading_main text_align_center">
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
                                    <select class="form-control" name="bankID" id="">
                                        <option value="1">SJC</option>
                                        <option value="2">PNG</option>
                                        <option value="3">Phú Quý</option>
                                        <option value="4">Bảo Tín Minh Châu</option>
                                        <option value="5">DOJI</option>
                                        <option value="6">Giá vàng thế giới</option>
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
                                <h2 class="font-size-22px"><span class="theme_color"></span>Giá vàng <span>SJC</span> - <span class="font-size-16px">cập nhật lúc: 17:30:03 20/05/2020</span></h2>
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
                                <tr>
                                    <th class="bg-gray text-left">Hà Nội</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">TP Hồ Chí Minh</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Đà Nẵng</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Huế</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Bình Dương</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Tuyên Quang</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Hải Phòng</th>
                                    <th>15,141</th>
                                    <th>15,333</th>
                                    <th>15,290</th>
                                </tr>
                                <tr>
                                    <th class="bg-gray text-left">Cần Thơ</th>
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
        </div>
        <!-- end table -->

        <!-- section draw chart -->
        <div class="section">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 row">
                            <p class="text-center">
                                <strong class="font-size-13px">Giá vàng <span id="txt_money_code" class="color-d66c0b">SJC</span> trong 6 tháng trước</strong>
                            </p>
                        </div>
                        <div class="chart col-md-12 row">
                            <!-- Sales Chart Canvas -->
                            <canvas id="goldChart" style="height: 350px; width: 100%;"></canvas>
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
        name: "giavangComponent"
    }

    /**
     * jQuery draw chart
     */
    $(function () {
        'use strict';

        // Get context with jQuery - using jQuery's .get() method.
        var goldChartCanvas = $('#goldChart').get(0).getContext('2d');
        // This will get the first returned node in the jQuery collection.
        var goldChart = new Chart(goldChartCanvas);

        var goldChartData = {
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
                    pointColor          : '#ff880e',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [
                        28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86, 27, 90
                    ]
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
    });
</script>

<!-- Css more -->
<style scoped>

</style>
