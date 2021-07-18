<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_8/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 12:13:08 GMT -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?= $basic_info['company_name'] ?></title>

	<meta name="keywords" content="" />
	<meta name="description" content="Task Earner">
	<meta name="author" content="Rohan Sharma">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/images/icons/favicon.ico">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="<?= base_url() ?>new/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="<?= base_url() ?>new/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>new/assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>new/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
	<div class="page-wrapper">
	<?php if(!$this->session->userdata('user_email')){ ?>
		<div class="top-notice text-white bg-secondary">
			<div class="container text-center">
				<h5 class="d-inline-block mb-0 mr-2">Welcome To <b> TaskEarner</b></h5>
				<a href="<?= base_url() ?>user_login" class="category">Login</a>
				<a href="<?= base_url() ?>user_signup" style="background: #1fb8d0;" class="category ml-2 mr-3">SignUp</a>
				<!-- <small>* Limited time only</small> -->
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->
	<?php } ?>
	

		<header class="header">
			<div class="header-top bg-primary text-uppercase">
				<div class="container">
					<div class="header-left">
						<div class="header dropdown-expanded mr-3">

							<?php if ($this->session->userdata('user_email')) { ?>

								<a href="<?php base_url() ?>logout">Logout</a>
							<?php } else { ?>
								<a href="#">Please Login First</a>
							<?php } ?>


						</div>
						<?php if ($this->session->userdata('user_email')) { ?>
							<p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">
								<a href="<?php base_url() ?>logout">
									Logout
								</a>
							</p>
						<?php } else { ?>
							<p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">Please Login First </p>
						<?php } ?>




					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto">
						<div class="header-dropdown dropdown-expanded mr-3">

							<div class="header-menu">
								<ul>
									<li><a href="<?= base_url() ?>index.php/about_us">About</a></li>

									<li><a href="<?= base_url() ?>index.php/contact_us">Contact</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
							<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle text-dark">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler mr-2" type="button">
							<i class="icon-menu"></i>
						</button>
						<div style="width: 105px;">
							<a href="<?= base_url() ?>index.php/home" class="logo">
								<img src="<?= base_url() ?>assets/images/download2.png" alt="Porto Logo">
							</a>
						</div>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max pl-2" style="margin: 2px;">
						<div class="header-search header-icon header-search-inline header-search-category w-lg-max mr-lg-4">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="<?= base_url() ?>index.php/view_products" method="GET">

								<div class="header-search-wrapper">
									<input autocomplete="off" type="text" class="via_form form-control" name="search" id="via_form" placeholder="Search..." required>

									<div class="col-md-5" style="position: absolute;top: 119%;z-index: 10;">
										<div class="list-group" id="show-list">

										</div>
									</div>

									<button id="via_form_submit" class="btn p-0 icon-search-3" type="submit"></button>
								</div><!-- End .header-search-wrapper -->

						</div><!-- End .header-search -->
						</form>
					</div><!-- End .header-search -->

					<div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-3 ml-xl-5">
						<i class="icon-phone-2"></i>
						<h6 class="pt-1 line-height-1">Call us now<a href="tel:<?= $basic_info['company_mobile'] ?>" class="d-block text-dark ls-10 pt-1">+91 <?= $basic_info['company_mobile'] ?></a></h6>
					</div><!-- End .header-contact -->

					<?php if ($this->session->userdata('user_email')) { ?>

						<a href="<?= base_url() ?>index.php/user_profile" class="header-icon"><i class="icon-user-2"></i></a>



					<?php } else { ?>
						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-user-2"></i>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>Not Loged In</span>

										<a href="<?= base_url() ?>user_signup" class="float-right">New User!</a>
									</div><!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<form id="user_login" style="width: auto; margin:0rem">
											<input name="user_email" type="text" class="form-control" placeholder="Enter Email Id">
											<input name="user_password" type="password" class="form-control" placeholder="Enter Password">

									</div> <!-- End .cart-product -->

									<div class="dropdown-cart-action">
										<button type="submit" style="margin: auto;" class="btn btn-primary">LOGIN</button>
										<a href="<?= base_url() ?>user_forgot_password" class="float-right">Forgot Password!</a>
									</div>
									</form>

									<!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					<?php } ?>





					<script type="text/javascript">
						$(document).ready(function($) {
							$('#user_login').submit(function(event) {

								event.preventDefault();

								var formdata = new FormData(this);

								$.ajax({
										url: '<?= base_url(); ?>index.php/user_login_check',
										type: 'POST',
										data: formdata,
										processData: false,
										contentType: false
									})
									.done(function(response) {

										if (response == 1) {
											location.reload();
										} else {
											var x = document.getElementById('login_error');

											var html = "";
											x.innerHTML = "<div style='border-radius:12px; ' class='alert mt-2 bg-danger text-white'><h4 style='color: white;'>Invalid details</h4>";

											x.innerHTML += "</div>";
										}
									});

							});
						});
					</script>


					<?php if ($this->session->userdata('user_email')) { ?>

						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">

								<!-- <?php
										$i = 0;
										$j = 0;
										foreach ($accepted_projects as $items) { ?>

									<?php if ($items->bid_status == 1) {
												$i++;
											}
											$j++;
									?>

								<?php } ?> -->

								<?php
								$i = $this->session->userdata('user_wallet_amount');
								?>
								<i class="icon-credit-card"></i>
								<span class="cart-count badge-circle" style="width: 2.6rem;"> <?php echo $i ?></span>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>Wallet Amount</span>

										<a href="<?= base_url() ?>index.php/user_orders" class="float-right">₹ <?php echo $i ?></a>
									</div><!-- End .dropdown-cart-header -->
									<div class="dropdown-cart-header">
										<span>Referal Code</span>

										<input type="text" value="<?php echo $this->session->userdata('user_referal_code') ?>" id="myInput">
										<a href="#" class="float-right" onclick="myFunction()"> Copy Text </a>
										<p id="myTooltip">(Copied)</p>
									</div>





									<div class="dropdown-cart-total">
										<span>Tasks DONE</span>

										<span class="cart-total-price float-right"><?php echo $j ?></span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="<?= base_url() ?>index.php/user_orders" class="btn btn-dark btn-block">View TASKS History</a>
									</div>

									<?php
									if ($this->session->userdata('min_wid') <= $i) { ?>
										<div class="dropdown-cart-action">
											<a href="<?= base_url() ?>payment_req" class="btn btn-success btn-block">Request For Withdrawal</a>
										</div>
									<?php }
									?>



									<!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					<?php } ?>

				</div><!-- End .header-right -->
			</div><!-- End .container -->
	</div><!-- End .header-middle -->
	</header><!-- End .header -->

	<main class="main">



		<div class="home-top-container mt-lg-2">
			<div class="col-12 " id="login_error">
				<?php if ($msg = $this->session->flashdata('msg')) {
					if ($msg_class = $this->session->flashdata('msg_class')) {
				?>
						<div style="border-radius:12px; text-align:center; " class="alert mt-2 <?= $msg_class ?>">
							<h4 style="color: white;"> <?= $msg ?> </h4>
						</div>
				<?php         }
				}

				?>
			</div>

			<?php
			if ($this->session->userdata('user_email')) { ?>
				<div style="text-align: center;">

					<a href="<?= base_url() ?>index.php/view_products" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">New Tasks</button></a>
					&nbsp;
					&nbsp;
					<?php
					if ($this->session->userdata('min_wid') <= $i) { ?>
						<a href="<?= base_url() ?>payment_req" class="btn btn-success ">Request For Withdrawal</a>
					<?php }
					?>

				</div>

			<?php    } else { ?>
				<div style="text-align: center;">

					<a href="<?= base_url() ?>index.php/user_login" class="" title="Log In"><button type="submit" class="btn btn-primary">Log In</button></a>
					&nbsp;
					&nbsp;
					<a href="<?= base_url() ?>index.php/user_signup" class=""><button type="submit" class="btn btn-danger">Sign Up</button></a>
				</div>
			<?php }

			?>



			<br>

			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12 mb-2">
						<div class="home-slider owl-carousel owl-theme owl-carousel-lazy h-100" data-owl-options="{
								'dots': true,
								'nav': false,
								'loop': false
							}">
							<div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw">
								<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner1'] ?>" alt="slider image">
								<!-- <div class="banner-layer banner-layer-middle">
								<h4 class="text-white pb-4 mb-0">Find the Boundaries. Push Through!</h4>
								<h2 class="text-white mb-0">Winter Sale</h2>
								<h3 class="text-white text-uppercase m-b-3">70% Off</h3>
								<h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">₹<em class="align-text-top">199</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=199" class="btn btn-dark btn-md ls-10">Shop Now!</a>
							</div>End .banner-layer -->
							</div><!-- End .home-slide -->

							<div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw">
								<img class="owl-lazy slide-bg" src="assets/images/lazy.png" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner2'] ?>" alt="slider image">
								<!-- <div class="banner-layer banner-layer-middle text-uppercase">
								<h4 class="m-b-2">Over 200 products with discounts</h4>
								<h2 class="m-b-3">Great Deals</h2>
								<h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>₹<em>299</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=299" class="btn btn-dark btn-md ls-10">Get Yours!</a>
							</div>End .banner-layer -->
							</div><!-- End .home-slide -->

							<div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw">
								<img class="owl-lazy slide-bg" data-src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['main_banner3'] ?>"></img>
								<!-- <div class="banner-layer banner-layer-middle text-uppercase">
								<h4 class="m-b-2">Up to 70% off</h4>
								<h2 class="m-b-3">New Arrivals</h2>
								<h5 class="d-inline-block mb-0 align-top mr-5">Starting At <b>₹<em>599</em>.00</b></h5>
								<a href="<?= base_url() ?>view_products?min_price=599" class="btn btn-dark btn-md ls-10">Get Yours!</a>
							</div>End .banner-layer -->
							</div><!-- End .home-slide -->

						</div><!-- End .home-slider -->
					</div><!-- End .col-lg-9 -->

					<div class="col-lg-3 top-banners">
						<div class="row">
							<div class="col-md-4 col-lg-12">
								<div class="banner banner1 banner-md-vw-large banner-sm-vw-large mb-2">
									<figure>
										<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner1'] ?>" alt="banner">
									</figure>
									<!-- <div class="banner-layer banner-layer-middle text-right">
											<h3 class="m-b-2">Handbags</h3>
											<h4 class="m-b-4 text-secondary text-uppercase">Starting at $99</h4>
											<a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
										</div> -->
								</div><!-- End .banner -->
							</div>
							<div class="col-md-4 col-lg-12">
								<div class="banner banner2 banner-md-vw-large banner-sm-vw-large text-uppercase mb-2">
									<figure>
										<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner2'] ?>" alt="banner">
									</figure>
									<!-- <div class="banner-layer banner-layer-middle text-center">
											<h3 class="m-b-1 text-primary">Deal Promos</h3>
											<h4 class="mb-1 pb-1 text-body">Starting at $99</h4>
											<a href="#" class="text-dark ls-10 py-1">Shop Now</a>
										</div> -->
								</div><!-- End .banner -->
							</div>
							<div class="col-md-4 col-lg-12">
								<div class="banner banner3 banner-md-vw-large banner-sm-vw-large mb-2">
									<figure>
										<img src="<?= base_url() ?>admin_login/uploads/<?= $fetch_main_banner['mini_banner3'] ?>" alt="banner">
									</figure>
									<!-- <div class="banner-layer banner-layer-middle">
											<h3 class="m-b-2">Black Jackets</h3>
											<h4 class="m-b-4 text-white text-uppercase">Starting at $99</h4>
											<a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
										</div> -->
								</div><!-- End .banner -->
							</div>
						</div>
					</div><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .home-top-container -->

		<div class="info-boxes-container bg-dark2 mb-4">
			<div class="container">
				<div class="info-boxes-slider owl-carousel owl-theme" data-owl-options="{
						'dots': false,
						'margin': 20,
						'loop': false,
						'responsive': {
							'576': {
								'items': 2
							},
							'992': {
								'items': 3
							}
						}
					}">
					<div class="info-box text-white info-box-icon-left">
						<i class="icon-earphones-alt"></i>

						<div class="info-box-content pt-1">
							<h3 class="m-b-1" style="color: white;">Customer Support</h3>
							<h5 class="m-b-3" style="color: white;">Need Assistance?</h5>

							<p>For support you can always connect with us through the contact us form.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box text-white info-box-icon-left">
						<i class="icon-credit-card"></i>


						<div class="info-box-content pt-1">
							<h3 class="m-b-1" style="color: white;">Genuine Site</h3>
							<h5 class="m-b-3" style="color: white;">Safe & Fast</h5>

							<p>This is genuine site to earn attractive income.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box text-white info-box-icon-left">
						<i class="icon-action-undo"></i>


						<div class="info-box-content pt-1">
							<h3 style="color: white;" class="m-b-1">Easy Tasks </h3>
							<h5 style="color: white;" class="m-b-3">Easy & Free</h5>

							<p>Win exciting prizes just by completing small tasks.
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->
				</div><!-- End .info-boxes-slider -->
			</div><!-- End .container -->
		</div><!-- End .info-boxes-container -->


		<?php
		if ($this->session->userdata('user_email')) { ?>
			<div style="text-align: center;">

				<a href="<?= base_url() ?>index.php/view_products" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">New Tasks</button></a>
			</div>
		<?php    } else { ?>
			<div style="text-align: center;">

				<a href="<?= base_url() ?>index.php/user_login" class="" title="Add to Cart"><button type="submit" class="btn btn-primary">Log In</button></a>
				&nbsp;
				&nbsp;
				<a href="<?= base_url() ?>index.php/user_signup" class="" title="Add to Cart"><button type="submit" class="btn btn-danger">Sign Up</button></a>
			</div>
		<?php }

		?>
		<br>
		<?php
		if ($this->session->userdata('user_email')) { ?>
			<div style="text-align: center;">

				<button class="btn btn-success" onclick="myFunction1()">
					Referal Code:
					<span class="tooltiptext" id="myTooltip1"><?= $this->session->userdata('user_referal_code') ?></span>

				</button>

			</div>

		<?php }

		?>

		<br>

		<script>
			function myFunction1() {
				var $temp = $("<input>");
				$("body").append($temp);
				$temp.val($(myTooltip1).text()).select();
				document.execCommand("copy");
				$temp.remove();


				var tooltip = document.getElementById("myTooltip1");
				tooltip.innerHTML = "Copied";
			}
		</script>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
				<div class="company-section">
						<div class="container">
							<div class="row align-items-lg-center">
								<div class="col-lg-12">
									<img src="<?= base_url() ?>new/assets/images/about/n.jpg" alt="image">
								</div><!-- End .col-lg-6 -->

								<div class="col-lg-12 padding-left-lg">
									<h3 class="subtitle text-primary pb-2">OUR MISSION</h3>
									<p>Businesses pay only for tasks they are satisfied with. TaskEarner does not charge a fees for tasks that do not meet requirements set in the job. All job owners will have a chance to rate every submitted task.</p>

									<h3 class="subtitle text-primary pb-2">OUR VISION</h3>
									<p>We do not accept any job that attempts to harm a third party. No spam or scam jobs will be approved. It is not acceptable to ask freelancers to: Use a credit card or disclose their credit card information, Provide bank account details, Spam or harm a website, Use any form of payment to finish a task, Exchange money between payment systems, Create fake reviews, Give negative rating or negative feedback, Sign up for a free .</p>
								</div><!-- End .col-lg-6 -->
							</div><!-- End .row -->
						</div><!-- End .container -->
					</div><!-- End .company-section -->

					<div class="home-product-tabs">
						<ul class="nav nav-tabs mb-2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">Featured Tasks</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Latest Products</a>
							</li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
								<div class="row">
									<div class="col-6 col-sm-4">

										<?php foreach ($fetch_feature_product as $get) { ?>
											<div class="product-default inner-quickview inner-icon">
												<figure>
													<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
														<div class="" style=" height:17rem">

															<img class="" src="<?= base_url() ?>admin_login/uploads/<?= $get->front_image ?>" style=" height:100%">

														</div>
													</a>
													<div class="label-group">
														<div class="product-label label-hot">HOT</div>
													</div>


													<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="btn-quickview"> View</a>
												</figure>
												<div class="product-details">
													<div class="category-wrap">
														<div class="category-list">
															<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>" class="product-category"><?= $get->category_name ?>, &nbsp; <?= $get->sub_category_name ?></a>
														</div>

													</div>
													<h2 class="product-title">
														<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>"><?= $get->product_name ?></a>
													</h2>
													<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">
														<div class="ratings-container">
															<div class="product-ratings">
																<span class="ratings" style="width:100%"></span><!-- End .ratings -->
																<!-- <span class="tooltiptext tooltip-top"></span> -->
															</div><!-- End .product-ratings -->
														</div><!-- End .product-container -->
													</a>

													<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $get->advertisement_id ?>">

														<div class="price-box">
															<span class="old-price">₹<?= $get->product_actual_price ?></span>
															<span class="product-price">₹<?= $get->product_offer_price ?></span>
														</div><!-- End .price-box -->
													</a>
												</div><!-- End .product-details -->
											</div>
										<?php } ?>

									</div>
								</div>

							</div><!-- End .tab-pane -->

						</div><!-- End .tab-content -->
					</div><!-- End .home-product-tabs -->

				


				</div><!-- End .col-lg-9 -->

				<div class="sidebar-overlay"></div>
				<div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
				<aside class="sidebar-home col-lg-3 mobile-sidebar">
					<div class="side-menu-wrapper mb-3">
						<h2 class="side-menu-title ls-n-25">Browse Categories</h2>

						<ul class="side-menu pt-2 mb-2 px-3 mx-3">
							<li class="active"><a href="<?= base_url() ?>index.php/home"><i class="icon-home"></i>Home</a></li>


							<li>
								<a href="<?= base_url() ?>index.php/view_products" class="sf-with-ul"><i class="sicon-badge"></i>Categories</a>
								<span class="side-menu-toggle"></span>

								<ul>
									<?php foreach ($fetch_category as $category) { ?>

										<?php foreach ($fetch_sub_category as $sub_category) { ?>

											<?php if ($sub_category->category_id == $category->category_id) { ?>
												<li><a href="<?= base_url() ?>index.php/view_products?sub_category_id=<?php echo $sub_category->sub_category_id; ?>"><?php echo $sub_category->sub_category_name; ?></a></li>
											<?php } ?>
										<?php } ?>

										<!-- </div> -->
									<?php } ?>





								</ul>
							</li>

							<li><a href="<?= base_url() ?>index.php/about_us"><i class="sicon-users"></i>About Us</a></li>
							<li><a href="<?= base_url() ?>index.php/contact_us"><i class="icon-cat-gift"></i>Contact Us</a></li>

						</ul><!-- End .side-menu -->
					</div>

					<div class="widget widget-banners px-5 pb-3 text-center">
						<div class="owl-carousel owl-theme dots-small">
							<div class="banner d-flex flex-column align-items-center">
								<h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase"><em class="pt-3 ls-0">New</em>Tasks </h3>
								<!-- <h4 class="sale-text font1 text-uppercase m-b-3">Easy<sup>To</sup><sub>Earn</sub></h4> -->
								<p>Complete Tasks to Earn instantly.</p>
								<a href="<?= base_url() ?>index.php/view_products" class="btn btn-dark btn-md font1">View Tasks</a>
							</div><!-- End .banner -->

						</div><!-- End .banner-slider -->
					</div><!-- End .widget -->





				</aside>
			</div><!-- End .row -->
		</div><!-- End .container -->
	</main><!-- End .main -->

	<footer class="footer bg-dark">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title">About Us</h4>
							<div style="width: 105px;">
								<img src="<?= base_url() ?>assets/images/download2.png" alt="Logo" class="m-b-3">
							</div>
							<p class="m-b-4 pb-1"><?= $basic_info['company_about_us_footer'] ?></p>
							<a href="<?= base_url() ?>index.php/about_us" class="read-more text-white">read more...</a>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget mb-2">
							<h4 class="widget-title mb-1 pb-1">Contact Info</h4>
							<ul class="contact-info m-b-4">
								<li>
									<span class="contact-info-label">Address:</span><?= $basic_info['company_address'] ?>
								</li>
								<li>
									<span class="contact-info-label">Phone:</span><a href="tel:"><?= $basic_info['company_mobile'] ?></a>
								</li>
								<li>
									<span class="contact-info-label">Email:</span> <a href="mailto:<?= $basic_info['company_email'] ?>"><?= $basic_info['company_email'] ?></a>
								</li>
								<li>
									<span class="contact-info-label">Working Days/Hours:</span>
									<?= $basic_info['company_working_hour'] ?>
								</li>
							</ul>
							<div class="social-icons">
								<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
								<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank" title="Twitter"></a>
								<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
							</div><!-- End .social-icons -->
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title pb-1">Customer Service</h4>

							<ul class="links">
								<?php if ($this->session->userdata('user_email')) { ?>
									<li><a href="<?= base_url() ?>index.php/view_products">View All Projects</a></li>
									<li><a href="<?= base_url() ?>index.php/user_orders">Tasks Done</a></li>
									<li><a href="<?= base_url() ?>index.php/payment_history">Payment History</a></li>

									<li><a href="<?= base_url() ?>index.php/user_profile">My Account</a></li>
									<li><a href="<?= base_url() ?>index.php/logout">LogOut</a></li>

									<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
									<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>

									<li><a href="<?= base_url() ?>index.php/privacy">Privacy</a></li>
								<?php    } else { ?>

									<li><a href="<?= base_url() ?>index.php/user_login">Log In</a></li>
									<li><a href="<?= base_url() ?>index.php/user_signup">Sign Up</a></li>

									<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
									<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>
									<li><a href="<?= base_url() ?>index.php/privacy">Privacy</a></li>
								<?php } ?>
							</ul>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->

					<div class="col-lg-3 col-sm-6 pb-5 pb-sm-0">
						<div class="widget">
							<h4 class="widget-title">Popular Tags</h4>

							<div class="tagcloud">
								<?php foreach ($fetch_tags as $tags) { ?>
									<a href="<?= base_url() ?>index.php/view_product_details?advertisement_id=<?= $tags->advertisement_id ?>"><?= $tags->product_name ?></a>

								<?php } ?>
							</div>
						</div><!-- End .widget -->
					</div><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .footer-middle -->

		<div class="container">
			<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
				<p class="footer-copyright py-3 pr-4 mb-0">© InfoTEch. 2020. All Rights Reserved</p>

				<img src="<?= base_url() ?>assets/images/payments.png" alt="payment methods" class="footer-payments py-3">
			</div>
		</div><!-- End .container -->
	</footer><!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">

				<ul class="mobile-menu">
					<li class="active"><a href="<?= base_url() ?>">Home</a></li>

					<li>
						<a href="<?= base_url() ?>index.php/view_products">Categories</a>
						<ul>
							<?php foreach ($fetch_category as $category) { ?>
								<li>
									<a href="<?= base_url() ?>index.php/view_products?category_id=<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></a>
									<ul>
										<?php foreach ($fetch_sub_category as $sub_category) { ?>

											<?php if ($sub_category->category_id == $category->category_id) { ?>
												<li><a href="<?= base_url() ?>index.php/view_products?sub_category_id=<?php echo $sub_category->sub_category_id; ?>"><?php echo $sub_category->sub_category_name; ?></a></li>
											<?php } ?>
										<?php } ?>
									</ul>
								</li>
							<?php } ?>

						</ul>
					</li>


					<li><a href="<?= base_url() ?>index.php/about_us">About Us</a></li>
					<li><a href="<?= base_url() ?>index.php/contact_us">Contact Us</a></li>
					<?php if ($this->session->userdata('user_email')) { ?>
						<li class=""><a href="<?= base_url() ?>index.php/logout">Logout</a></li>
					<?php } ?>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="<?= $basic_info['company_insta_link'] ?>" class="social-icon social-instagram icon-instagram" target="_blank"></a>
				<a href="https://api.whatsapp.com/send/?phone=<?= $basic_info['company_mobile'] ?>&text&app_absent=0" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
				<a href="<?= $basic_info['company_facebook_link'] ?>" class="social-icon social-facebook icon-facebook" target="_blank"></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<!-- Add Cart Modal -->


	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="<?= base_url() ?>assets/js/main.min.js"></script>

	<script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>


	<script>
		function myFunction() {
			var copyText = document.getElementById("myInput");
			copyText.select();
			copyText.setSelectionRange(0, 999999999);
			document.execCommand("copy");

			var tooltip = document.getElementById("myTooltip");
			tooltip.innerHTML = "Copied";
		}
	</script>


	<script>
		$(".destroy_cart_item").click(function() {
			var rowid = $(this).data("rowid");
			$.ajax({
					url: '<?php echo base_url(); ?>index.php/destroy_cart_item',
					type: 'POST',
					data: {
						rowid: rowid
					},
				})
				.done(function() {
					location.reload();
				});
		});
	</script>




	<script type="text/javascript">
		$(document).ready(function($) {
			$('#via_form').keyup(function() {

				// alert("hello");
				/* Act on the event */
				var seachText = $(this).val();
				if (seachText != '') {
					$.ajax({
							url: '<?= base_url(); ?>searching',
							type: 'POST',
							data: {
								search: seachText
							},
						})
						.done(function(response) {
							var data = $.parseJSON(response);
							var html = '';
							$.each(data, function(index, val) {
								html += "<a href='<?= base_url() ?>index.php/view_products?search=" + seachText + "'class='list-group-item list-group-item-action' border-1 >";
								html += val['product_name'];
								html += '</a>';

							});
							$('#show-list').html(html);
						});
				} else {
					$('#show-list').html('');
				}
				$('a').click(function(event) {
					$('#search').val($(this).text());
					$('#show-list').html('');
				});
			});
		});
	</script>





	<?php if ($this->session->userdata('user_details_id')) { ?>
		<script>
			window.addEventListener('DOMContentLoaded', (event) => {
				CometChatWidget.init({
					"appID": "313555def95f414",
					"appRegion": "us",
					"authKey": "20c46ce3a729f5ffe07899527afda0cd7588a56d"
				}).then(response => {
					console.log("Initialization completed successfully");


					// 			// OPTIONAL
					CometChatWidget.createOrUpdateUser({
						"uid": "u<?= $this->session->userdata('user_details_id') ?>",
						"name": "<?= $this->session->userdata('user_name') ?>"
						//  "roles": "user"
					});

					CometChatWidget.login({
						"uid": "u<?= $this->session->userdata('user_details_id') ?>"
					}).then(response => {
						// var kush = 'superhero5';	

						CometChatWidget.launch({
							"widgetID": "ab6aa584-f178-4ca4-9e2f-b11b1d3fd4d2",
							"docked": "true",
							"alignment": "right", //left or right
							"roundedCorners": "true",
							"height": "450px",
							"width": "400px",
							// "defaultID": 'kush', //default UID (user) or GUID (group) to show,
						});





					}, error => {
						console.log("User login failed with error:", error);
						//Check the reason for error and take appropriate action.
					});
				}, error => {
					console.log("Initialization failed with error:", error);
					//Check the reason for error and take appropriate action.
				});


			});
		</script>
	<?php } ?>


</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_8/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 12:13:34 GMT -->

</html>