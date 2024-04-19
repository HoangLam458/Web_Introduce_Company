@extends('layout.layout')
@section('body')
			<div class="container_12">
				<div class="grid_12">
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_12">
					<div class="map">
						<figure class="">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
					</div>
				</div>
				<div class="grid_4">
					<h2 class="head1">Địa chỉ</h2>
					<div class="map">
					<address>
						<dl>
							<dt>
                                The Company Name Inc. <br>
								8901 Marmora Road,<br>
								Glasgow, D04 89GR.
							</dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800 603 6035</dd>
							<dd><span>FAX:</span>+1 800 889 9898</dd>
							<dd><span>E-mail:</span> <a href="#" class="col3">mail@demolink.org</a></dd>
							<dd><span>Skype:</span> <a href="#" class="col3">@skypename</a></dd>
						</dl>
					</address>
					<p>24/7 support is available for all <span class="col3"><a href="http://www.templatemonster.com/website-templates.php" rel="nofollow">premium</a></span> products from TemplateMonster. Free stuff goes without it.</p>
					Have any questions about customization of a free template? Address to <span class="col3"><a href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a></span>.</div>
				</div>
				<div class="grid_8">
					<h2 class="head1">Biểu mẫu liên hệ</h2>
                    <div class="container contact-form">
                        <div class="contact-image">
                            <img src="{{ asset('Theme_css/images/2Q.png')}}"/>
                        </div>
                        <form method="post">
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input required type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input required type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
            </div>
				</div>
			</div>
		</div>

<!------ Include the above in your HEAD tag ---------->


<!--==============================footer=================================-->

@endsection
