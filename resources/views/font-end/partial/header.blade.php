<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3">
						<span class="fa fa-envelope-open"></span>
						<a href="mailto:info@example.com" class="">info@example.com</a>
					</li>
					<li>
						<span class="fa fa-phone"></span>
						<p class="d-inline">Call Us +12 345 678</p>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					<li class="">
						<span class=""><span class="fas fa-clock"></span>Mon - Sun : 8:30am to 9:30pm</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-sm-3 pt-3 pb-2">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-cutlery" aria-hidden="true"></span> Crispy</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="{{ route('/') }}">Home</a></li>
				<li class=""><a href="{{ route('about.index') }}">About Us</a></li>
				<li class=""><a href="{{ route('service.index') }}">Services</a></li>
				<li class=""><a href="{{ route('gallery.index') }}">Gallery</a></li>
				<li class=""><a href="{{ route('blog.index') }}">Blog</a></li>
				<li class=""><a href="{{ route('contact.index') }}">Contact Us</a></li>
			</ul>
			<div class="login-icon ml-2">
				<a class="user" href="#"> Call Us</a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->