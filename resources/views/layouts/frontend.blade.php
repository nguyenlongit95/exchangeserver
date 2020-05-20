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
    <title>Exchange Currency</title>
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

{{--    <!--[if lt IE 9]>--}}
{{--<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->--}}
{{--<!--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->--}}
{{--    <![endif]-->--}}

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="{{ asset('frontend/images/loader.gif') }}" alt="#" />
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
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" alt="image"></a>
                </div>
                <div class="site_information">
                    <ul>
                        <li><a href="mailto:exchang@gmail.com"><img src="{{ asset('frontend/images/mail_icon.png') }}" alt="#" /> <span>exchangecurrency@gmail.com</span></a></li>
                        <li><a href="tel:exchang@gmail.com"><img src="{{ asset('frontend/images/phone_icon.png') }}" alt="#" />(+84)393803548</a></li>
                    </ul>
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
                            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                <ul class="navbar-nav">
                                    <li><a class="nav-link active" href="{{ url('/') }}">TRANG CHỦ</a></li>
                                    <li><a class="nav-link" href="{{ url('ty-gia') }}">TỶ GIÁ NGÂN HÀNG</a></li>
                                    <li><a class="nav-link" href="{{ url('ngoai-te') }}">NGOẠI TỆ</a></li>
                                    <li><a class="nav-link" href="{{ url('gia-vang') }}">GIÁ VÀNG</a></li>
                                    <li><a class="nav-link" href="{{ url('lai-suat') }}">LÃI SUẤT</a></li>
                                    <li><a class="nav-link" href="{{ url('tien-ao') }}">TIỀN ẢO</a></li>
                                    <li><a class="nav-link" href="{{ url('xang-dau') }}">XĂNG DẦU</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Search">
                        <a class="search-btn">
                            <img src="{{ asset('frontend/images/search_icon.png') }}" alt="#" />
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
                            <img class="img-responsive" src="{{ asset('frontend/images/footer_logo.png') }}" alt="#" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="full">
                            <ul class="menu_footer">
                                <li><a href="home.html">> Home</a></li>
                                <li><a href="about.html">> About</a></li>
                                <li><a href="exchange.html">> Exchange</a></li>
                                <li><a href="services.html">> Services</a></li>
                                <li><a href="new.html">> New</a></li>
                                <li><a href="contact.html">> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <div class="newsletter_form">
                                    <form action="index.html">
                                        <input type="email" placeholder="Your Email" name="#" required="">
                                        <button>Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>Contact us</h3>
                                <ul class="full">
                                    <li><img src="{{ asset('frontend/images/i5.png') }}"><span>London 145<br>United Kingdom</span></li>
                                    <li><img src="{{ asset('frontend/images/i6.png') }}"><span>demo@gmail.com</span></li>
                                    <li><img src="{{ asset('frontend/images/i7.png') }}"><span>+12586954775</span></li>
                                </ul>
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
                <p class="crp">© Copyrights 2019 design by ExchangeApp</p>
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
</body>

</html>