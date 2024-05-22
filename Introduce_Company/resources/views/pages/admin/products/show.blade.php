@extends('layout.layout2')
@section('body')
    @include('sweetalert::alert')

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

            a .ar {
                width: 30px;
            }

            .buttons button {

                text-transform: uppercase;
                font-size: 12px;
                border-radius: 2px;
            }
        </style>
    </head>
    <div class="container">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                <div class="container-fluid justify-content-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach ($type2 as $t1)
                            <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab"
                                    data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                    aria-selected="true">{{ $t1->name }}</a> </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container mt-2 mb-5">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                        data-dismiss="alert">&times;</button></h6>
            @endif
            <div class="products">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center">
                        </div>
                        <div class="row g-3">
                            @if ($pr1->count() > 0)
                                <div class="row-md-6" style="margin-top: 1px">
                                    <a type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Thêm sản phẩm mới </a>
                                </div>
                                <hr>
                                @foreach ($pr1 as $p1)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{ route('product.details', $p1->id) }}"> <img
                                                    src="{{ asset('/images/products/' . $p1->img) }}" class="card-img-top"
                                                    style="height: 144px;"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between"> <span
                                                        class="font-weight-bold">{{ $p1->name }}</span>
                                                    {{-- <span class="font-weight-bold">$550</span> --}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-body">
                                                <div class="text-right buttons">
                                                    <a class="btn btn-primary" type="button"
                                                        onclick="location.href='{{ route('product.details', $p1->id) }}'">Xem
                                                        chi
                                                        tiết</a>
                                                    <a class="btn btn-danger" type="button" onclick="return checkDelete()"
                                                        href="{{ route('product.delete', $p1->id) }}">Xóa</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="row">
                                    <h1>KHÔNG CÓ SẢN PHẨM !</h1>
                                </div>
                                <hr>
                                <div class="row-md-6 center">
                                    <a type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Thêm sản phẩm mới</a>
                                </div>
                                <div class="row-md-6 center">
                                    <a class="btn btn-dark"> Trở về </a>
                                </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm: </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('product.store', $pTid) }}" method="POST" class="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label">Tên sản phẩm:</label>
                                <input type="text" required class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-form-label">Giá:</label>
                                <input type="text" required class="form-control" name="price" id="price">

                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">Ảnh: </label>
                                    <input type="file" class="form-control" id="inputGroupFile01" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Mô tả:</label>
                                <textarea class="ckeditor form-control" id="ckeditor" rows="10" cols="80" required name="description"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button type="submit" onclick="return checkDelete()" class="btn btn-primary">Xác
                                    nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <head>
        <script>
            CKEDITOR.replace('ckeditor');
        </script>
    </head>

@endsection
