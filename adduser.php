<?php
$host_heroku = "ec2-52-86-25-51.compute-1.amazonaws.com";
$db_heroku = "dcnnn5f87r5pst";
$user_heroku = "nlcmibxyahfytv";
$pw_heroku =
"df1ff1c44e44f986fd52f17f3da8346a956efc0d65553c3b187d88514683d65e";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
?>
<?php

session_start();
include("../db.php");
include "sidenav.php";
include "topheader.php";

if($_GET['btn_save'])
{
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$email=$_GET['email'];
$user_password=$_GET['password'];
$mobile=$_GET['phone'];
$address1=$_GET['city'];
$address2=$_GET['country'];
$query = "INSERT INTO user_info VALUES ('$user_id', '$first_name', '$last_name', '$email', '$password', '$mobile', '$address1', '$address2')";
$data = pg_query($pg_heroku,$query);
if($data)
{
echo "<script>alert('Added Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://toyatn-shop.herokuapp.com/index.php" />;
<?php
}
else
{
echo "Failed to update the table.";
}
}
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="GET">
                    <div class="row">
                      

                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" value="" name="first_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text"  value="" name="last_name" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email"  value="" name="email"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password"  value="" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" value="" name="phone" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" value=""  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="country" value="" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" name="btn_save" value="" class="btn btn-primary pull-right">Update User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>