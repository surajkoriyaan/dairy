<?php
session_start();
if (isset($_SESSION['uname'])) {
  session_unset();
  session_destroy();
  ?>
  <script type="text/javascript">
    window.location='login.php';
  </script>
  <?php
}
?>
