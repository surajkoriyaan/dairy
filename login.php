<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Login Form</title>
    <style media="screen">
      body{
        background-image: url('pexels.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
         text-align: center;
      }
      .formdiv{
         margin-top: 10%;
      }
      .formdiv h1{

           text-align: center;
      }
      .formdiv span{
        text-align: center;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 formdiv">
          <h1>Secret Diary</h1>
          <h6>Store your thoughts permamently and securely</h6>
          <p style="text-align:center">Log in using your username and password </p>
   <p id="abc"></p>
          <form class="" action="index.html" method="post">
            <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">@</span>
    <input type="text" class="form-control" placeholder="Username" id="username" aria-label="Username" aria-describedby="addon-wrapping">
  </div>
  <div class="input-group flex-nowrap" style="margin-top:10px;">
<span class="input-group-text" id="addon-wrapping">@</span>
<input type="password" class="form-control" placeholder="Password" id="password" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<center>
<div class="form-check" style="margin-top:10px;">
  <input  type="checkbox" value="">
  <label class="form-check-label" for="flexCheckDefault">
    Stay logged in
  </label>
</div>
</center>
<center>
<button type="button" class="btn btn-success" onclick="fun();" style="margin-top:10px;">Sign in</button>
</center>
<center>
<a href="registration.php" style="margin-top:20px;">Sign Up</a>
</center>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
     function fun(){
       username=$('#username').val();
        password=$('#password').val();
        $.ajax({
 					type:'POST',
 					url:'login_action.php',
 					data:{username:username,password:password},
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
