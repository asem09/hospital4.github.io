<?php include('database.php'); ?>

<?php
$msgClass='';
$msg='';

session_start();
if(isset($_POST['login'])){
  $pat_id=mysqli_real_escape_string($conn,$_POST['pat_id']);
  $password=mysqli_real_escape_string($conn,$_POST['pat_password']);
  $query="SELECT * FROM patients WHERE pat_id='$pat_id' AND password='$password'";

  $result=mysqli_query($conn,$query);
  $rows=mysqli_num_rows($result);
  if($rows){
    $_SESSION['pat_id']=$pat_id;
    header ('Location:pat_page.php');

  }else{
    $msg='Invaild User id or Password!';
    $msgClass='alert-danger';
  }
}


 ?>
