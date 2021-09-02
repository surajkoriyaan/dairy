<?php
include('db.php');
$usr=$_POST['username'];
$pass=$_POST['password'];
if (!$usr=="" && !$pass=="") {
  $sql="INSERT INTO users(uname,pass) VALUES('$usr','$pass')";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    echo"<div class='alert alert-primary' role='alert'>
    Registration Successfully!
  </div>";
  }else {
    echo"<div class='alert alert-primary' role='alert'>
    Registration not Successfully!
  </div>";
  }
}else {
  echo"<div class='alert alert-danger' role='alert'>
  please fill all the details.
</div>";
}
?>
