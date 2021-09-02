<?php
session_start();
include('db.php');
$uname=$_SESSION['uname'];
$cm=$_POST['cm'];
$sql="SELECT * FROM dairy WHERE uname='$uname'";
$run=mysqli_query($con,$sql);
$qq=mysqli_num_rows($run);
if ($qq > 0) {
  $sql3="UPDATE dairy SET cooment='$cm' WHERE uname='$uname'";
  $query2=mysqli_query($con,$sql3);
}else {
  $sql2="INSERT INTO dairy(uname,cooment) VALUES('$uname','$cm')";
  $query=mysqli_query($con,$sql2);
}
?>
