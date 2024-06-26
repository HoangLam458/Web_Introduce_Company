<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TMC Group - Admin</title>
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
                        <div class="customLink"><a class="d-inline-block p-3" href="{{route('admin')}}">Admin</a></div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('admin.product') }}">Product</a>
                        </div>
                        <div class="customLink"><a class="d-inline-block p-3"
                                href="{{ route('admin.proj') }}">Project</a></div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                    <a href="{{ route('home') }}"><img height="100" width="100"
                            src="{{ asset('Theme_css/images/2Q.png') }}"></a>
                </div>
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark">

                        <div class="customLink"><a class="d-inline-block p-3"
                                href="{{ route('admin.serv') }}">Services</a></div>
                        <div class="customLink"><a class="d-inline-block p-3" href="{{ route('admin.contact') }}">Contact
                                Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================header=================================-->
    @yield('body');

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
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Bạn có chắc chắn muốn xóa?');
    }
</script>
<script language="JavaScript" type="text/javascript">
    function checkConfirm() {
        return confirm('Bạn có chắc chắn muốn tạo mới?');
    }
</script>
 <script language="JavaScript" type="text/javascript">
    function checkUpdate() {
        return confirm('Bạn có chắc chắn muốn cập nhật?');
    }
</script>

</html>
