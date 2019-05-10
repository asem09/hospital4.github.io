<?php include('database.php') ?>


<?php

session_start();
include('auth.php');
$msg='';
$msgClass='';
$x='';
$xClass='';
$pat_id=$_SESSION['pat_id'];
$query="SELECT * FROM patients WHERE pat_id='$pat_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($row){
  $name=$row['name'];
  $email=$row['email'];
}

$query="SELECT * FROM appoitment WHERE pat_id='$pat_id' ORDER BY id DESC ";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
if($data){
  mysqli_free_result($result);
  $x='Your Appointments';
  $xClass='alert-success';
}else{
  //not found
  $msg='No Appointments has been Found.';
  $msgClass='alert-success';
}

if(isset($_POST['delete'])){
  $pat_id=$_SESSION['pat_id'];
  $booking_id=mysqli_real_escape_string($conn,$_POST['booking_id']);

  $query="SELECT * FROM appoitment WHERE id='$booking_id' AND pat_id='$pat_id'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_num_rows($result);
  if($row){
    //if the records with the patient id and booking id  is found;
    $query="DELETE FROM appoitment WHERE  id='$booking_id'";
    $result=mysqli_query($conn,$query);
       if($result==true){
        //if data is deleted;
        $msg='Your appointment has been deleted';
        $msgClass='alert-success';
        header('location:cancelBooking.php');

      }
}else{
  $x='Please check your Booking id';
  $xClass='alert-danger';
  }
}
 ?>

<?php include('header.php') ?>

<style>
*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;

}
body{
  background: url('/hos/images/hos8.jpg') no-repeat;
  background-position: top;
  background-size:cover;
  height:100%;

}

.navbar-custom {
  background:  #001a00;
  opacity: .8;
  font-size: 15px;

}

.navbar-custom .nav-link,.navbar-brand{
  color:white;
}
form input[type=text]{
  max-width:250px;
  transition: max-width ease-in-out 1s;
}
form input[type=text]:focus{
  color: black;
  border: 2px solid green !important;
  box-shadow: inset 0px 0px 2px green;
  max-width:800px;

}

</style>

<nav class="navbar navbar-expand-md navbar-custom fixed-top  ">
  <a href="index.php" class="navbar-brand">AL-BUSTAN</a>
  <button type="button" class='navbar-toggler' data-toggle='collapse' data-target='#mynav'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class="navbar-collapse collapse" id="mynav">
    <ul class="navbar-nav ml-auto">
      <li class="list-item">
        <a href="pat_page.php" class="nav-link">Appointment</a>
      </li>
      <li class="list-item">
        <a href="pat_det.php" class="nav-link">My details & treatments</a>
      </li>
      <li class="list-item">
        <a href="cancelBooking.php" class="nav-link">cancelBooking</a>
      </li>
      <li class="list-item">
        <a href="feedback.php" class='nav-link'>Feedback</a>
      </li>
      <li class="list-item">
        <a href="logout.php" class='nav-link'>logout</a>
      </li>
    </ul>
    </ul>
  </div>
</nav>
<div class="container-fluid pl-0">
  <div class="row">
    <div class=" col-12 col-md-4">
      <div class="card " style='max-width:400px; background:#000; margin-top:5px;'>
        <div class="card-header">
          <h3 style='color:white;'><i class="far fa-lightbulb"></i> Welcome</h3>
        </div>
        <div class="card-body">
          <h3 style='color:#004d00;' class='card-title'><i class="far fa-user" style='margin-right:5px;'></i><?php echo $name; ?></h3>
          <h4 style='color:#004d00;'><i class="far fa-envelope" style='margin-right:5px;'></i><?php echo $email; ?></h4><br>
          <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
              <label><h6>Delete Appointment:</h6></label>
              <input type="text" class='form-control' placeholder="Enter your booking id" name="booking_id" value="">
            </div>
            <input type="submit"  class=' btn btn-success'  name="delete" value="DELETE" style='width:100%;'>
          </form>
        </div>
        </div>
      </div>
      <div class="col-12 col-md-8">
        <?php if($msg!=''): ?>
          <div style='margin-top:20px;' class="text-center alert <?php  echo $msgClass; ?>"><h2><?php echo $msg; ?></h2></div>
        <?php else: ?>
        <div class="table-responsive-sm">
        <table class="table table-dark table-bordered table-striped table-hover ">
            <div style='margin-top:20px;' class="text-center  alert <?php echo $xClass; ?>"><h2><?php echo $x; ?></h2></div>
          <thead>
            <tr class='text-success'>
              <th>Booking Id</th>
              <th>Patient id</th>
              <th>Category</th>
              <th>Doctror Name</th>
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <?php foreach ($data as $data ): ?>
          <tbody>
            <tr>
              <td class='text-success' style="font-weight:bold;"><?php echo $data['id']; ?></td>
              <td><?php echo $data['pat_id']; ?></td>
              <td><?php echo $data['category']; ?></td>
              <td><?php echo $data['doc_name']; ?></td>
              <td><?php echo $data['app_date']; ?></td>
              <td><?php echo $data['timing']; ?></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      <?php endif; ?>
        </table>
        </div>
      </div>
    </div>
  </div>

<<?php include('footer.php') ?>
