<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      width: 75%;
      margin: 0px auto;
      border: solid;
      border-radius: 8px;
    }
  </style>

  <title>會員註冊</title>
</head>

<body>
  <div class="login_box mt-3 p-5">
    <h2 class="text-center">會員註冊</h2>
    <form>
      <div class="form-group">
        <label for="username">姓名：</label>
        <input type="text" class="form-control" id="username" placeholder="請輸入姓名">
      </div>
      <div class="form-group">
        <label for="email">Email：</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
      </div>
      <div class="form-group">
        <label for="password">Password：</label>
        <input type="password" maxlength="12" class="form-control" id="password" placeholder="8~12位含英文及數字">
      </div>
      <div class="form-group">
        <label for="repassword">二次確認Password：</label>
        <input type="password" maxlength="12" class="form-control" id="repassword" placeholder="請再次輸入密碼">
      </div>

      <div class="text-center">
        <button type="button" class="btn btn-primary btn-lg m-3" id="btnok">註冊</button>
        <button type="button" class="btn btn-secondary btn-lg m-3" id="cancel">取消</button>
      </div>
    </form>
  </div>
</body>
<script>
  $(document).ready(function() {
    $("#btnok").click(function() {
      var checkEmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
      var checkPwd = /^[a-zA-Z0-9]{8,12}$/;
      var username = $("#username").val();
      var email = $("#email").val();
      var pwd = $("#password").val();
      var repwd = $("#repassword").val();
      if (
        username != "" &&
        checkEmail.test(email) &&
        checkPwd.test(pwd) &&
        pwd == repwd
      ) {
        $.ajax({
          type: "POST",
          url: "signup_api.php",
          data: {
            username: username,
            email: email,
            password: pwd,
          },
          // async: false,
          success: function(res) {
            if (res == 'false') {
              alert('該email已經被註冊，請重新輸入email');
              return false;
            } else if (res == 'true') {
              alert('註冊成功，請登入會員');
              window.location.href = "login.php";
            }
          },
          error: function(res) {
            alert("註冊失敗");
            console.log(res);
          }
        });
      } else {
        if (username == "") {
          alert('姓名不得為空');
          return false;
        } else if (!checkEmail.test(email)) {
          alert('email輸入格式錯誤');
          return false;
        } else if (!checkPwd.test(pwd)) {
          alert('password輸入格式錯誤');
          return false;
        } else if (password != pwd) {
          alert('密碼不一致');
          return false;
        }
      }

    });
    $("#cancel").click(function() {
      window.location.href = "index.php";
    });
  });
</script>

</html>