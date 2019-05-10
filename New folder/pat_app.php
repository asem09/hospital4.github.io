<?php include('database.php'); ?>

<?php
session_start();
$pat_id=$_SESSION['pat_id'];
$name='';
$email='';
$msg='';
$msgClass='';

//display the name and email with the session id;
$query="SELECT * FROM patients WHERE pat_id='$pat_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
mysqli_free_result($result);
if($row){
  //found;
  $name=$row['name'];
  $email=$row['email'];

}




// if (isset($_SESSION['doc_name']) && ($_SESSION['app_date']) && ($_SESSION['category']) ) {
//     $doc_name=$_SESSION['doc_name'];
//     $app_date=$_SESSION['app_date'];
//     $category=$_SESSION['category'];
//      unset($_SESSION['doc_name']);
//      unset($_SESSION['app_date']);
//      unset($_SESSION['category']);
//      header('location:pat_page.php');
//
// }

//check form for time
if(isset($_POST['check'])){
  $doc_name=mysqli_real_escape_string($conn,$_POST['doc_name']);
  $app_date=mysqli_real_escape_string($conn,$_POST['app_date']);
  $category=mysqli_real_escape_string($conn,$_POST['category']);

  $_SESSION['doc_name']=$doc_name;
  $_SESSION['app_date']=$app_date;
  $_SESSION['category']=$category;

    $two_query="SELECT * FROM appoitment WHERE doc_name='$doc_name' AND timing='2:00 pm ' AND app_date='$app_date' ";
    $three_query="SELECT * FROM appoitment WHERE doc_name='$doc_name' AND timing='3:00 pm ' AND app_date='$app_date' ";
    $four_query="SELECT * FROM appoitment WHERE doc_name='$doc_name' AND timing='4:00 pm ' AND app_date='$app_date' ";
    $five_query="SELECT * FROM appoitment WHERE doc_name='$doc_name' AND timing='5:00 pm ' AND app_date='$app_date' ";

      if($two_query){
        $result=mysqli_query($conn,$two_query);
        $two=mysqli_num_rows($result);
      }
       if($three_query){
        $result=mysqli_query($conn,$three_query);
        $three=mysqli_num_rows($result);
      }

      if($four_query){
       $result=mysqli_query($conn,$four_query);
       $four=mysqli_num_rows($result);
     }
     if($five_query){
      $result=mysqli_query($conn,$five_query);
      $five=mysqli_num_rows($result);

   }

 }

 if (isset($_SESSION['msg']) && ($_SESSION['msgClass']) ) {
  $msg = $_SESSION['msg'];
  $msgClass = $_SESSION['msgClass'];
  unset($_SESSION['msg']);
  unset($_SESSION['msgClass']);
}
//insert in appointment table

if(isset($_POST['submit'])){
  $pat_id=$_SESSION['pat_id'];
  $pat_name=mysqli_real_escape_string($conn,$name);
  $timing=mysqli_real_escape_string($conn,$_POST['timing']);
  // already stored in sessions!
  $doc_name=$_SESSION['doc_name'];
  $app_date=$_SESSION['app_date'];
  $category=$_SESSION['category'];

  $query="INSERT INTO appoitment (pat_id,name,category,doc_name,app_date,timing) VALUES ('$pat_id','$pat_name','$category','$doc_name','$app_date','$timing')";
  $result=mysqli_query($conn,$query);
  if($result){
    $_SESSION['msg']='Your Appointment has been Successfully placed.';
    $_SESSION['msgClass']='alert-success';
    header('location:pat_page.php');

  }else{
    echo 'not inserted<br>'.mysqli_error($conn);

  }

}




 ?>
