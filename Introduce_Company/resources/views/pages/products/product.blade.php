@extends('layout.layout_product')
@section('body')

    <head>
        <style type="text/css">
            a,
            a:hover {
                text-decoration: none;
                color: inherit;
            }

            .section-products {
                padding: 80px 0 54px;
            }

            .section-products .header {
                margin-bottom: 50px;
            }

            .section-products .header h3 {
                font-size: 1rem;
                color: #fe302f;
                font-weight: 500;
            }

            .section-products .header h2 {
                font-size: 2.2rem;
                font-weight: 400;
                color: #444444;
            }

            .section-products .single-product {
                margin-bottom: 26px;
            }

            .section-products .single-product .part-1 {
                position: relative;
                height: 290px;
                max-height: 290px;
                margin-bottom: 20px;
                overflow: hidden;
            }

            .section-products .single-product .part-1::before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                transition: all 0.3s;
            }

            .section-products .single-product:hover .part-1::before {
                transform: scale(1.2, 1.2) rotate(5deg);
            }

            .section-products #product-1 .part-1::before {
                background: url("https://i.ibb.co/L8Nrb7p/1.jpg") no-repeat center;
                background-size: cover;
                transition: all 0.3s;
            }



            .section-products .single-product .part-1 .discount,
            .section-products .single-product .part-1 .new {
                position: absolute;
                top: 15px;
                left: 20px;
                color: #ffffff;
                background-color: #fe302f;
                padding: 2px 8px;
                text-transform: uppercase;
                font-size: 0.85rem;
            }

            .section-products .single-product .part-1 .new {
                left: 0;
                background-color: #444444;
            }

            .section-products .single-product .part-1 ul {
                position: absolute;
                bottom: -41px;
                left: 20px;
                margin: 0;
                padding: 0;
                list-style: none;
                opacity: 0;
                transition: bottom 0.5s, opacity 0.5s;
            }

            .section-products .single-product:hover .part-1 ul {
                bottom: 30px;
                opacity: 1;
            }

            .section-products .single-product .part-1 ul li {
                display: inline-block;
                margin-right: 4px;
            }

            .section-products .single-product .part-1 ul li a {
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                background-color: #ffffff;
                color: #444444;
                text-align: center;
                box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
                transition: color 0.2s;
            }

            .section-products .single-product .part-1 ul li a:hover {
                color: #fe302f;
            }

            .section-products .single-product .part-2 .product-title {
                font-size: 1rem;
            }

            .section-products .single-product .part-2 h4 {
                display: inline-block;
                font-size: 1rem;
            }

            .section-products .single-product .part-2 .product-old-price {
                position: relative;
                padding: 0 7px;
                margin-right: 2px;
                opacity: 0.6;
            }

            .section-products .single-product .part-2 .product-old-price::after {
                position: absolute;
                content: "";
                top: 50%;
                left: 0;
                width: 100%;
                height: 1px;
                background-color: #444444;
                transform: translateY(-50%);
            }

            .fill {
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden
            }

            .fill img {
                flex-shrink: 0;
                min-width: 100%;
                min-height: 100%
            }
        </style>
    </head>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-lg-0 mb-2" style="margin-top: 80px">
                <p>
                    <a class="btn btn-primary w-100 d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                        aria-controls="collapseExample">
                        <span class="fas fa-bars"><span class="ps-3" style="font-family:'Times New Roman', Times, serif; text-transform: uppercase; ">Vật liệu xây dựng</span></span>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </p>
                <div class="collapse show border" id="collapseExample">
                    <ul class="list-unstyled">
                        @foreach ($type1 as $item)
                        <li><a class="dropdown-item" href="{{route('list',$item->id)}}">{{$item->name}}</a></li>
                        @endforeach


                    </ul>
                </div>
                <div>
                    &nbsp;
                </div>
                <p>
                    <a class="btn btn-primary w-100 d-flex align-items-center justify-content-between"
                        data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true"
                        aria-controls="collapseExample1">
                        <span class="fas fa-bars"><span class="ps-3" style="font-family:'Times New Roman', Times, serif; text-transform: uppercase;">Nội thất</span></span>
                        <span class="fas fa-chevron-down"></span>
                    </a>
                </p>
                <div class="collapse show border" id="collapseExample1">
                    <ul class="list-unstyled">
                        @foreach ($type2 as $item)
                        <li><a class="dropdown-item" href="{{route('list',$item->id)}}">{{$item->name}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 mb-lg-0 mb-2">
                <section class="section-products">
                    <div class="container">
                        <div class="row">
                            <!-- Single Product -->
                            @foreach ($pr1 as $item)
                                <div class="col-md-12 col-lg col-xl-4">
                                    <div id="product-1" class="single-product">
                                        <div class="part-1">
                                            <div class="fill">
                                                <a href="{{route('show',$item->id)}}"> <img  src="{{ asset('/images/products/' . $item->img) }}" alt=""></a>
                                            </div>
                                            <ul>
                                                {{-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fas fa-plus"></i></a></li> --}}
                                                <li><a href="{{route('show',$item->id)}}"><i class="fas fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="part-2">
                                            <a style="color: #444444" class="product-title" href="{{route('show',$item->id)}}">{{$item->name}}</a><br>
                                            @if ($item->price == 0)
                                            <h4 class="product-price" style="color: #fe302f">Liên hệ</h4>
                                            @else
                                            <h4 class="product-price" style="color: #1ca6dd">{{ number_format($item->price) }} VND</h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Single Product -->
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
