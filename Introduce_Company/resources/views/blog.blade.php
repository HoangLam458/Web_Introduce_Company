@extends('layout.layout')
@section('body')
{{-- <!--==============================Content=================================-->
			<div class="container_12">
				<div class="grid_12">
					<h2 class="mb0">Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_8">
					<div class="blog">
						<img src="images/page5_img1.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Hom dui erosi laoru adip</a>
							<time class="col2" datetime="2014-01-01">January 05, 2014</time>
							</div>In mollis erat mattisy nequelisis sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. Proin pharetra luctus
							<br>
							<a href="#" class="btn">more</a>
						</div>
					</div>
					<div class="blog bd1">
						<img src="images/page5_img2.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Erosi ru adipertolom</a>
							<time class="col2" datetime="2014-01-01">Januaryctober 10, 2014</time>
							</div>In mollis erat mattisy nequelisis sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. Proin pharetra luctus
							<br>
							<a href="#" class="btn">more</a>
						</div>
					</div>
					<div class="blog bd2">
						<img src="images/page5_img3.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Goliip dertolon sader</a>
							<time class="col2" datetime="2014-01-01">February 10, 2014</time>
							</div>In mollis erat mattisy nequelisis sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. Proin pharetra luctus
							<br>
							<a href="#" class="btn">more</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="text1 col3 head1">Categories:</div>
					<ul class="list l1">
						<li><a href="#">Proin pharetra luctus</a></li>
						<li><a href="#">Diam, a scelerisque eros</a></li>
						<li><a href="#">Maecenas vehicula egestas</a></li>
						<li><a href="#">Duis massa elit, auctor non</a></li>
						<li><a href="#">Aliquet sit amet eraty</a></li>
					</ul>
					<ul class="list l1">
						<li><a href="#">Delto pharetra luctusum</a></li>
						<li><a href="#">Kilom a sceleriue erosr</a></li>
						<li><a href="#">Olikaecenas vehiculastas</a></li>
					</ul>
					<div class="text1 head1 col3">
						Recent Posts:
					</div>
					<div class="post">
						<div class="fl">
							<img src="images/page5_img4.jpg" alt="">
							<time datetime="2014-01-01">2014-01-24</time>
						</div>
						<div class="extra_wrapper">
							<a href="#">Mollis erat mattisy uelisis, sit amet ultricieser rutrum. Cras facilisis, nulla veleru viverra aucto leo magna sodales felis quis</a>
						</div>
					</div>
					<div class="post">
						<div class="fl">
							<img src="images/page5_img5.jpg" alt="">
							<time datetime="2014-01-01">2014-01-24</time>
						</div>
						<div class="extra_wrapper">
							<a href="#">Sodales felis quis alesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsannas vehicula.</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================--> --}}
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="gallery">
                    <div class="grid_12 ">
                        <h2 class="mb0" style="
                        text-align: center;">Sản phẩm xây dựng</h2>
                    </div>
                    <div class="clear"></div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Vật liệu xây dựng</a></div>
						Gạch, gỗ, xi măng, bê tông, thép, gỗ nhựa composite, vật liệu cách âm và cách nhiệt.
						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd1"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Vật liệu lót sàn</a></div>
						Gạch, đá granite, đá marble, gỗ sàn, sàn nhựa PVC, sàn gỗ composite.
						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd2"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Vật liệu trang trí ngoại thất</a></div>
                        Đá tự nhiên, gạch mosaic, gạch ốp lát, vật liệu láng gương, bê tông mài.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Cửa và cửa sổ</a></div>
                        Cửa gỗ, cửa nhôm kính, cửa sắt, cửa chống cháy, cửa cuốn, cửa tự động.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Hệ thống điện và nước</a></div>
                        Dây điện, ống nước, ổ cắm, công tắc, vòi sen, bồn tắm, bồn rửa, hệ thống xử lý nước.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
                    <div class="clear"></div>
                    <div class="grid_12 ">
                        <h2 class="mb0" style="
                        text-align: center;">Sản phẩm nội thất</h2>
                    </div>
                    <div class="clear"></div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd1"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Nệm và đệm</a></div>
                        Nệm lò xo, nệm bông ép, nệm cao su, đệm sofa, đệm ghế.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd2"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Bàn và ghế</a></div>
                        Bàn ăn, bàn làm việc, bàn trà, ghế ăn, ghế sofa, ghế băng.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
					<div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Tủ và kệ</a></div>
                        Tủ quần áo, tủ bếp, tủ trưng bày, kệ sách, kệ TV.						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>

                    <div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Đèn và đèn trang trí</a></div>
                        Đèn trần, đèn bàn, đèn sàn, đèn chùm, đèn led, đèn nến.
                        <a href="#" class="btn">Xem thêm...</a>
					</div>
                    <div class="clear"></div>
                    <div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Trang trí</a></div>
                        Tranh treo tường, gương trang trí, đồ decor, tranh ảnh, đồ gốm sứ.
						<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
                    <div class="grid_3">
						<a href="{{asset('img/1.jpg')}}" class="gal bd3"><img src="{{asset('img/1.jpg')}}" alt=""></a>
						<div class="text1"><a href="#">Vật liệu trang trí</a></div>
                        Rèm cửa, gối tựa, tấm trang trí, thảm trải sàn, rèm cửa, bức tường 3D.		<br>
						<a href="#" class="btn">Xem thêm...</a>
					</div>
				</div>
              
			</div>
		</div>
@endsection

