<?php

$conn=mysqli_connect('localhost','root','','hospital');
if(mysqli_connect_error($conn)){
  echo 'ERROR'.mysqli_errno($conn);
}

 ?>
