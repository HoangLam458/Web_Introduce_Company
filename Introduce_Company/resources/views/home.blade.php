@extends('layout.layout2')

@section('body')
<head>
    <style>
        url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

body{

  background-color: #eee;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: transparent;
    border-color: transparent;
    border-bottom: 3px solid #000;

}

.nav-tabs>li>a{

  text-transform: uppercase;
  color: #000;
      font-weight: 500;
}

.nav-tabs .nav-link:hover {
    border-color: transparent;
    border-bottom: 3px solid #000
}

.navbar{

      border-bottom: 1px solid #00000012;
      padding-top: 0rem !important;
      padding-bottom: 0rem !important;
          background-color: #ffffff!important;
}

.navbar-brand{

  font-size: 24px;
  text-transform: uppercase;
  font-family: 'Allerta Stencil', sans-serif;
  font-weight: 500;
}

.nav-tabs {
    border-bottom: none;
}

.card{

  border:none;

}

.card-body {
    flex: 1 1 auto;
    padding: 10px;
}

.card-text{

  font-size: 13px;
}

.guarantee{

  color: #05882c;
  margin-left: 4px;
  font-weight: 700

}

hr{
    margin: 0.2rem 0;
   color: #bfbebe;
}

.buttons button{

  text-transform: uppercase;
  font-size: 12px;
  border-radius: 2px;
}
    </style>
</head>



        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                <div class="container-fluid justify-content-center" >
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                    {{-- @foreach ($type2 as $t1)
                    <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{$t1->name}}</a> </li>

                    @endforeach --}}
                        <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Trang quản trị</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container mt-2 mb-5">
            <div class="products">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="{{route('admin.product')}}"> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold"> Trang quản trị sản phẩm</span>

                                    </div>

                                        <p class="card-text mb-1 mt-1"> Thêm, xóa, sửa sản phẩm</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        {{-- <div class="text-right buttons"> <button class="btn btn-outline-dark">Xem chi tiết</button> <button class="btn btn-dark">Liên hệ</button> </div> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href=""> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold"> Trang quản trị sản phẩm</span>

                                    </div>

                                        <p class="card-text mb-1 mt-1"> Thêm, xóa, sửa sản phẩm</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        {{-- <div class="text-right buttons"> <button class="btn btn-outline-dark">Xem chi tiết</button> <button class="btn btn-dark">Liên hệ</button> </div> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href=""> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold"> Trang quản trị sản phẩm</span>

                                    </div>

                                        <p class="card-text mb-1 mt-1"> Thêm, xóa, sửa sản phẩm</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        {{-- <div class="text-right buttons"> <button class="btn btn-outline-dark">Xem chi tiết</button> <button class="btn btn-dark">Liên hệ</button> </div> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href=""> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold"> Trang quản trị sản phẩm</span>

                                    </div>

                                        <p class="card-text mb-1 mt-1"> Thêm, xóa, sửa sản phẩm</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        {{-- <div class="text-right buttons"> <button class="btn btn-outline-dark">Xem chi tiết</button> <button class="btn btn-dark">Liên hệ</button> </div> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href=""> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold"> Trang quản trị sản phẩm</span>

                                    </div>

                                        <p class="card-text mb-1 mt-1"> Thêm, xóa, sửa sản phẩm</p>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        {{-- <div class="text-right buttons"> <button class="btn btn-outline-dark">Xem chi tiết</button> <button class="btn btn-dark">Liên hệ</button> </div> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
