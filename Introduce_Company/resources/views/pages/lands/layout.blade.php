<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('Theme_Css/images/2Q.png') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('Theme_css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('Theme_css/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('Theme_css/css/style.css') }}" rel="stylesheet">
    <title>TMC - Bất Động Sản</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ route('land') }}">TMC Real Estate<span>.</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('land') }}">Trang Chủ</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('projects') }}">Dự Án</a></li>
                    <li><a class="nav-link" href="{{ route('services') }}">Dịch Vụ</a></li>
                    <li><a class="nav-link" href="{{ route('contacts') }}">Liên Hệ</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('Theme_css/images/user.svg') }}"></a>
                    </li>
                    <li><a class="nav-link" href=""><img src="{{ asset('Theme_css/images/cart.svg') }}"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->

    <!-- End Hero Section -->

    <!-- Start Product Section -->
    @yield('body')

    <!-- Start Footer Section -->
    <hr>
    <footer class="footer-section">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-8">

                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">TMC Real Estate<span>.</span></a>
                    </div>
                    <p class="mb-4">
                        Phòng ban Bất động sản của công ty xây dựng TMC IV IV là một đơn vị chuyên nghiệp và có kinh nghiệm trong lĩnh vực môi giới và quản lý bất động sản. Với đội ngũ nhân viên giàu kinh nghiệm và am hiểu sâu sắc về thị trường bất động sản địa phương, chúng tôi cam kết cung cấp các dịch vụ chất lượng nhằm đáp ứng mọi nhu cầu của khách hàng. Chúng tôi luôn đặt sự hài lòng và lợi ích của khách hàng lên hàng đầu, và luôn nỗ lực không ngừng để mang đến những giải pháp và sản phẩm tối ưu nhất.
                    </p>
                </div>

                <div class="col-lg-8">
                
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('product') }}">Sản Phẩm</a></li>
                                <li><a href="{{ route('projects') }}">Dự Án</a></li>
                                <li><a href="{{ route('services') }}">Dịch Vụ</a></li>
                                <li><a href="{{ route('contacts') }}">Liên Hệ</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">

                            <ul class="list-unstyled">
                                <li><a  href="#">
                                    <span > Bất Động Sản </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế - Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Nội - Ngoại Thất </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Bị Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế Quảng Cáo </span>
                                </a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">

                            <ul class="list-unstyled">
                                <li><a  href="#">
                                    <span > Bất Động Sản </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế - Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Nội - Ngoại Thất </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Bị Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế Quảng Cáo </span>
                                </a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">

                            <ul class="list-unstyled">
                                <li><a  href="#">
                                    <span > Bất Động Sản </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế - Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Nội - Ngoại Thất </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Bị Xây Dựng </span>
                                </a></li>
                            <li><a  href="#">
                                    <span > Thiết Kế Quảng Cáo </span>
                                </a></li>
                            </ul>
                        </div>
                        <div class="">
                            <div class="subscription-form">
                                <h3 class="d-flex align-items-center"><span class="me-1"><img
                                            src="{{ asset('Theme_css/images/envelope-outline.svg') }}" alt="Image"
                                            class="img-fluid"></span><span>Biểu Mẫu Liên Hệ</span></h3>

                                <form action="{{ route('Storecontact') }}" method="Post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group{{ $errors->has('ht') ? ' has-danger' : '' }}">
                                                <label class="text-black" >Họ tên</label>
                                                <input required type="text" name="ht" class="form-control"
                                                    placeholder="Your Name *" value="{{ old('ht') }}"
                                                    maxlength="50" required>
                                                @if ($errors->has('em'))
                                                    <span class="invalid-feedback"
                                                        style="display: block;font-size:15px" role="alert">
                                                        {{ $errors->first('em') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group{{ $errors->has('em') ? ' has-danger' : '' }}">
                                                <label class="text-black" >Email</label>
                                                <input required type="email"
                                                    value="{{ old('em') }}"class="form-control" name="em"
                                                    placeholder="Your Email *" required>
                                                @if ($errors->has('em'))
                                                    <span class="invalid-feedback"
                                                        style="display: block;font-size:15px" role="alert">
                                                        {{ $errors->first('em') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group{{ $errors->has('td') ? ' has-danger' : '' }}">
                                            <label class="text-black" >Tiêu đề</label>
                                            <input type="text" name="td" value="{{ old('td') }}"
                                                class="form-control" maxlength="50" minlength="15"
                                                placeholder="Title *" required>
                                            @if ($errors->has('td'))
                                                <span class="invalid-feedback" style="display: block;font-size:15px"
                                                    role="alert">
                                                    {{ $errors->first('td') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mb-5">
                                        <div class="form-group{{ $errors->has('nd') ? ' has-danger' : '' }}">
                                            <label class="text-black" >Nội dung</label>
                                            <textarea name="nd" id="" cols="30" rows="7" class="form-control" minlength="50"
                                                placeholder="Messenger *" required>{{ old('nd') }}</textarea>
                                            @if ($errors->has('nd'))
                                                <span class="invalid-feedback" style="display: block;font-size:15px"
                                                    role="alert">
                                                    {{ $errors->first('nd') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <button  type="submit" class="btn btn-primary-hover-outline">Gửi thư liên hệ</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin = "anonymous" >
    </script>
    <script src="{{ asset('Theme_css/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Theme_css/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('Theme_css/js/custom.js') }}"></script>
</body>

</html>
