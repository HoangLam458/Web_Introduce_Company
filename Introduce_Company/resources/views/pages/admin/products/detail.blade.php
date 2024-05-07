@extends('layout.layout2')
@section('body')
    @include('sweetalert::alert')

    <head>
        <style>
            body {
                background: #fff;

            }

            .carousel-item {
                width: 100%
            }

            .price span {
                font-size: 18px
            }

            .cut {
                text-decoration: line-through;
                color: red
            }

            .icons i {
                font-size: 17px;
                color: green;
                margin-right: 2px
            }

            .offers i {
                color: green
            }

            .delivery i {
                color: blue
            }

            label.radio {
                cursor: pointer
            }

            label.radio input {
                position: absolute;
                top: 0;
                left: 0;
                visibility: hidden;
                pointer-events: none
            }

            label.radio span {
                padding: 2px 11px;
                margin-right: 3px;
                border: 1px solid #8f37aa;
                display: inline-block;
                color: #8f37aa;
                border-radius: 3px;
                text-transform: uppercase
            }

            label.radio input:checked+span {
                border-color: #8f37aa;
                background-color: #8f37aa;
                color: #fff
            }
        </style>
    </head>
    <div class="container_12 justify-content-center">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                    data-dismiss="alert">&times;</button></h6>
        @endif
        <div class="row">
            @foreach ($pr1 as $p1)
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="img-thumbnail w-100 d-block"
                                    src="{{ asset('/images/products/' . $p1->img) }}" style="height: 450px;"
                                    alt="Slide Image" loading="lazy"></div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4>{{ $p1->name }}</h4>
                    <div class="mt-3">
                        <a type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Chỉnh sửa</a>
                        <a class="btn btn-danger" type="button" onclick="return checkDelete()"
                            href="{{ route('product.delete', $p1->id) }}">Xóa</a>
                    </div>
                    <div class="price">
                        @if ($p1->price == 0)
                            <span class="mr-2" style="color: red;"></i>
                                &nbsp;Liên hệ</span>
                    </div>
                @else
                    <span class="mr-2"></i>
                        &nbsp;{{ number_format($p1->price) }} VND</span>
                </div>
            @endif
            <hr>
            <div class="d-flex align-items-center"></i><span class="ml-1">{!! $p1->description !!}<br></span></div>
            @endforeach
            <hr>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa sản phẩm: {{ $p1->name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('product.update', $p1->id) }}" method="POST" class="form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Tên sản phẩm:</label>
                            <input type="text" required class="form-control" name="name" id="name"
                                value="{{ $p1->name }}">
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">Giá:</label>
                            <input type="text" required class="form-control" name="price" id="price"
                                value="{{ $p1->price }}">

                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile01">Ảnh: </label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Mô tả:</label>
                            <textarea class="ckeditor form-control" id="ckeditor" rows="10" cols="80" required name="description">{{ $p1->description }}"</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" onclick="return checkUpdate()" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
@endsection
