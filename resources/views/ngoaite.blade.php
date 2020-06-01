@extends('layouts.frontend')

@section('content')
    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Tỷ giá đồng: USD</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <div id="app">
        <ngoai-te-component></ngoai-te-component>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
@endsection

@section('jsChart')
    <script>
        /**
         * JS more detail
         * Can using jQuery here
         */
        /**
         * function chart JS
         * function has runing with init pages
         * */
        $(function () {
            'use strict';

            /**
             * Document ready has drawchart
             * Default momney: USD
             */
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
                initDrawChart(currency);
            });

            /**
             * Function listen event click tabs money
             * Call draw chart
             */
            $('.tabs-money').on('click', function () {
                var currency = $(this).val();
                initDrawChart(currency);
            });
        });

        function initDrawChart(currency) {
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
        }

        /**
         * Code JS draw chart here
         * */
        function drawChart(data, label)
        {
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
@endsection
