<main class="main">


<div class="category-banner-container bg-gray">
		<!-- <div class="col-12  " id="login_error">
			<?php if ($msg = $this->session->flashdata('msg')) {
				if ($msg_class = $this->session->flashdata('msg_class')) {
			?>
					<div style="border-radius:12px; text-align:center; " class="alert mt-2 <?= $msg_class ?>">
						<h4 style="color: white;"> <?= $msg ?> </h4>
					</div>
			<?php         }
			}

			?>
		</div> -->
	</div>
			<div class="container">
				<div class="row">
					
					<div class="col-md3"></div>
					<div class="col-md-6" style="margin: 2px auto;" > 
						
					<div class="col-12" >
                            <?php if ($msg = $this->session->flashdata('msg')) {
                                if ($msg_class = $this->session->flashdata('msg_class')) {
                            ?>
                                    <div style="border-radius:12px; " class="alert mt-2 <?= $msg_class ?>">
                                        <h4 style="color: white;"> <?= $msg ?> </h4>
                                    </div>
                            <?php         }
                            }

                            ?>
                        </div>
						<form action="<?= base_url() ?>check_forgot_email" method="POST" >							
							<h2 class="title mb-2">Forgot Password</h2>
							<!-- <h5 class="title mb-2"></h5> -->

							<input type="email" name="user_email" class="form-control" placeholder="Enter Email Address*" required>

							<div class="form-footer">
								<button style="margin: auto;" type="submit" class="btn btn-primary">Send Password To Email</button>
                                &nbsp;
                                <a style="margin: auto;"  href="<?= base_url() ?>home" class="" ><button type="button" class="btn btn-danger">Cancel</button></a>
								
								
							</div><!-- End .form-footer -->
						</form>
						
					</div><!-- End .col-md-6 -->
					<!-- <div class="col-md-6" style="margin: 2px auto;" > 
						<a href="<?= base_url() ?>user_forgot_password">
						<p style="text-align: right;padding-right:15%" > <u> Forgot Password!</u> </p>
						
						</a>	
					</div> -->

					<div class="col-md3"></div>

				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->