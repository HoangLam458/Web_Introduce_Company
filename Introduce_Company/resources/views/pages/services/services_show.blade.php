@extends('layout.layout_service')
@section('body')

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

    <div class="container justify-content-center " style="margin-top: 20px">
        <div class="row">
            @foreach ($pr1 as $p1)
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="img-thumbnail w-100 d-block"
                                    src="{{ asset('img/1.jpg') }}" alt="Slide Image" loading="lazy"></div>
                            <div class="carousel-item"><img class="img-thumbnail w-100 d-block"
                                    src="{{ asset('img/3.jpg') }}" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="img-thumbnail w-100 d-block"
                                    src="{{ asset('img/2.jpg') }}" alt="Slide Image"></div>
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
                <div class="col-md-12">
                    <h4>{{ $p1->name }}</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    Liên hệ để được tư vấn trực tiếp
                                                </button>
                    <hr>
                    <div class="d-flex flex-row">
                        {{-- <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><span>1200 ratings &amp; 564 reviews</span> --}}
                    </div>
                    <div class="d-flex align-items-center"></i><span class="ml-1">{!! $p1->description !!}<br></span></div>
                    <hr>
                </div>
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
                                    <input type="text" name="td" value="{{ $p1->name }} " class="form-control"
                                        maxlength="50" minlength="15"  required ">
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
            @endforeach
        </div>
        
    @endsection
