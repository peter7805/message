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

  <title>會員登入</title>
</head>

<body>
  <div class="login_box mt-3 p-5">
    <h2 class="text-center">會員登入</h2>
    <form>
      <div class="form-group">
        <label for="username">Eamil：</label>
        <input type="text" class="form-control" id="username" placeholder="you@example.com">
      </div>
      <div class="form-group">
        <label for="password">Password：</label>
        <input type="password" maxlength="16" class="form-control" id="password" placeholder="請輸入密碼">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg m-3" id="btnok">登入</button>
        <button type="reset" class="btn btn-secondary btn-lg m-3" id="cancel">取消</button>
      </div>
    </form>
  </div>
</body>
<script>
$(function() {
  $("#btnok").click(function() {

  });
});
</script>

</html>