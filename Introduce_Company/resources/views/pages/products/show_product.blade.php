@extends('layout.layout_product')
@section('body')

    <head>
        <style>
            .text-bold {
                font-weight: 700;
            }

            text-color {
                color: #0093c4;
            }

            /* Main image - left */
            .main-img img {
                width: 100%;
            }

            /* Preview images */
            .previews img {
                width: 100%;
                height: 140px;
            }

            .main-description .category {
                text-transform: uppercase;
                color: #0093c4;
            }

            .main-description .product-title {
                font-size: 2rem;
            }

            .old-price-discount {
                font-weight: 600;
            }

            .new-price {
                font-size: 2rem;
            }

            .details-title {
                text-transform: uppercase;
                font-weight: 600;
                font-size: 1.2rem;
                color: #757575;
            }

            .buttons .block {
                margin-right: 5px;
            }

            .quantity input {
                border-radius: 0;
                height: 40px;

            }




            .similar-product img {
                height: 300px;
            }

            .similar-product {
                text-align: left;
            }

            .similar-product .title {
                margin: 17px 0px 4px 0px;
            }

            .similar-product .price {

            }

            .questions .icon i {
                font-size: 2rem;
            }

            .questions-icon {
                font-size: 2rem;
                color: #0093c4;
            }


            /* Small devices (landscape phones, less than 768px) */
            @media (max-width: 767.98px) {

                /* Make preview images responsive  */
                .previews img {
                    width: 100%;
                    height: auto;
                }

            }
        </style>
    </head>

    <div class="container" style="margin-top: 20px">
        <div class="container_12 justify-content-center">
            <div class="row">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                            data-dismiss="alert">&times;</button></h6>
                @endif
                <main class="cd__main">
                    <!-- Start DEMO HTML (Use the following code into your project)-->
                    <div class="container my-5">
                        <div class="row">
                            @foreach ($pr1 as $item)
                                <div class="col-md-5">
                                    <div class="main-img">
                                        <img class="img-fluid" src="{{ asset('/images/products/' . $item->img) }}"
                                            alt="ProductS">
                                        {{-- <div class="row my-3 previews">
                                   <div class="col-md-3">
                                       <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/40/model-858754_960_720.jpg" alt="Sale">
                                   </div>
                                   <div class="col-md-3">
                                       <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/38/model-858749_960_720.jpg" alt="Sale">
                                   </div>
                                   <div class="col-md-3">
                                       <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/39/model-858751_960_720.jpg" alt="Sale">
                                   </div>
                                   <div class="col-md-3">
                                       <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/37/model-858748_960_720.jpg" alt="Sale">
                                   </div>
                               </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="main-description px-2">
                                        <div class="category text-bold">
                                            Loại sản phẩm: {{ $type->name }}
                                        </div>
                                        <div class="product-title text-bold my-3">
                                            {{ $item->name }}
                                        </div>


                                        <div class="price-area my-4">

                                            @if ($item->price == 0)
                                                <h4 class="product-price" style="color: #fe302f">Liên hệ</h4>
                                            @else
                                                <h4 class="product-price" style="color: #1ca6dd">
                                                    {{ number_format($item->price) }} VND</h4>
                                            @endif
                                        </div>


                                        <div class="buttons d-flex my-5">
                                            <div class="block">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    Liên hệ để được tư vấn trực tiếp
                                                </button>
                                            </div>
                                            {{-- <div class="block quantity">
                                       <input type="number" class="form-control" id="cart_quantity" value="1" min="0" max="5" placeholder="Enter email" name="cart_quantity">
                                   </div> --}}
                                        </div>
                                    </div>
                                    <div class="product-details my-4">
                                        <p class="description">{!! $item->description !!}</p>
                                    </div>


                                    <div class="delivery my-4">
                                    </div>
                                    <div class="delivery-options my-4">
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="container similar-products my-4">
                        <hr>
                        <p class="display-5">Sản phẩm tương tự</p>

                        <div class="row">
                            @foreach ($simi as $item)
                                <div class="col-md-3">
                                    <div class="similar-product">
                                        <a href="{{route('show',$item->id)}}"> <img class="w-100"  src="{{ asset('/images/products/' . $item->img) }}"
                                            alt="Preview"></a>

                                        <a class="title" href="{{route('show',$item->id)}}"> {{ $item->name }}</a>
                                        @if ($item->price == 0)
                                                <h4 class="price" style="color: #fe302f">Liên hệ</h4>
                                            @else
                                                <h4 class="price" style="color: #1ca6dd">
                                                    {{ number_format($item->price) }} VND</h4>
                                            @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>

            </div>
            <!-- END EDMO HTML (Happy Coding!)-->
            </main>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Biểu mẫu liên hệ </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Storecontact') }}" method="Post">
                                @csrf
                                <div class="form-group{{ $errors->has('ht') ? ' has-danger' : '' }}">
                                    <label  class="col-form-label">Họ và tên:</label>
                                    <input required type="text" name="ht" class="form-control"
                                        placeholder="Họ và tên *" value="{{ old('ht') }}" maxlength="50" required />
                                    @if ($errors->has('ht'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                            {{ $errors->first('ht') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('em') ? ' has-danger' : '' }}">
                                    <label class="col-form-label">Email:</label>
                                    <input required type="email" value="{{ old('em') }}"class="form-control"
                                        name="em" placeholder="Email *" required>
                                    @if ($errors->has('em'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                            {{ $errors->first('em') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('td') ? ' has-danger' : '' }}">
                                    <label class="col-form-label">Tiêu đề:</label>
                                    <input type="text" name="td" value="{{ old('td') }}" class="form-control"
                                        maxlength="50" minlength="15" placeholder="Tiêu đề *" required>
                                    @if ($errors->has('td'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                            {{ $errors->first('td') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('nd') ? ' has-danger' : '' }}">
                                    <label class="col-form-label">Nội dung:</label>
                                    <textarea name="nd" id="" cols="30" rows="7" class="form-control" minlength="50"
                                        placeholder="Nội dung" required>{{ old('nd') }}</textarea>
                                    @if ($errors->has('nd'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px"
                                            role="alert">
                                            {{ $errors->first('nd') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Send Message" />
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
