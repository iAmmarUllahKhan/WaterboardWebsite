<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin Panel</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
      <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
       <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="register_technician.html">
            <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div> -->
            <div class="sidebar-brand-text mx-3">AQUA</div>
        </a>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="managerHome.php">
              <i class="fas fa-home"></i>            
              <span>Home</span></a>
        </li>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
                
        <!-- Heading -->
        <div class="sidebar-heading">
            View info
        </div>
        
        
        <li class="nav-item">
            <a class="nav-link" href="manageroperation.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Customer Info </span></a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="managercomplain.php">
            <i class="fas fa-question"></i>
            <span>Complain Info </span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
       
        <a href="managerauth.php?action=logout"  name="edit_btn" class="btn btn-warning badge-pill" > Logout </a>

      </form>
        
   
   </ul>
       


    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
               MANAGER
                  
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="#" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div> 
  

  <!-- Begin Page Content -->
 

  <div class="modal fade" id="addtechnicianprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer care Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="managerbackend.php" method="POST">
        <input type="hidden" name="action" value="add_customer">
          <div class="modal-body">
  
              <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Username">
              </div>
              <div class="form-group">
                  <label> House# </label>
                  <input type="text" name="house_number" class="form-control" placeholder="Enter house number">
              </div>
              <div class="form-group">
                  <label> Address </label>
                  <input type="text" name="address" class="form-control" placeholder="Enter address">
              </div>
              <div class="form-group">
                  <label> Phone# </label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Phone number">
              </div>
              <div class="form-group">
                  <label> Area </label>
                  <input type="text" name="area" class="form-control" placeholder="Enter Area">
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Enter Password">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary badge-pill" data-dismiss="modal">Close</button>
              <button type="submit" name="registerbtn" class="btn btn-primary badge-pill">Save</button>
          </div>
        </form>
  
      </div>
    </div>
  </div>
  
  <!-- <div class="container-fluid"> -->
  
    <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Customer Profile 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtechnicianprofile">
                Add Customer Profile 
              </button>
      </h6>
    </div>
  
    <div class="card-body">
  
      <div class="table-responsive">
  
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> name </th>
              <th>  ID </th>
              <th>Phone</th>
              <th> house Number </th>
              <th>Area</th>
              <th>Address</th>
              <th>email</th>
              <th>Password</th>


              <th>EDIT </th>
              <th>DELETE </th>
            </tr>
          </thead>
          <tbody>
       
          <?php
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) { ?>
	<!-- <?php $id = $row['id'] ;?> -->
	        <tr>
            <td> <?php echo($row['cusname']);?> </td>
            <td> <?php echo($row['id']);?></td>
            <td> <?php echo($row['phone']);?></td>
            <td> <?php echo($row['house_number']);?></td>
            <td> <?php echo($row['area']);?></td>
            <td> <?php echo($row['addr']);?></td>
          
            <td> <?php echo($row['email']);?></td>
            <td><?php echo($row['pass']);?> </td>

            <!-- <td> 1 </td>
            <td> Funda of WEb IT</td>
            <td> funda@example.com</td>
            <td> *** </td> -->
            <td>
               
            <a href="manageroperation.php?action=edit&id=<?php echo($row['id']);?>"  name="edit_btn" class="btn btn-success badge-pill" > Edit </a>

            </td>
            <td>
               <form action="managerbackend.php" method="post">
                    <input type="hidden" name="action" value="delete_customer">
                    <input type="hidden" name="id" value="<?php echo($row['id']);?>">
                    <button  type="submit"  class="btn btn-danger"> DELETE</button>
               </form>

            <!-- <a href="staff.php?action=delete_staff&id=<?php echo($row['id']);?>">Delete</a> -->
            </td>
          
            </tr>
             <?php
}
                
              ?>  


              <?php
              if (isset($_GET['action']) && $_GET['action'] == 'edit') {
                        $id = $_GET['id'];
              $sql = "SELECT * FROM customer where id=$id";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result)
              ?>


                      <form action="managerbackend.php" method="POST">


                      <input type="hidden" name="action" value="update_customer">
                        <div class="modal-body">
                
                      <input type="hidden" name="id" value="<?php echo($row['id']);?>">

                        <div class="form-group">
                                <label> Name </label>
                                <input type="text" name="cusname" value="<?php echo($row['cusname']);?>" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label> House# </label>
                                <input type="text" name="house_number" value="<?php echo($row['house_number']);?>" class="form-control" placeholder="Enter house number">
                            </div>
                            <div class="form-group">
                                <label> Address </label>
                                <input type="text" name="address" value="<?php echo($row['addr']);?>" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label> Phone# </label>
                                <input type="text" name="phone" value="<?php echo($row['phone']);?>" class="form-control" placeholder="Enter Phone number">
                            </div>
                            <div class="form-group">
                                <label> Area </label>
                                <input type="text" name="area" value="<?php echo($row['area']);?>" class="form-control" placeholder="Enter Area">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo($row['email']);?>" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" value="<?php echo($row['pass']);?>" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary badge-pill" data-dismiss="modal">Close</button>
                            <button type="submit" name="registerbtn" class="btn btn-primary badge-pill">Edit</button>
                        </div>
                      </form>
                    
                    </div>
                  </div>
                </div>
                <?php } ?>           

          </tbody>
        </table>
  
  
      </div>
    </div>

    
    </div>

  </div>

     

    </div>
      <!-- /.container-fluid -->
      
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>            
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    
</body>

</html>
