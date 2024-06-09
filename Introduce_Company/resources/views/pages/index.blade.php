@extends('layout.layout')
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
                        <h2 style="color: white">Công ty Xây dựng & Nội thất <span clsas="d-block ">TMC IV IV IV</span></h2>
                        <p class="mb-4">TMC IV IV IV là một công ty hàng đầu trong lĩnh vực xây dựng và nội thất, chuyên
                            cung cấp các giải pháp tối ưu và sáng tạo cho không gian sống và làm việc. Với đội ngũ kiến trúc
                            sư, kỹ sư và nhà thiết kế tài năng, TMC IV IV IV cam kết mang đến những công trình chất lượng
                            cao, thẩm mỹ và bền vững.</p>
                        <p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hãy kết nối với chúng tôi , cùng chia sẻ lợi nhuận
                              </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('Theme_css/images/head.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
                    <img src="{{ asset('img/4.jpg') }}" class="d-block w-100" alt="...">
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
              </div>

    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">DỰ ÁN TIÊU BIỂU</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="shop.html" class="btn">Xem thêm...</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                @foreach ( $project as $item)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('project.show', $item->id) }}" >
                        <img src="{{ asset($item->image) }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{$item->name}}</h3>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Tại sao lại chọn chúng tôi</h2>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <path d="M32 4l7 14 16 2-12 12 3 16-14-7-14 7 3-16-12-12 16-2z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Chất Lượng Vượt Trội</h3>
                                <p>Chúng tôi cam kết mang đến cho khách hàng những sản phẩm và dịch vụ chất lượng cao nhất.
                                    Mỗi công trình do TMC thực hiện đều tuân theo các tiêu chuẩn kỹ thuật nghiêm ngặt và sử
                                    dụng vật liệu cao cấp, đảm bảo độ bền và thẩm mỹ lâu dài.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#000000" stroke="#000000" stroke-width="2">
                                            <circle cx="32" cy="32" r="10" />
                                            <path d="M22 42h20l4 12h-28z" />
                                            <path d="M20 22h8l-4 10z" />
                                            <path d="M36 22h8l-4 10z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Đội Ngũ Chuyên Nghiệp</h3>
                                <p>Với đội ngũ kiến trúc sư, kỹ sư và nhân viên giàu kinh nghiệm, TMC tự hào là đối tác đáng
                                    tin cậy trong mọi dự án xây dựng và nội thất. Chúng tôi không ngừng nâng cao kỹ năng và
                                    kiến thức để đáp ứng nhu cầu ngày càng cao của khách hàng.</p>
                            </div>
                        </div>

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
                                <h3>Thiết Kế Độc Đáo</h3>
                                <p>TMC luôn tìm kiếm sự sáng tạo và khác biệt trong từng thiết kế. Chúng tôi lắng nghe mong
                                    muốn của khách hàng và biến những ý tưởng đó thành hiện thực, tạo ra không gian sống và
                                    làm việc độc đáo, tiện nghi và phong cách.</p>
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
                                <h3>Dịch Vụ Toàn Diện</h3>
                                <p>Chúng tôi cung cấp giải pháp tổng thể từ khâu tư vấn, thiết kế đến thi công và hoàn thiện
                                    nội thất. TMC luôn đồng hành cùng khách hàng trong suốt quá trình dự án, đảm bảo mọi chi
                                    tiết đều được thực hiện hoàn hảo nhất.</p>
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
                                <h3>Uy Tín Và Cam Kết</h3>
                                <p>Uy tín là nền tảng cho sự phát triển bền vững của TMC. Chúng tôi luôn đặt lợi ích của
                                    khách hàng lên hàng đầu, cam kết hoàn thành dự án đúng tiến độ và ngân sách đã thỏa
                                    thuận, đồng thời duy trì chất lượng cao nhất.</p>
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
                                <h3> Giá Cả Cạnh Tranh</h3>
                                <p>TMC hiểu rằng mỗi dự án đều có ngân sách riêng. Chúng tôi luôn tư vấn và đưa ra các giải
                                    pháp tối ưu, giúp khách hàng tiết kiệm chi phí mà vẫn đảm bảo chất lượng công trình.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('img/why-choose-us-img.jpg') }}" alt="Image" class="img-fluid">
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
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('img/img-grid-1.jpg') }}"></div>
                        <div class="grid grid-2"><img src="{{ asset('img/img-grid-2.jpg') }}"></div>
                        <div class="grid grid-3"><img src="{{ asset('img/img-grid-3.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Chúng Tôi Giúp Bạn Tạo Ra Thiết Kế Nội Thất Hiện Đại</h2>
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
                </div>
            </div>
        </div>
    </div>

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
