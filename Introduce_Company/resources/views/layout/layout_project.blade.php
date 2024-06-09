<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{asset('Theme_Css/images/2Q.png')}}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('Theme_css/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

		<link href="{{asset('Theme_css/css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('Theme_css/css/style.css')}}" rel="stylesheet">
		<title>TMC Group - Dự án</title>
</head>

<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="{{route('home')}}">TMC Group<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link " href="{{route('home')}}">Home</a>
						</li>
						<li ><a class="nav-link" href="{{route('product')}}">Sản phẩm</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{route('projects')}}">Dự án</a></li>
						<li><a class="nav-link" href="{{route('services')}}">Dịch vụ</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="{{route('contacts')}}">Liên hệ</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="{{asset('Theme_css/images/user.svg')}}"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="{{asset('Theme_css/images/cart.svg')}}"></a></li>
					</ul>
				</div>
			</div>

		</nav>

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->

		<!-- End Hero Section -->

		<!-- Start Product Section -->
		@yield('body')

		<!-- Start Footer Section -->

        <footer class="footer-section">
            <div class="container relative">

                <div class="sofa-img">
                    {{-- <img src="{{asset('Theme_css/images/sofa.png')}}" alt="Image" class="img-fluid"> --}}
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form">
                            <h3 class="d-flex align-items-center"><span class="me-1"><img
                                        src="{{ asset('Theme_css/images/envelope-outline.svg') }}" alt="Image"
                                        class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                            <form action="#" class="row g-3">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-auto">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">TMC Group<span>.</span></a>
                        </div>
                        <p class="mb-4">
                            TMC Group là một tập đoàn đa ngành hoạt động chủ yếu trong lĩnh vực xây dựng và nội thất tại
                            Việt Nam. Chúng tôi tự hào là đối tác tin cậy của hàng nghìn khách hàng, cung cấp các dịch vụ và
                            sản phẩm chất lượng cao, đa dạng và đáp ứng được mọi nhu cầu của khách hàng.

                            <br>Với một đội ngũ chuyên nghiệp, giàu kinh nghiệm và tâm huyết, TMC Group không chỉ tập trung
                            vào việc xây dựng các công trình chất lượng, mà còn chú trọng vào việc tạo ra không gian sống và
                            làm việc hoàn hảo nhất cho khách hàng. Chúng tôi không ngừng nỗ lực để đổi mới, áp dụng công
                            nghệ tiên tiến nhất và tiêu chuẩn quản lý hiện đại nhất để mang lại giá trị tốt nhất cho mỗi dự
                            án.

                            <br>Mục tiêu phát triển của chúng tôi không chỉ dừng lại ở việc trở thành một trong những tập
                            đoàn hàng đầu trong lĩnh vực xây dựng và nội thất tại Việt Nam, mà còn là một đối tác đáng tin
                            cậy và phát triển bền vững trong cộng đồng và toàn cầu.
                        </p>

                        <ul class="list-unstyled custom-social">
                            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div class="row links-wrap">
                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Knowledge base</a></li>
                                    <li><a href="#">Live chat</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Our team</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Nordic Chair</a></li>
                                    <li><a href="#">Kruzo Aero</a></li>
                                    <li><a href="#">Ergonomic Chair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- End Footer Section -->

		<script src="{{asset('Theme_css/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('Theme_css/js/tiny-slider.js')}}"></script>
		<script src="{{asset('Theme_css/js/custom.js')}}"></script>
	</body>

</html>
