@extends('font-end.master')

@section('title','Home')
@section('content')
<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<div class="row">
					<div class="col-lg-6 p-0">
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Delicious & crispy</span> Recipes.</h3>
										<p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
										Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
										Cubilia Curae.</p>
										<a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
										<a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Contact Us</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Tasty and healthy</span> Food</h3>
										<p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
										Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
										Cubilia Curae.</p>
										<a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
										<a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Contact Us</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Delicious & crispy</span> Recipes</h3>
										<p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
										Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
										Cubilia Curae.</p>
										<a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
										<a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Contact Us</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8 mt-lg-0 mt-5">
						<img src="{{ asset('assets/img') }}/banner.jpg" alt="" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-sm-5 mb-4">About Us </h2>
		<div class="row">
			<div class="col-lg-8">
				<h4 class="about-left">Enjoy the greatest Pleasure in our hotel!</h4>
				<p class="mt-sm-4 mt-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien 
				quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam
				dui mi.	Vestibulum ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis.</p>
				<div class="row mt-4">
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-birthday-cake"></span>
							</span>
							<h4>Healthy</h4>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-rocket"></span>
							</span>
							<h4>Spicy & Hot</h4>
						</div>
					</div>
					<!-- .about-box ends here -->
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-cutlery"></span>
							</span>
							<h4>Crunchy</h4>
						</div>
					</div>
					<div class="col-md-3 col-6 mt-md-0 mt-4">
						<div class="about-box">
							<span class="icon">
								<span class="fa fa-coffee"></span>
							</span>
							<h4>Reciepe</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 dental">
				<img src="{{ asset('assets/img') }}/banner1.jpg" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="about-bottom pb-5">
	<div class="container pb-lg-3">
		<div class="row bottom-grids">
			<div class="col-lg-6">
				<img src="{{ asset('assets/img') }}/bg.jpg" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<h4>A tasty and healthy Crispy that we serve for you.</h4>
				<p class="py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed in justo inter tellus. Donec ut felis ante. Quisque acin sapien 
				quis orci pulvinar finibus quis urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac quis eu urna Quisque quis eu urna lorem elit.</p>
				<p class="">Quisque ac sapien quis orci pulvinar finibus quis eu urna Quisque Suspendisse id felis sed felis tincidunt finibus.
				Nulla sed justo tellus. Donec ut felis ante ipsum.</p>
			</div>
		</div>
	</div>
</section>
<!-- //about bottom -->

<!-- services -->
<section class="services py-5">
	<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">What we do </h3>
		<div class="row offer-grids">
			<div class="col-lg-4 col-md-6">
				<div class="ser1">
					<div class="bg-layer">
						<h4 class="">Service1</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						<h4 class="">Service2</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="ser3">
					<div class="bg-layer">
						<h4 class="">Service3</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4">
				<div class="ser4">
					<div class="bg-layer">
						<h4 class="">Service4</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4">
				<div class="ser5">
					<div class="bg-layer">
						<h4 class="">Service5</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4">
				<div class="ser6">
					<div class="bg-layer">
						<h4 class="">Service6</h4>
						<p class="mt-3">Vestibulum ante ipsum primiss sed inorc faucibus orcit luctus ipsum et ultrices sede edt posuere cubiliater Curae nisl, Curabit ur quis luctu.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->	

<!-- testimonials -->
<section class="feedback" id="testimonials">
	<div class="feedback-layer py-5">
		<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">Testimonials</h3>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> Sed semper leo metus, a lacinia eros ut semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec sed tellus. Nam pharetra.</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="{{ asset('assets/img') }}/ser1.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> Sed semper leo metus, a lacinia eros ut semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec sed tellus. Nam pharetra.</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="{{ asset('assets/img') }}/ser2.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> Sed semper leo metus, a lacinia eros ut semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec sed tellus. Nam pharetra.</p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="{{ asset('assets/img') }}/ser3.jpg" class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5>Mary Jane</h5>
								<p class="font-italic">- March 3, 2019.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- blog -->
<section class="blog py-5">
	<div class="container py-md-5 py-3">
		<h3 class="heading text-center mb-sm-5 mb-4">Latest News </h3>
		<div class="row blog-grids">
			<div class="col-lg-7 mb-lg-5 blog-img1">
				<img src="{{ asset('assets/img') }}/blog1.jpg" alt="" class="img-fluid"/>
				<a href="single.html">Blog #1</a>
			</div>
			<div class="col-lg-5 mb-lg-5 mb-4">
				<h5>March 3, 2019.</h5>
				<h4 class="my-3">Nullam dui mi, vulputate ac cursus.</h4>
				<p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam duit mi, vulputate ac metus semper Nullam dui mi.
				 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.
				 leo et cursus rhoncus. Nullam dui mi, vulputate cursus. </p>
				<a href="single.html" class="btn-banner"> View Post </a>
			</div>
			<div class="col-lg-5 mb-lg-0 mb-4">
				<h5>March 3, 2019.</h5>
				<h4 class="my-3">Nullam dui mi, vulputate ac cursus.</h4>
				<p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam duit mi, vulputate ac metus semper Nullam dui mi.
				 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.
				 leo et cursus rhoncus. Nullam dui mi, vulputate cursus.</p>
				<a href="single.html" class="btn-banner"> View Post </a>
			</div>
			<div class="col-lg-7 blog-img2">
				<img src="{{ asset('assets/img') }}/blog2.jpg" alt="" class="img-fluid"/>
				<a href="single.html">Blog #2</a>
			</div>
		</div>
	</div>
</section>
<!-- //blog -->

<!-- appointment -->
<section class="appointment text-center py-5">
	<div class="container py-sm-3">
		<h4>Eat Healthy and delicious Crispy from our hotel</h4>
		<p class="mt-3">Call us to book your Table today or to order your Food</p>
		<h3>+1 123 456 789</h3>
	</div>
</section>
<!-- //appointment -->

@endsection