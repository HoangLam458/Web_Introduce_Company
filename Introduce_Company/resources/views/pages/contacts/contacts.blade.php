@extends('layout.layout_contact')
@section('body')
    @include('sweetalert::alert')

    <div class="untree_co-section">

        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                    data-dismiss="alert">&times;</button></h6>
        @endif
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8 pb-4">
                    <div class="container">
                        <div class="row">
                            <figure class="">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.953208188769!2d106.6808738528469!3d10.792052662167821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529658f3e45e9%3A0x35bc16eba2db9a6f!2sChung%20c%C6%B0%20Novaland!5e0!3m2!1svi!2s!4v1714009806850!5m2!1svi!2s"
                                    width="1150" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </figure>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active"
                                data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p> 17-19-21 Nguyễn Văn Trỗi,
                                        Phường 14, Quận 3,
                                        Thành phố Hồ Chí Minh.</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active"
                                data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>tmc@gmail.com</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active"
                                data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>+1 294 3925 3939</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>
                    </div>
                    <form action="{{ route('Storecontact') }}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('ht') ? ' has-danger' : '' }}">
                                    <label class="text-black" for="fname">Họ tên</label>
                                    <input required type="text" name="ht" class="form-control"
                                        placeholder="Your Name *" value="{{ old('ht') }}" maxlength="50" required>
                                    @if ($errors->has('em'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                            {{ $errors->first('em') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('em') ? ' has-danger' : '' }}">
                                    <label class="text-black" for="fname">Email</label>
                                    <input required type="email" value="{{ old('em') }}"class="form-control"
                                        name="em" placeholder="Your Email *" required>
                                    @if ($errors->has('em'))
                                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                            {{ $errors->first('em') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('td') ? ' has-danger' : '' }}">
                                <label class="text-black" for="fname">Tiêu đề</label>
                                <input type="text" name="td" value="{{ old('td') }}" class="form-control"
                                    maxlength="50" minlength="15" placeholder="Title *" required>
                                @if ($errors->has('td'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('td') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-5">
                            <div class="form-group{{ $errors->has('nd') ? ' has-danger' : '' }}">
                                <label class="text-black" for="fname">Nội dung</label>
                                <textarea name="nd" id="" cols="30" rows="7" class="form-control" minlength="50"
                                    placeholder="Messenger *" required>{{ old('nd') }}</textarea>
                                @if ($errors->has('nd'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('nd') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
