@extends('layouts.frontend')

@section('seo_advanced')
    {!! $seo_advanced !!}
@endsection

@section('content')
    <!-- Start Banner -->
    @include('layouts.ads_ngang')
    <!-- End Banner -->

    <div id="app">
        <gia-vang-component></gia-vang-component>
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
         * jQuery draw chart
         */
        $(function () {
            'use strict';

            /**
             * On load page draw chart
             * Default chart has sjc
             */
            $.ajax({
                url: 'api/v1/get-gold-exchange/drawChart/sjc',
                type: 'GET',
                data: {},
                success: function (result) {
                    var label = [], data = [];
                    for (let i = 0; i < result.length; i++) {
                        label.push(result[i]['time']);
                        data.push(result[i]['mua']);
                    }
                    // Call function draw Charts
                    drawGoldChart(data, label)
                }
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
        function initDrawChart(goldType) {
            if (goldType == undefined) {
                goldType = $(this).val();
            }
            $.ajax({
                url: 'api/v1/get-gold-exchange/drawChart/' + goldType,
                type: 'GET',
                data: {},
                success: function (result) {
                    var label = [], data = [];
                    for (let i = 0; i < result.length; i++) {
                        label.push(result[i]['time']);
                        data.push(result[i]['mua']);
                    }
                    // Call function draw Charts
                    drawGoldChart(data, label)
                }
            });
        }

        /**
         * Code JS draw chart here
         * */
        function drawGoldChart(data, label)
        {
            // Get context with jQuery - using jQuery's .get() method.
            var goldChartCanvas = $('#gold_chart').get(0).getContext('2d');
            // This will get the first returned node in the jQuery collection.
            var goldChart = new Chart(goldChartCanvas);

            var goldChartData = {
                labels  : label,
                datasets: [
                    {
                        label               : 'Tỷ giá vàng trong nước',
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
@endsection
