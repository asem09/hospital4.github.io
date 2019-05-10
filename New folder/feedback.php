<?php include('database.php') ?>
<?php session_start(); ?>
<?php include('auth.php') ?>

<?php

$msg='';
$msgClass='';
$pat_id=$_SESSION['pat_id'];
$query="SELECT * FROM patients WHERE pat_id='$pat_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($row){
  $name=$row['name'];
  $email=$row['email'];
}

if(isset($_POST['submit'])){
  $pat_id=mysqli_real_escape_string($conn,$_SESSION['pat_id']);
  $feed_rate=mysqli_real_escape_string($conn,$_POST['feed_rate']);
  $feed_type=mysqli_real_escape_string($conn,$_POST['feed_type']);
  $msg=mysqli_real_escape_string($conn,$_POST['message']);

  $query="INSERT INTO feedback (pat_id,feed_rate,feed_type,message) VALUES ('$pat_id','$feed_rate','$feed_type','$msg')";
  $result=mysqli_query($conn,$query);
  if($result){
    //inserted
    $msg='Your Feedback has been Successfully sent <b>Thank You '.$name.'.<br>';
    $msgClass='alert-success';
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

.feedback{
  background: #000;
  padding: 20px;
  margin-top: 40px;
  margin-left: 70px;
  opacity: .8;
  max-width:800px;
  box-shadow: inset 1px 1px 10px green;
}
.feedback .btn{
  width:100%;
}

.feedback .feed_type{
  display: none;
}

.feedback .feed_type + label{
  background: white;
  padding: 15px;
  color:green;
  border-radius: 20px;
  margin-left: 30px;
}
.feedback .feed_type + label:hover{
  cursor: pointer;
  background: lightgreen;
  color:green;
}

.feedback .feed_type:checked + label{
  background: green;
  padding: 15px;
  color:white;
  border-radius: 20px;


}

.feedback .feed_rate{
  display: none;

}
.feedback .feed_rate +label{
  font-size: 50px;
  color:white;
  margin: 0 20px;
  margin-left: 30px;
}

.feedback .feed_rate:checked +label{
    color:green;
}
.feedback .feed_rate:checked +label:hover{
    color:green;
}
.feedback .feed_rate + label:hover{
  cursor: pointer;
  color: lightgreen;
}

.feedback .msg{
  width:100%;
  height:70px;
  transition: height .3s ease-in-out ;
}
.feedback .msg:focus{
  height:100px;
}

.feedback h6,h5{
  margin-left: 10px;
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
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8">
          <form class="feedback" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <?php if($msg!=''): ?>
              <div class="alert <?php echo $msgClass; ?>"><h6><?php echo $msg; ?></h6></div>
            <?php endif; ?>
          <h5 style='color:white; border-bottom:1px solid white;' class='pb-1'>We would like your feedback to improve our website.</h5><br>
          <h6 style='color:white'>What is Your opinion of this page?</h6>

          <input type="radio" class='feed_rate' id='ex' name="feed_rate" value="excellent" checked required>
          <label for="ex"><i data-toggle='tooltip' title='Excellent' class="far fa-laugh-beam"></i></label>

          <input type="radio" class='feed_rate' id='verygood' name="feed_rate" value="very good" required>
          <label for="verygood"><i data-toggle='tooltip' title='Very Good' class="far fa-smile-beam"></i></label>

          <input type="radio" class='feed_rate' id='good' name="feed_rate" value="good" required>
          <label for="good"><i data-toggle='tooltip' title='Good' class="far fa-smile"></i></label>

          <input type="radio" class='feed_rate' id='poor' name="feed_rate" value="poor" required>
          <label for="poor"><i data-toggle='tooltip' title='Poor' class="far fa-frown"></i></label>

          <input type="radio" class='feed_rate' id='verybad' name="feed_rate" value="very bad" required>
          <label for="verybad"><i data-toggle="tooltip" title='Very Bad' class="far fa-angry"></i></label>
          <hr>
            <!-- end feed rate -->
            <!--  start feed type-->
            <h6 style='color:white'>Please select your feedback category below.</h6>
            <input type="radio" class='feed_type' id='sugge' name="feed_type" value="suggestion" checked required>
            <label for="sugge">Suggestion</label>

            <input type="radio" class='feed_type' id='wrong' name="feed_type" value="Something is not quit right" required>
            <label for="wrong">Something is not quit right</label>

            <input type="radio" class='feed_type' id='compl' name="feed_type" value="compliment" required>
            <label for="compl"></i>Compliment</label>
            <hr>
            <h6 style='color:white'>Please leave your feedback below.</h6>
            <textarea name="message" placeholder="write your feedback..."  class='msg'  required></textarea>
            <input type="submit" name="submit" value="submit" class='btn btn-success'>
          </form>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php include('footer.php') ?>
