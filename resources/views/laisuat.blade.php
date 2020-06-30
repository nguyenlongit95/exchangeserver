@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/images/ads/ads_ngang.gif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div id="app">
        <lai-suat-component></lai-suat-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <?php $timeNow = \Carbon\Carbon::now(); ?>
    <!-- Start Banner -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_title">
                    <p>Lãi suất tiền gửi tiết kiệm VND dành cho khách hàng cá nhân tại <strong>các ngân hàng trong nước</strong> được cập nhật <strong>mới nhất.</strong></p>
                    <p>Bảng so sánh lãi suất gửi tiết kiệm tại quầy và gửi tiết kiệm trực tuyến.</p>
                    <p>Hai loại lãi suất này có đôi chút khác nhau. Mời các bạn so sánh ở bên dưới.</p>
                    <p>Dữ liệu được cập nhật lúc <span class="font-color-red">{{ $timeNow->format('d-m-Y H:i') }}</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
@endsection

@section('jsChart')
    <script>
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
                initDrawChart("3");
            });

            /**
             * change gold make select
             * draw chart again
             */
            $('#select_kyhan').on('change', function () {
                var kyhanSlug = $(this).val();
                initDrawChart(kyhanSlug);
            });
        });

        /**
         * Function has running with change gold
         * Function has replace chart oid
         */
        function initDrawChart(kyhanslug) {
            if (kyhanslug == undefined) {
                kyhanslug = $(this).val();
            }
            $.ajax({
                url: 'api/v1/get-interest-rate',
                type: 'GET',
                data: {},
                success: function (result) {
                    var label = [], data = [];
                    label.splice(0, label.length);
                    data.splice(0, data.length);
                    for (let i = 0; i < result.length; i++) {
                        if (result[i]['kyhanslug'] === kyhanslug) {
                            label.push(result[i]['bank_code']);
                            data.push(result[i]['laisuat_vnd']);
                        }
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
            var goldChartCanvas = $('#interest_chart_draw').get(0).getContext('2d');
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
                datasetFill             : true,

                maintainAspectRatio     : true,

                responsive              : true
            };
            goldChart.Line(goldChartData, goldChartOptions);
        }
    </script>
@endsection
