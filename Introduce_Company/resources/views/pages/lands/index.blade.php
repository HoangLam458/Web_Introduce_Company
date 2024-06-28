@extends('pages/lands/layout')
@section('body')
    <!--==============================header=================================-->
    <style type="text/css">
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 10;
            right: 10;
            top: 5;
            width: 50%;
            height: 50%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup img {
            display: block;
            margin: 15% auto;
            max-width: 80%;
            height: auto;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quét QR để liên hệ trực tiếp </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('Theme_css/images/qr.png') }}" class="img-fluid">
                </div>

            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="intro-excerpt">
                        <h2 style="color: white">Phòng Tư Vấn & Quản Lý <br>Bất Động Sản TMC</h2>
                        <p class="mb-4">Phòng Tư Vấn & Quản Lý Bất Động Sản TMC là đơn vị chuyên nghiệp
                            thuộc công ty XD TMC, chuyên cung cấp các dịch vụ toàn diện về bất động sản.
                            Với đội ngũ chuyên viên giàu kinh nghiệm và kiến thức sâu rộng trong lĩnh vực
                            , chúng tôi cam kết mang đến cho khách hàng những giải pháp tối ưu và hiệu quả
                            nhất .</p>
                        <p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Hãy kết nối với chúng tôi , cùng chia sẻ lợi nhuận
                            </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('Theme_css/images/head.png') }}" style="margin-left: 20px" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/tayninhoffice.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}

    <!-- End Product Section -->
    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title" style="
                    text-align: center;
                ">SỨ MỆNH
                    </h2>
                    <p>Mang đến những giải pháp bất động sản toàn diện và chất lượng cao, đáp ứng nhu cầu đa dạng của khách
                        hàng, đồng thời đóng góp vào sự phát triển bền vững của cộng đồng.</p>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 16-16 16-16-16z" />
                                            <path d="M32 28v32" />
                                            <path d="M20 36h24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Giải Pháp Toàn Diện</h3>
                                <p>Chúng tôi cung cấp một loạt các dịch vụ từ tư vấn, thiết kế, xây dựng, đến quản lý tài
                                    sản, giúp khách hàng có trải nghiệm hoàn chỉnh và thuận lợi.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <circle cx="32" cy="32" r="30" />
                                            <path d="M32 2v60" />
                                            <path d="M2 32h60" />
                                            <path d="M20 20l24 24" />
                                            <path d="M20 44l24-24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Chất Lượng Cao</h3>
                                <p>Cam kết tiêu chuẩn chất lượng cao nhất trong mọi dự án, đảm bảo sự hài lòng và an tâm cho
                                    khách hàng.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 28-16 28-16-28z" />
                                            <path d="M32 12v40" />
                                            <path d="M22 24h20" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Đáp ứng nhu cầu đa dạng</h3>
                                <p>Dù là cá nhân, gia đình hay doanh nghiệp, chúng tôi luôn lắng nghe và thấu hiểu nhu cầu
                                    riêng biệt của từng khách hàng, từ đó đưa ra những giải pháp phù hợp nhất.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l10 20-10 10-10-10z" />
                                            <path d="M32 28v32" />
                                            <path d="M22 40h20" />
                                            <path d="M32 4l20 30-20 20-20-20z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Phát triển bền vững</h3>
                                <p> Mỗi dự án đều được thiết kế và thực hiện với ý thức bảo vệ môi trường và tôn trọng cộng
                                    đồng, nhằm tạo ra sự phát triển lâu dài và bền vững.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" >
                    <div class="img-wrap">
                        <img src="{{ asset('img/land.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">

                    <h2 class="section-title" style="
                    text-align: center;
                ">TẦM NHÌN
                    </h2>
                    <p>Trở thành đơn vị dẫn đầu trong lĩnh vực bất động sản, nổi tiếng với những dự án đột phá và dịch vụ
                        chuyên nghiệp, tạo ra giá trị vượt trội cho khách hàng và xã hội.</p>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 16-16 16-16-16z" />
                                            <path d="M32 28v32" />
                                            <path d="M20 36h24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Đơn vị dẫn đầu</h3>
                                <p>Phấn đấu trở thành tên tuổi hàng đầu trong ngành bất động sản, được công nhận bởi sự xuất
                                    sắc và uy tín.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <circle cx="32" cy="32" r="30" />
                                            <path d="M32 2v60" />
                                            <path d="M2 32h60" />
                                            <path d="M20 20l24 24" />
                                            <path d="M20 44l24-24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Dự án đột phá</h3>
                                <p>Liên tục sáng tạo và tiên phong trong việc phát triển các dự án mới mẻ, hiện đại và khác
                                    biệt.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 28-16 28-16-28z" />
                                            <path d="M32 12v40" />
                                            <path d="M22 24h20" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Dịch vụ chuyên nghiệp</h3>
                                <p>Đặt chất lượng dịch vụ lên hàng đầu, với đội ngũ nhân viên tận tâm, giàu kinh nghiệm và
                                    chuyên môn cao, luôn sẵn sàng hỗ trợ và tư vấn khách hàng.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l10 20-10 10-10-10z" />
                                            <path d="M32 28v32" />
                                            <path d="M22 40h20" />
                                            <path d="M32 4l20 30-20 20-20-20z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Giá trị vượt trộI </h3>
                                <p>Không chỉ tập trung vào lợi nhuận, chúng tôi còn hướng đến việc tạo ra những giá trị thực
                                    sự cho khách hàng và cộng đồng, góp phần xây dựng một xã hội tốt đẹp hơn.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('img/land.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('img/img-grid-1.jpg') }}"></div>
                        <div class="grid grid-2"><img src="{{ asset('img/img-grid-2.jpg') }}"></div>
                        <div class="grid grid-3"><img src="{{ asset('img/img-grid-3.jpg') }}"></div>
                    </div>
                </div>
                {{-- <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Chúng Tôi Mang Giá Trị Cốt Lõi</h2>
                    <p>Chúng tôi hiểu rằng việc tạo ra một không gian sống và làm việc đẹp và tiện nghi là rất quan trọng.
                        Với đội ngũ chuyên gia giàu kinh nghiệm và sáng tạo, TMC cam kết mang đến cho bạn những giải pháp
                        thiết kế nội thất độc đáo và hiện đại nhất.</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Chăm sóc tận tình:
                            <br>Hỗ trợ trong suốt quá trình thi công và sử dụng.
                        </li>
                        <li>Thiết kế tối ưu không gian:
                            <br> Tạo ra không gian sống tiện nghi và thẩm mỹ.
                        </li>
                        <li>Giải pháp tiết kiệm chi phí:
                            <br>Tư vấn giải pháp hợp lý và hiệu quả.
                        </li>
                        <li>Vật liệu cao cấp:
                            <br>Sử dụng vật liệu chất lượng cao và bền bỉ.
                        </li>
                    </ul>
                    <p><a herf="#" class="btn">Khám phá ngay</a></p>
                </div> --}}
                <div class="col-lg-6">
                    <h2 class="section-title" style="
                    text-align: center;
                "> GIÁ TRỊ CỐT LÕI
                    </h2>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 16-16 16-16-16z" />
                                            <path d="M32 28v32" />
                                            <path d="M20 36h24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Chất lượng</h3>
                                <p>Đảm bảo mọi dự án bất động sản được thực hiện với tiêu chuẩn cao nhất về chất lượng và độ bền, mang lại giá trị lâu dài cho khách hàng.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <circle cx="32" cy="32" r="30" />
                                            <path d="M32 2v60" />
                                            <path d="M2 32h60" />
                                            <path d="M20 20l24 24" />
                                            <path d="M20 44l24-24" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Uy tín</h3>
                                <p>Xây dựng và duy trì uy tín trong ngành bất động sản bằng cách luôn hoàn thành dự án đúng tiến độ và đáp ứng các cam kết với khách hàng.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l16 28-16 28-16-28z" />
                                            <path d="M32 12v40" />
                                            <path d="M22 24h20" />
                                        </g>
                                    </svg>

                                </div>
                                <h3>Đổi mới</h3>
                                <p>Liên tục tìm kiếm và áp dụng các công nghệ và phương pháp xây dựng mới nhằm nâng cao hiệu quả, tối ưu hóa chi phí và mang lại lợi ích tối đa cho khách hàng.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l10 20-10 10-10-10z" />
                                            <path d="M32 28v32" />
                                            <path d="M22 40h20" />
                                            <path d="M32 4l20 30-20 20-20-20z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Chăm sóc khách hàng</h3>
                                <p> Đặt khách hàng làm trung tâm của mọi hoạt động, lắng nghe và đáp ứng nhu cầu của khách hàng một cách nhanh chóng, chuyên nghiệp và tận tâm.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Một số dự án tiêu biểu</h2>
                    <p class="mb-4"> </p>
                    <p><a href="shop.html" class="btn">Xem thêm...</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                @foreach ($project as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="{{ route('project.show', $item->id) }}">
                            <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->name }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Một số sản phẩm tiêu biểu</h2>
                    <p class="mb-4"> </p>
                    <p><a href="shop.html" class="btn">Xem thêm...</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                @foreach ($product as $item)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="{{ route('show', $item->id) }}">
                            <img src="{{ asset('/images/products/' . $item->img) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $item->name }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    {{-- <div class="popular-product">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('Theme_css/images/product-1.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Nordic Chair</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('Theme_css/images/product-2.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Kruzo Aero Chair</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('Theme_css/images/product-3.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Ergonomic Chair</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    {{-- <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                                                    quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
                                                    velit imperdiet dolor tempor tristique. Pellentesque habitant morbi
                                                    tristique senectus et netus et malesuada fames ac turpis egestas.
                                                    Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('Theme_css/images/person-1.png') }}"
                                                        alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                                                    quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
                                                    velit imperdiet dolor tempor tristique. Pellentesque habitant morbi
                                                    tristique senectus et netus et malesuada fames ac turpis egestas.
                                                    Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('Theme_css/images/person-1.png') }}"
                                                        alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                                                    quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
                                                    velit imperdiet dolor tempor tristique. Pellentesque habitant morbi
                                                    tristique senectus et netus et malesuada fames ac turpis egestas.
                                                    Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('Theme_css/images/person-1.png') }}"
                                                        alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    {{-- <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{ asset('images/post-1.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">First Time Home Owner Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{ asset('Theme_css/images/post-2.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{ asset('Theme_css/images/post-3.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- End Blog Section -->
@endsection
