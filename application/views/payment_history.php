<main class="main">

	<div class="category-banner-container bg-gray">
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
	</div>

	<div class="container mt-2 ">
		<div class="row">
			<div class="col-lg-9 order-lg-last dashboard-content">
				<h2>Payment History</h2>

				<div class="cart-table-container">
					<table class="table table-cart">
						<thead>
							<tr>
								<th class="product-col">Request Date</th>
								<th>Amount</th>
								<th>Bank Account</th>
								<th>IFSC</th>
								
								<th class="price-col">Status</th>
								<!-- <th class="qty-col">Delivery Date</th> -->


								<!-- <th>Status</th> -->

							</tr>
						</thead>
						<tbody>


							<?php if ($payment_history == NULL) { ?>
								<tr class="product-row">
									<td colspan="5">No Bids Found</td>

								</tr>

							<?php }
							foreach ($payment_history as $history) { ?>
								<tr class="product-row">
									<td >

										<!-- <h4 class="product-title"> -->
											<?= $history->req_date ?>
										<!-- </h4> -->
									</td>
									<td><?= $history->req_wallet_amount ?></td>
									<td><?= $history->user_bank ?></td>
									<td><?= $history->user_ifsc ?></td>

									<!-- <td> ₹<?= $cart->bid_price ?></td> -->

									<!-- <td> <?= $cart->project_delivery ?> Days</td> -->


									<td><?php
										if ($history->payment_status == 0) { ?>
											<h5 style="color: #03a9f4;" >Pending</h5>
										<?php }
										if ($history->payment_status	 == 1) { ?>
											<h5 style="color:green;" >Payment Successful</h5>
									<?php	}
										if ($history->payment_status == 1) {
											// echo('Approved'); 
										?>
											<!-- <div style="text-align: center;">

												<a class="commet" data-uid="t<?= $cart->tasker_details_id ?>" href="#" class=""><button type="button" class="btn btn-info">Open Chat</button></a>
											</div> -->
										<?php


										} {
											if ($history->payment_status == 2) { ?>
												<h5 style="color: #d7443e;" >Rejected</h5>
										<?php 	}
										}
										?>

									</td>

								</tr>
							<?php } ?>
						</tbody>

					</table>
				</div>
			</div><!-- End .col-lg-9 -->







			<aside class="sidebar col-lg-3">
				<div class="widget widget-dashboard">
					<h3 class="widget-title">My Account</h3>

					<ul class="list">
						<li><a href="<?= base_url() ?>index.php/user_profile">Account Dashboard</a></li>
						<!-- <li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li> -->
						<li ><a href="<?= base_url() ?>index.php/user_orders">Tasks Done</a></li>
						<li class="active"><a href="<?= base_url() ?>index.php/payment_history">Payment History</a></li>
						<li><a href="<?= base_url() ?>index.php/user_profile_pic">My Profile</a></li>

						<!-- <li><a href="#">Billing Agreements</a></li>
								<li><a href="#">Recurring Profiles</a></li> -->
						<!-- <li><a href="<?= base_url() ?>index.php/user_reviews">My Product Reviews</a></li> -->
						<!-- <li><a href="#">My Tags</a></li>
								<li><a href="#">My Wishlist</a></li>
								<li><a href="#">My Applications</a></li>
								<li><a href="#">Newsletter Subscriptions</a></li>
								<li><a href="#">My Downloadable Products</a></li> -->
					</ul>
				</div><!-- End .widget -->
			</aside><!-- End .col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->