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
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
            <div class="container-fluid justify-content-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    @foreach ($type2 as $t1)
                        <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab"
                                href="#home" role="tab" aria-controls="home"
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
                        {{-- @if ($type->type == 1)
                          <span class="font-weight-bold text-uppercase">Vật liệu xây dựng</span>
                    @else
                         <span class="font-weight-bold text-uppercase">Nội thất</span>

                    @endif --}}
                    </div>
                    <div class="row g-3">
                        @if ($pr1->count() > 0)
                        <div class="row-md-6" style="margin-top: 1px">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal"> Thêm sản phẩm mới </button>
                        </div>
                        @foreach ($pr1 as $p1)
                        <div class="col-md-4">
                            <div class="card">
                                <a href="{{ route('product.details', $p1->id) }}"> <img src="{{ asset('/images/' . $p1->img) }}"
                                        class="card-img-top" style="height: 144px;"></a>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> <span
                                            class="font-weight-bold">{{ $p1->name }}</span>
                                        {{-- <span class="font-weight-bold">$550</span> --}}
                                    </div>

                                    <p class="card-text mb-1 mt-1">{{ $p1->description }}</p>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="text-right buttons">
                                        <a class="btn btn-primary" type="button"
                                            onclick="location.href='{{ route('product.details', $p1->id) }}'">Xem chi
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
                        <div class="row-md-6 center">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal"> Thêm sản phẩm mới </button>
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
    </div>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('Bạn có chắc chắn muốn xóa?');
            }
        </script>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm:  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('product.store',$pTid)}}" method="POST" class="form"
                enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label for="name" class="col-form-label">Tên sản phẩm:</label>
                  <input type="text" required class="form-control" name="name" id="name"   >
                </div>
                <div class="form-group">
                    <label for="price" class="col-form-label">Giá:</label>
                    <input type="text" required class="form-control" name="price" id="price" >

                  </div>
                <div class="form-group">
                    <div class="custom-file">
                    <label class="custom-file-label" for="inputGroupFile01">Ảnh: </label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="image">
                    </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-form-label">Description:</label>
                  <textarea class="form-control" required name="description" id="description"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" onclick="return checkDelete()" class="btn btn-primary" >Xác nhận</button>
                  </div>
              </form>


        </div>
    </div>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('Bạn có chắc chắn muốn tạo sản phẩm này?');
            }
        </script>
    </header>
@endsection
