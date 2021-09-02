<?php
session_start();
$uname=$_SESSION['uname'];
include('db.php');
$sql="SELECT * FROM dairy WHERE uname='$uname'";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    echo $row['cooment'];
  }
}
?>
