@extends('layout.layout_product')
@section('body')

    <head>
        <style type="text/css">
            /*panel*/
            .panel {
                border: none;
                box-shadow: none;
            }

            .panel-heading {
                border-color: #eff2f7;
                font-size: 16px;
                font-weight: 300;
            }

            .panel-title {
                color: #2A3542;
                font-size: 14px;
                font-weight: 400;
                margin-bottom: 0;
                margin-top: 0;
                font-family: 'Open Sans', sans-serif;
            }


            /*product list*/

            .prod-cat li a {
                border-bottom: 1px dashed #d9d9d9;
            }

            .prod-cat li a {
                color: #3b3b3b;
            }

            .prod-cat li ul {
                margin-left: 30px;
            }

            .prod-cat li ul li a {
                border-bottom: none;
            }

            .prod-cat li ul li a:hover,
            .prod-cat li ul li a:focus,
            .prod-cat li ul li.active a,
            .prod-cat li a:hover,
            .prod-cat li a:focus,
            .prod-cat li a.active {
                background: none;
                color: #ff7261;
            }

            .pro-lab {
                margin-right: 20px;
                font-weight: normal;
            }

            .pro-sort {
                padding-right: 20px;
                float: left;
            }

            .pro-page-list {
                margin: 5px 0 0 0;
            }

            .product-list img {
                width: 100%;
                border-radius: 4px 4px 0 0;
                -webkit-border-radius: 4px 4px 0 0;
            }

            .product-list .pro-img-box {
                position: relative;
            }

            .adtocart {
                background: #fc5959;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                -webkit-border-radius: 50%;
                color: #fff;
                display: inline-block;
                text-align: center;
                border: 3px solid #fff;
                left: 45%;
                bottom: -25px;
                position: absolute;
            }

            .adtocart i {
                color: #fff;
                font-size: 25px;
                line-height: 42px;
            }

            .pro-title {
                color: #5A5A5A;
                display: inline-block;
                margin-top: 20px;
                font-size: 16px;
            }

            .product-list .price {
                color: #fc5959;
                font-size: 15px;
            }

            .pro-img-details {
                margin-left: -15px;
            }

            .pro-img-details img {
                width: 100%;
            }

            .pro-d-title {
                font-size: 16px;
                margin-top: 0;
            }

            .product_meta {
                border-top: 1px solid #eee;
                border-bottom: 1px solid #eee;
                padding: 10px 0;
                margin: 15px 0;
            }

            .product_meta span {
                display: block;
                margin-bottom: 10px;
            }

            .product_meta a,
            .pro-price {
                color: #fc5959;
            }

            .pro-price,
            .amount-old {
                font-size: 18px;
                padding: 0 10px;
            }

            .amount-old {
                text-decoration: line-through;
            }

            .quantity {
                width: 120px;
            }

            .pro-img-list {
                margin: 10px 0 0 -15px;
                width: 100%;
                display: inline-block;
            }

            .pro-img-list a {
                float: left;
                margin-right: 10px;
                margin-bottom: 10px;
            }

            .pro-d-head {
                font-size: 18px;
                font-weight: 300;
            }
        </style>
    </head>

    <div class="container" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">
                            <input type="text" placeholder="Keyword Search" class="form-control" />
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Loại Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <ul class="nav prod-cat">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> Vật liệu xây dựng </a>
                                    <ul class="nav">
                                        @foreach ($type1 as $item)
                                            <li><a href="#">- {{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> Nội thất </a>
                                    <ul class="nav">
                                        @foreach ($type2 as $item)
                                            <li><a href="#">- {{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Price Range
                        </header>
                        <div class="panel-body sliders">
                            <div id="slider-range" class="slider"></div>
                            <div class="slider-info">
                                <span id="slider-range-amount"></span>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading">
                            Bán chạy
                        </header>
                        <div class="panel-body">
                            <div class="best-seller">
                                @foreach ($pr2 as $item)
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <img src="{{ asset('/images/products/' . $item->img) }}" height="250px"
                                                width="220px" />
                                        </a>
                                        <div class="media-body">
                                            <a href="{{ route('show', $item->id) }}" class="p-head">{{ $item->name }}</a>
                                        </div>
                                    </article>
                                @endforeach

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-9">
                    {{-- <section class="panel">
                    <div class="panel-body">
                        <div class="pull-right">
                            <ul class="pagination pagination-sm pro-page-list">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </section> --}}
                    <div class="row product-list">
                        @foreach ($pr1 as $item)
                            <div class="col-md-4">
                                <section class="panel">
                                    <div class="pro-img-box">
                                        <img src="{{ asset('/images/products/' . $item->img) }}" width="250px"
                                            height="200px" alt="" />
                                        <a href="#" class="adtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="{{ route('show', $item->id) }}" class="pro-title">
                                                {{ $item->name }}
                                            </a>
                                        </h4>
                                        @if ($item->price > 0)
                                            <p class="price">{{ number_format($item->price) }} VND</p>
                                        @else
                                            <p class="price">Liên hệ</p>
                                        @endif

                                    </div>
                                </section>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
