<?php include('database.php') ?>

<?php

if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($conn,$_POST['pat_name']);
  $pat_id=mysqli_real_escape_string($conn,$_POST['pat_id']);
  $email=mysqli_real_escape_string($conn,$_POST['pat_email']);
  $password=mysqli_real_escape_string($conn,$_POST['pat_password']);
  $phone=mysqli_real_escape_string($conn,$_POST['pat_num']);
  $gender=mysqli_real_escape_string($conn,$_POST['pat_gender']);

  $query="INSERT INTO patients (name,pat_id,email,password,phone,gender) VALUES ('$name','$pat_id','$email','$password','$phone','$gender')";
  $result=mysqli_query($conn,$query);
  if($result){
    header('Location:index.php');
  }else{
    echo 'not inserted'.mysqli_error($conn);
  }
}


 ?>
