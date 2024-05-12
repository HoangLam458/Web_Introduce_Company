@extends('layout.layout2')
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

    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
            <div class="container-fluid justify-content-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab"
                            href="#home" role="tab" aria-controls="home" aria-selected="true">Các dự án</a> </li>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab"
                            href="#productType" role="tab" aria-controls="contact" aria-selected="false">Thêm dự án
                            mới</a> </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container mt-2 mb-5">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}
                <button class="close" data-dismiss="alert">&times;</button></h6>
        @endif
        <div class="products">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row g-3">
                        @foreach ($pr1 as $p1)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="{{ route('admin.proj.show', $p1->id) }}"> <img src="{{ asset('img/1.jpg') }}"
                                            class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span
                                                class="font-weight-bold">{{ $p1->name }}</span>
                                            {{-- <span class="font-weight-bold">$550</span> --}}
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="text-right buttons">
                                        <a class="btn btn-outline-dark"
                                            onclick="location.href='{{ route('admin.proj.show', $p1->id) }}'">Xem</a>
                                        <a class="btn btn-danger" type="button" onclick="return checkDelete()"
                                            href="{{ route('admin.proj.delete', $p1->id) }}">Xóa</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade" id="productType" role="tabpanel" aria-labelledby="contact-tab">
                    <!--Dining-->
                    <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span
                            class="font-weight-bold text-uppercase">Thêm dự án mới</span>
                    </div>
                    <form action="{{ route('admin.proj.store') }}" method="POST" class="form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Tên dự án:</label>
                            <input type="text" required class="form-control" name="name" id="name"
                                value=" ">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile01">Ảnh: </label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Mô tả:</label>
                            <textarea class="form-control" required name="description" id="description"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button onclick="location.reload();" type="reset" class="btn btn-warning me-1 mb-1">Nhập lại
                                thông tin</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
