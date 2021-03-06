<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <!-- <h4 class="page-title">View Order Details</h4> -->

            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="mr-2">

                    </div>
                    <!-- <div class=""><small>Total Items</small> -->
                    <!-- <h4 class="text-info mb-0 font-medium"><?= count($fetch_category) ?></h4></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-12">
                            <?php if ($msg = $this->session->flashdata('msg')) {
                                if ($msg_class = $this->session->flashdata('msg_class')) {
                            ?>
                                    <div class="alert <?= $msg_class ?>">
                                        <h4> <?= $msg ?> </h4>
                                    </div>
                            <?php         }
                            }

                            ?>
                        </div>

                        <h4 class="card-title">View Bid Details</h4>

                        <br>


                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <!-- <thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                               
                                            </tr>
                                        </thead> -->
                                <tbody>
                                    <tr>
                                        <th style="width: 50%;">Tasker Name</th>
                                        <th> <b> <?= $view_proposal_details['user_name'] ?></b></th>
                                    </tr>

                                    <tr>
                                        <th>Proposal Details</th>
                                        <th> <b> <?= $view_proposal_details['proposal_description'] ?></b></th>
                                    </tr>

                                    <tr>
                                        <th>Screenshot</th>
                                        <th>
                                            <div style="width: 300px;">
                                                
                                                    <img style="width: 100%;" src="<?php echo base_url() . "uploads/" . $view_proposal_details['project_ss']; ?>" alt="">
                                                
                                            </div>
                                        </th>
                                    </tr>




                                </tbody>

                            </table>
                            <div style="text-align: center;">

                                <a href="<?php echo base_url(); ?>index.php/tasker_bids_stats">
                                    <button type="button" class="btn btn-info">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>