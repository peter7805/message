<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <style>
    body {
      height: 100%;
    }

    .login_box {
      width: 50%;
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
        <label for="email">Eamil：</label>
        <input type="text" class="form-control" id="email" placeholder="you@example.com">
      </div>
      <div class="form-group">
        <label for="password">Password：</label>
        <input type="password" maxlength="12" class="form-control" id="password" placeholder="8~12位含大小寫英文及數字">
      </div>
      <div class="text-center">
        <button type="button" class="btn btn-primary btn-lg m-3" id="btnok" style="width: 35%;">登入</button>
        <button type="button" class="btn btn-secondary btn-lg m-3" id="cancel" style="width: 35%;">取消</button>
      </div>
    </form>
  </div>
</body>
<script>
  $(document).ready(function() {
    $("#btnok").click(function() {
      var checkEmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
      var checkPwd = /^[a-zA-Z0-9]{8,12}$/;
      var email = $("#email").val();
      var pwd = $("#password").val();
      if (
        checkEmail.test(email) &&
        checkPwd.test(pwd)
      ) {
        $.ajax({
          type: "POST",
          url: "login_api.php",
          data: {
            email: email,
            password: pwd,
          },
          async: false,
          success: function(res) {
            if (res == 'account_false') {
              alert('無此使用者');
              $("#password").val("");
            } else if (res == 'pwd_false') {
              alert('密碼錯誤請確認');
              $("#password").val("");
            } else if (res == 'true') {
              alert('登入成功');
              window.location.href = "index.php";
            }
          },
          error: function(res) {
            alert("登入失敗");
          }
        });
      } else {
        if (!checkEmail.test(email)) {
          alert('email輸入格式錯誤');
          $("#password").val("");
        } else if (!checkPwd.test(pwd)) {
          alert('password輸入格式錯誤');
          $("#password").val("");
        }
      }
    });
    $("#cancel").click(function() {
      window.location.href = "index.php";
    });
  });
</script>

</html>