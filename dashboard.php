
<?php
session_start();
if (!isset($_SESSION['uname'])) {
?>
<script type="text/javascript">
  window.location='login.php';
</script>
<?php
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>dashboard</title>
    <style media="screen">
    body{
      background-image: url('pexels.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      color: #fff;
       text-align: center;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Secret Dairy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>
      <form class="d-flex">
        <a href="logout.php" class="btn btn-outline-success">logout</a>

      </form>
    </div>
  </div>
</nav>
        </div>

        <div class="col-md-12" style="margin-top:10px">
          <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="comment" onkeyup="fun();" style="height: 500px">
  </textarea>

</div>
<p id="abc"></p>
        </div>
      </div>
    </div>
<script type="text/javascript">
function onload(){
  $.ajax({
    type:'POST',
    url:'fetch_action.php',
         success: function(data)
              {
             $("#comment").html(data);
        }
  });
}
onload();
function fun(){
  cm=$('#comment').val();
  $.ajax({
    type:'POST',
    url:'dash_action.php',
    data:{cm:cm},
         success: function(data)
              {
             $("#abc").html(data);
        }
  });
}

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
