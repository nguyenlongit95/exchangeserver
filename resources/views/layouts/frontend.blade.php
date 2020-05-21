<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Metas -->
    <title>Ứng dụng cập nhật tỷ giá thị trường.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/pogo-slider.min.css') }}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    <!-- CSS for date time picker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/asset/js/datetimepicker/css/bootstrap-datetimepicker.css') }}"/>

{{--    <!--[if lt IE 9]>--}}
{{--<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->--}}
{{--<!--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->--}}
{{--    <![endif]-->--}}

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="{{ asset('frontend/images/loader.gif') }}" alt="Loading..." />
    </div>
</div>
<!-- end loader -->
<!-- END LOADER -->

<!-- Start header -->
<header class="top-header">
    <div class="header_top">

        <div class="container">
            <div class="row">
                <div class="logo_section">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="image"></a>
                </div>
                <div class="site_information">
                    <li style="overflow: auto; width: 90%; height: 65px; margin-top:10px; margin-right: 5%;" class="pull-right">
                        <img style="float: right; height: 100px;" src="{{ asset('frontend/images/services_01.png') }}" alt="">
                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 30px;"></div>
                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </li>
                </div>
            </div>
        </div>

    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                    <nav class="navbar header-nav navbar-expand-lg">
                        <div class="menu_section">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <?php
                                $getURL = $_SERVER['REQUEST_URI'];
                                $arrURL = array_reverse(explode('/', $getURL));
                            ?>
                            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link @if($arrURL[0] == "home" || $arrURL[0] == "") active @endif" href="{{ url('/') }}">TRANG CHỦ</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "ty-gia" || $arrURL[1] == "ty-gia") active @endif" href="{{ url('ty-gia') }}">TỶ GIÁ NGÂN HÀNG</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "ngoai-te" || $arrURL[1] == "ngoai-te") active @endif" href="{{ url('ngoai-te') }}">NGOẠI TỆ</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "gia-vang" || $arrURL[1] == "gia-vang") active @endif" href="{{ url('gia-vang') }}">GIÁ VÀNG</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "lai-suat" || $arrURL[1] == "lai-suat") active @endif" href="{{ url('lai-suat') }}">LÃI SUẤT</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "tien-ao" || $arrURL[1] == "tien-ao") active @endif" href="{{ url('tien-ao') }}">TIỀN ẢO</a></li>
                                    <li><a class="nav-link @if($arrURL[0] == "xang-dau") active @endif" href="{{ url('xang-dau') }}">XĂNG DẦU</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Search">
                        <a class="search-btn">
                            <img src="{{ asset('frontend/images/search_icon.png') }}" alt="Tìm kiếm" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- End header -->

@yield('content')

<!-- Start Footer -->
<footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 white_fonts">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <img class="img-responsive" src="{{ asset('frontend/images/footer_logo.png') }}" alt="Ứng dụng cập nhật tỷ giá thị trường." />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3 class="font-size-16px">NGOẠI TỆ</h3>
                                <label class="tag-footer" for=""><a href="#" class="color-white">USD</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">JPY</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">KRW</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">HKD</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">GBP</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">EUR</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">RUB</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">CAD</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">VND</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">CHF</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">THB</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">SGD</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">NZD</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3 class="font-size-16px">TIỀN ẢO</h3>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Bitcoins</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Ethereum</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">XRP</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Bitcoin CASH</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Lite coin</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Tether</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">EOS</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Monero</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Stellar</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Cardano</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">TRON</a></label>
                                <label class="tag-footer" for=""><a href="#" class="color-white">Classic</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3 class="font-size-16px">LIÊN KẾT</h3>
                                <a class="logo-footer padding-logo-footer" href="https://www.facebook.com/profile.php?id=100013698812957"><i class="fa fa-facebook-square font-size-22px"></i></i></a>
                                <a class="logo-footer padding-logo-footer" href="https://www.facebook.com/profile.php?id=100013698812957"><i class="fa fa-android font-size-22px"></i><span></span></a>
                                <a class="logo-footer padding-logo-footer" href="https://www.facebook.com/profile.php?id=100013698812957"><i class="fa fa-apple font-size-22px"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp font-size-13px">© Copyrights 2019 - exchange app ứng dụng cập nhật giá cả thị trường</p>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up" style="margin-top:7px;"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('frontend/js/slider-index.js') }}"></script>
<script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
<script src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact-form-script.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.min.js') }}"></script>
<script src="{{ asset('frontend/js/images-loded.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script>
    /* counter js */

    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>

<script src="{{ asset('admin/asset/js/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
<script>
    /*
    * setup date time picker here
    * Default date time now
    */
    $(".time-search").datetimepicker({
        lang: 'en',
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
</script>
</body>

</html>
