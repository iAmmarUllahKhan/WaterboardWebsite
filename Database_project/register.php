<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config.php')
?>


<div class="modal fade" id="addtechnicianprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer care Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="staff.php" method="POST">
      <input type="hidden" name="action" value="add_staff">
        <div class="modal-body">

            <div class="form-group">
                <label>Staff Name </label>
                <input type="text" name="staffname" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label> Department </label>
                <input type="text" name="dpt" class="form-control" placeholder="Enter Department">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <!-- <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div> -->
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Technician Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtechnicianprofile">
              Add Technician Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Technician Name </th>
            <th>Email </th>
            <th>Department</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
        <?php
$sql = "SELECT * FROM staff";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) { ?>
	
	        <tr>
            <td> <?php echo($row['id']);?> </td>
            <td> <?php echo($row['staff_name']);?></td>
            <td> <?php echo($row['email']);?></td>
            <td><?php echo($row['department']);?> </td>





    
            <!-- <td> 1 </td>
            <td> Funda of WEb IT</td>
            <td> funda@example.com</td>
            <td> *** </td> -->
            <td>
                <!-- <form action="#" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form> -->
            <a href="register.php?action=edit&id=<?php echo($row['id']);?>"  name="edit_btn" class="btn btn-success badge-pill" > Edit </a>

            </td>
            <td>
            <a href="staff.php?action=delete_staff&id=<?php echo($row['id']);?>"  class="btn btn-danger badge-pill" > DELETE </a>

            <!-- <form action="staff.php" method="post">
                    <input type="hidden"  name="action" value="delete_staff">
                    <input type="hidden" name="id" value="<?php echo($row['id']);?>">
                    <button  type="submit"  class="btn btn-danger"> DELETE</button>
               </form> -->
            </td>
          
            </tr>
             <?php
}
	
?>

<?php
if (isset($_GET['action']) && $_GET['action'] == 'edit') {
          $id = $_GET['id'];
$sql = "SELECT * FROM staff where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)
?>


        <form action="staff.php" method="POST">


        <input type="hidden" name="action" value="update_staff">
          <div class="modal-body">
  
        <input type="hidden" name="id" value="<?php echo($row['id']);?>">

          <div class="form-group">
                  <label> Staff Name </label>
                  <input type="text" name="staffname" value="<?php echo($row['staff_name']);?>" class="form-control" placeholder="Enter Staff name">
              </div>
              <div class="form-group">
                  <label>Department</label>
                  <input type="text" name="dpt" value="<?php echo($row['department']);?>" class="form-control" placeholder="Enter Department">
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>