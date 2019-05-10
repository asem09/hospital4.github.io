<?php include('database.php') ?>


<?php

session_start();
include('auth.php');
$pat_id=$_SESSION['pat_id'];
$msg='';
$msgClass='';
$query="SELECT * FROM patients WHERE pat_id='$pat_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($row){
  $pat_id=$row['pat_id'];
  $name=$row['name'];
  $email=$row['email'];
  $phone=$row['phone'];
  $gender=$row['gender'];
}

$query="SELECT * FROM prescription WHERE pat_id='$pat_id' ORDER BY created_at DESC";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
if($row){
  mysqli_free_result($result);

}else{
  $msg='No Prescription has been founded!';
  $msgClass='alert-success';
}


 ?>

<?php include('header.php'); ?>






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
.jumbotron{
background: black;
box-shadow: inset 3px 3px 10px green;
}
dt{

  font-size: 23px;
}
dd{
  color:green;
  font-weight: bold;
  margin-left: 25px;

}
dl h3{
  color:white;
  border-bottom: 1px solid green;
  text-align: center;
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
      <li class="list-item">
        <h4 style='color:#004d00;' class='card-title'><i class="far fa-user" style='margin-right:5px;'></i><?php echo $name; ?></h4>
      </li>
    </ul>
    </ul>
  </div>
</nav>
<div class="container-fluid pl-0">
    <div class="row">
      <div class="col-12 col-md-4 pt-5 ">
        <div class="jumbotron" style="max-width:400px; height:550px; margin-top:-30px;">

          <dl>
            <h3 class='display-4'><i class="fas fa-info-circle"></i>Details</h3>
            <dt><i class="fas fa-address-card"></i> Id Number:</dt>
            <dd><?php echo $pat_id.'.'; ?></dd>
            <dt><i class="far fa-user"></i> Name:</dt>
            <dd><?php echo $name.'.'; ?></dd>
            <dt><i class="fas fa-at"></i> Email:</dt>
            <dd><?php echo $email.'.'; ?></dd>
            <dt><i class="fas fa-phone"></i> Phone Number:</dt>
            <dd><?php echo $phone.'.'; ?></dd>
            <dt><i class="fas fa-user-friends"></i> Gender:</dt>
            <dd><?php echo $gender.'.'; ?></dd>
          </dl>
        </div>
      </div>
      <div class="col-12 col-md-8 pt-3">
        <?php if($msg!=''): ?>
          <h3 class="text-center alert <?php echo $msgClass; ?>"><?php echo $msg; ?></h3>
        <?php else: ?>
        <?php foreach ($row as $row): ?>
        <div class="jumbotron">
          <dl>
            <dt>Date:</dt>
            <dd><?php echo $row['created_at']; ?></dd>
            <dt>Category:</dt>
            <dd><?php echo $row['category']; ?></dd>
            <dt>Disease:</dt>
            <dd><?php echo $row['disease']; ?></dd>
            <dt>Strength:</dt>
            <dd><?php echo $row['opt']; ?></dd>
            <dt>Prescription:</dt>
            <dd><?php echo $row['pres']; ?></dd>
          </dl>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
      </div>
    </div>
  </div>

<?php include('footer.php') ?>
