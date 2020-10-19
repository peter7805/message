<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <style>
  body {
    height: 100%;
  }

  .login_box {
    width: 75%;
    margin: 0px auto;
    border: solid;
    border-radius: 8px;
  }
  </style>

  <title>Peter_Huang Message Board</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div>
        <span class="navbar-brand">Welcome to Peter_Huang Message Board，
          <?php session_start();
              if (isset($_SESSION['name'])){
                echo $_SESSION['name'];
              }else{
                echo 'Guest';
              }
              if (isset($_SESSION['id'])){
                $memberId = $_SESSION['id'];
              }else{
                $memberId = NULL;
              }
            ?>
        </span>
      </div>

      <div class="align-right">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <?php
              if (!isset($_SESSION['name'])){
                echo '<a href="login.php">Sign in</a>';
              }else{
                echo '<a href="logout.php">Sign out</a>';
              }  
            ?>
          </li>
          <li><a href="register.php">Sign up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

  </div>
</body>
<script>
$(function() {
  $("#btnok").click(function() {

  });
});
</script>

</html>0