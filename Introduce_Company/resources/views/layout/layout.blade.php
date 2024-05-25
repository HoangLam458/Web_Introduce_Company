<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TMC Group</title>
    <link rel="icon" type="image/png" href="{{ asset('Theme_css/images/2Q.png') }}">
    <link rel="shortcut icon" href="{{ asset('Theme_css/images/2Q.png') }}">
    <link rel="stylesheet" href="{{ asset('Theme_css/css/camera.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme_css/css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme_css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme_css/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme_css/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('Theme_css/js/jquery.js') }}"></script>
    <script src="{{ asset('Theme_css/js/jquery-migrate-1.1.1.js') }}"></script>
    <script src="{{ asset('Theme_css/js/jquery.equalheights.js') }}"></script>
    <script src="{{ asset('Theme_css/js/jquery.ui.totop.js') }}"></script>
    <script src="{{ asset('Theme_css/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Theme_css/js/camera.js') }}"></script>
    <script src="{{ asset('Theme_css/js/snap.svg-min.js') }}"></script>
    <script src="{{ asset('js/m.js') }}"></script>
    <script src="{{ asset('js/touchTouch.jquery.js') }}"></script>
    <script src="{{ asset('js/TMForm.js') }}"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{ asset('Theme_css/js/jquery.mobile.customized.min.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckeditor/config.js') }}"></script>
    <script src="{{ asset('ckeditor/style.js') }}"></script>
    <!--<![endif]-->
    <script>
        $(document).ready(function() {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: true,
                minHeight: '394',
                thumbnails: false,
                height: '40.1875%',
                caption: false,
                navigation: false,
                fx: 'mosaic'
            });
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        })
    </script>
    <style>
        .customLink>a {
            text-decoration: none;
            color: #232323;
        }

        #circleIcon {
            width: 60px;
            height: 60px;
            line-height: 60px;
            border: 2px dotted #232323;
            border-radius: 100%;
            text-align: center
        }
    </style>

    <script>
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        })
    </script>
</head>

<body class="page1">
    <header>

        <div class="container-fluid" role="navigation">
            <div class="text-center py-2">
            </div>
            <div class="row text-center align-items-center g-0">
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark">
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('home') }}">Trang chủ</a>
                        </div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('product') }}">Sản
                                phẩm</a>
                        </div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('projects') }}">Dự án</a>
                        </div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('services') }}">Dịch
                                vụ</a></div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                    <a href="{{ route('home') }}"><img height="100" width="100"
                            src="{{ asset('Theme_css/images/2Q.png') }}"></a>
                </div>
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark">

                        <div class="customLink"><a class="d-inline-block p-3" href="#">Tin tức & Sự kiện</a></div>
                        <div class="customLink"><a class="d-inline-block p-3" href="#">Blog</a></div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('contacts') }}">Liên hệ
                            </a></div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('about') }}">Giới
                                thiệu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================header=================================-->
    @yield('body');
    <footer>
        <div class="container-fluid" style="
        background-color: whitesmoke;">


            <div class="container kmt_center ">
                <div class="row">
                    <div class="col-lg-3 col-xs-6 wrap_wc">
                        <div class="block_wc">
                            <h4> CÔNG TY TNHH MTV XD TMC IV IV IV </h4>
                            <div>
                                Địa chỉ: 17-19-21 Nguyễn Văn Trỗi,<br>
                                Phú Nhuận,Thành phố Hồ Chí Minh <br>
                                Số điện thoại: <br>
                                Email: tmc@gmail.com<br>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6 wrap_wc">
                        <div class="block_wc">
                            <h4>Liên kết nhanh</h4>
                            <div>
                                <ul>
                                    <li class="current bt-icon"><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li class="bt-icon"><a href="{{ route('services') }}">Dịch vụ</a></li>
                                    <li class="bt-icon"><a href="{{ route('product') }}">Sản phẩm</a></li>
                                    <li class="bt-icon"><a href="{{ route('projects') }}">Dự án</a></li>
                                    <li class="bt-icon"><a href="{{ route('contacts') }}">Liên hệ</a></li>
                                    <li class="bt-icon"><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6 wrap_wc">
                        <div class="block_wc">
                            <h4>Bản đồ chỉ đường</h4>
                            <div class="map">
                                <figure class="">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.953208188769!2d106.6808738528469!3d10.792052662167821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529658f3e45e9%3A0x35bc16eba2db9a6f!2sChung%20c%C6%B0%20Novaland!5e0!3m2!1svi!2s!4v1714009806850!5m2!1svi!2s"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(".bt-menu-trigger").toggle(
                function() {
                    $('.bt-menu').addClass('bt-menu-open');
                },
                function() {
                    $('.bt-menu').removeClass('bt-menu-open');
                }
            );
        });
        (function() {
            function init() {
                var speed = 250,
                    easing = mina.easeinout;
                [].slice.call(document.querySelectorAll('#grid > a')).forEach(function(el) {
                    var s = Snap(el.querySelector('svg')),
                        path = s.select('path'),
                        pathConfig = {
                            from: path.attr('d'),
                            to: el.getAttribute('data-path-hover')
                        };
                    el.addEventListener('mouseenter', function() {
                        path.animate({
                            'path': pathConfig.to
                        }, speed, easing);
                    });
                    el.addEventListener('mouseleave', function() {
                        path.animate({
                            'path': pathConfig.from
                        }, speed, easing);
                    });
                });
            }
            init();
        })();
    </script>
</body>

</html>
