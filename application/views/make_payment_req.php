<main class="main">


<div class="category-banner-container bg-gray">
		<div class="col-12  " id="login_error">
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
						<form action="<?= base_url() ?>final_req" method="POST" >							
							<h2 class="title mb-2">Request For Withdrawal</h2>
                           

							
							<input type="text" minlength="6" maxlength="12" name="user_number" class="form-control" placeholder="Enter 10 digits Mobile Number" required>
							
							<input type="text" name="user_bank" class="form-control" placeholder="Bank Account Number" required>

							<input type="text" name="user_ifsc" class="form-control" placeholder="IFSC Number" required>

							<input type="text"  name="user_address" class="form-control" placeholder="Address" required>

							<input type="text"  name="user_city" class="form-control" placeholder="City" required>

							<input type="text6" name="user_state" class="form-control" placeholder="State" required>

							<input type="text" name="user_pincode" class="form-control" placeholder="Pincode" required>

							<div class="form-footer">
								<button style="margin: auto;" type="submit" class="btn btn-primary">Submit Request</button>
                                &nbsp;
                                <a style="margin: auto;"  href="<?= base_url() ?>home" class="" ><button type="button" class="btn btn-danger">Back</button></a>
							</div><!-- End .form-footer -->
						</form>
					</div><!-- End .col-md-6 -->

					<div class="col-md3"></div>

				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->