@extends('layout.layout')
@section('body')

    <head>
        <style>
            url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

            body {

                background-color: #eee;
            }

            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: #495057;
                background-color: transparent;
                border-color: transparent;
                border-bottom: 3px solid #000;

            }

            .nav-tabs>li>a {

                text-transform: uppercase;
                color: #000;
                font-weight: 500;
            }

            .nav-tabs .nav-link:hover {
                border-color: transparent;
                border-bottom: 3px solid #000
            }

            .navbar {

                border-bottom: 1px solid #00000012;
                padding-top: 0rem !important;
                padding-bottom: 0rem !important;
                background-color: #ffffff !important;
            }

            .navbar-brand {

                font-size: 24px;
                text-transform: uppercase;
                font-family: 'Allerta Stencil', sans-serif;
                font-weight: 500;
            }

            .nav-tabs {
                border-bottom: none;
                align-self: center;
            }

            .card {

                border: none;

            }

            .card-body {
                flex: 1 1 auto;
                padding: 10px;
            }

            .card-text {

                font-size: 13px;
            }

            .guarantee {

                color: #05882c;
                margin-left: 4px;
                font-weight: 700
            }

            hr {
                margin: 0.2rem 0;
                color: #bfbebe;
            }

            .buttons button {

                text-transform: uppercase;
                font-size: 12px;
                border-radius: 2px;
            }
        </style>
    </head>

    <!--==============================header=================================-->
    <div class="container">
        <div class='container'>
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="img-thumbnail w-100 d-block"
                                src="{{ asset('img/1.jpg') }}" alt="Slide Image" loading="lazy"></div>
                        <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="{{ asset('img/3.jpg') }}"
                                alt="Slide Image"></div>
                        <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="{{ asset('img/2.jpg') }}"
                                alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                                class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
        <hr>
        <div class="container" style="background-image: url('{{ asset('images/background/homepage/slogan.jpg') }}');">
            <div class="grid-12">
                <div class="slogan">
                    slogan
                    <br>
                    <a href="#" class="btn center">Xem thêm...</a>
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="container_12">
            <section class="grid" id="grid">
                <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                            <path d="M 180,160 0,262 0,0 180,0 z" />
                        </svg>
                        <figcaption>
                            <div class="title">Tư vấn</div>
                        </figcaption>
                    </figure>
                    <span>Xem</span>
                </a>
                <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                            <path d="M 180,160 0,262 0,0 180,0 z" />
                        </svg>
                        <figcaption>
                            <div class="title">Thiết kế</div>
                        </figcaption>
                    </figure>
                    <span>Xem</span>
                </a>
                <a href="{{ route('product') }}" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                            <path d="M 180,160 0,262 0,0 180,0 z" />
                        </svg>
                        <figcaption>
                            <div class="title">Sản phẩm</div>
                        </figcaption>
                    </figure>
                    <span>Xem</span>
                </a>
                <a href="{{ route('projects') }}" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
                    <figure>
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                            <path d="M 180,160 0,262 0,0 180,0 z" />
                        </svg>
                        <figcaption>
                            <div class="title">Dự án</div>
                        </figcaption>
                    </figure>
                    <span>Xem</span>
                </a>
            </section>
        </div> --}}
        <div class="container">
            <H1 class="slogan" >Dự án & Dịch vụ của TMC Group </H1>
            <div class="container-fluid px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                    <div class="container-fluid justify-content-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab"
                                    data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                    aria-selected="true">Dự án</a>
                            </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false">Dịch vụ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container mt-2 mb-5">
                <div class="products">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-3">
                                @foreach ($project as $item)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{ route('project.show', $item->id) }}"> <img
                                                    src="{{ asset('img/1.jpg') }}" class="card-img-top"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between"> <span
                                                        class="font-weight"><b>{{ $item->name }}</b></span>
                                                    {{-- <span class="font-weight-bold">$550</span> --}}
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <!--Dining-->
                            <div class="row g-3">
                                @foreach ($service as $item)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{ route('services.show', $item->id) }}"> <img
                                                    src="{{ asset('img/1.jpg') }}" class="card-img-top"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between"> <span
                                                        class="font-weight"><b>{{ $item->name }}</b></span>
                                                    {{-- <span class="font-weight-bold">$550</span> --}}
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- --}}
    <hr>
    <div class="container">
        <div class="container kmt_center">
            <div class="slogan">Tại sao chọn Xây Dựng TMC ?</div>
            <div class="row">
                <div class="col-lg-3 col-xs-6 wrap_wc">
                    <div class="block_wc">
                        <div class="img_wc">
                            <img src="{{ asset('images/icon/icon-1.png') }}" title="Chất lượng"
                                alt="">
                        </div>
                        <h4>Chất lượng</h4>
                        <div>Cam kết thực hiện công trình theo đúng số lượng, chất lượng vật tư như thỏa thuận</div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 wrap_wc">
                    <div class="block_wc">
                        <div class="img_wc">
                            <img src="{{ asset('images/icon/icon-2.png') }}"
                                title="Chuyên nghiệp" alt="">
                        </div>
                        <h4>Chuyên nghiệp</h4>
                        <div>Đội ngũ kỹ sư nhiều năm kinh nghiệm nhà dân dụng, 17 tổ đội thi công lâu năm về nhà phố, biệt
                            thự, nhà văn phòng</div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 wrap_wc">
                    <div class="block_wc">
                        <div class="img_wc">
                            <img src="{{ asset('images/icon/icon-3.png') }}"
                                title="Giá cạnh tranh" alt="">
                        </div>
                        <h4>Giá cạnh tranh</h4>
                        <div>Chúng tôi cam kết giá thành hợp lý tương xứng với chất lượng công trình và dịch vụ.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6 wrap_wc">
                    <div class="block_wc">
                        <div class="img_wc">
                            <img src="{{ asset('images/icon/icon-4.png') }}" title="Đúng tiến độ"
                                alt="">
                        </div>
                        <h4>Đúng tiến độ</h4>
                        <div>Luôn tuân thủ tiến độ thực hiện công trình theo thỏa thuận với chủ đầu tư</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
