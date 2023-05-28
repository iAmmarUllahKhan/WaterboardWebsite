<?php
include('config.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                         </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Customers</div>
                                       <?php
                                    $sql = "SELECT * FROM customer";
                                    $result = mysqli_query($conn, $sql);
                                    $rowcount = mysqli_num_rows( $result );
                                      
                                       
                                       
                                       ?>     
                                            
                                            
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rowcount";  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-grey-30"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Suppliers</div>
                                               <?php
                                    $sql = "SELECT * FROM supplier";
                                    $result = mysqli_query($conn, $sql);
                                    $rowcount = mysqli_num_rows( $result );
                                      
                                       
                                       
                                       ?> 
                                            
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rowcount";  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fal fa-faucet-drip fa-2x text-gray-30"></i>
                                        </div>
                                    </div>
                          </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL COMPLAINTS</div>
                                                
                                                <?php
                                    $sql = "SELECT * FROM complain";
                                    $result = mysqli_query($conn, $sql);
                                    $rowcount = mysqli_num_rows( $result );
                                      
                                       
                                       
                                       ?> 

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rowcount";  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-question-circle fa-2x text-gray-30"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                COMPLAINTS PENDING</div>
                                                <?php
                                    $sql = "SELECT * FROM complain where status='processing'";
                                    $result = mysqli_query($conn, $sql);
                                    $rowcount = mysqli_num_rows( $result );
                                      
                                       
                                       
                                       ?> 


                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rowcount";  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-question-circle fa-2x text-gray-30"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                COMPLAINTS RESOLVED</div>
                                                <?php
                                    $sql = "SELECT * FROM complain where status='resolved'";
                                    $result = mysqli_query($conn, $sql);
                                    $rowcount = mysqli_num_rows( $result );
                                      
                                       
                                       
                                       ?> 
                                            
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rowcount";  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-question-circle fa-2x text-gray-30"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  <!-- Content Row -->

                    </div>
  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>