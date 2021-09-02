<?php
session_start();
include('db.php');
$usr=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM users WHERE uname='$usr' AND pass='$pass'";
$run=mysqli_query($con,$sql);
$q=mysqli_num_rows($run);
if ($q>0) {
  while ($row=mysqli_fetch_assoc($run)) {
   $_SESSION['uname']=$row['uname'];
  ?>
  <script type="text/javascript">
    window.location='dashboard.php';
  </script>
  <?php
  }
}else {

  echo"<div class='alert alert-danger' role='alert'>
  please fill the correct information.
</div>";
}
?>
