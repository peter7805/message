<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <style>
    body {
      height: 100%;
    }

    .login_box {
      width: 50%;
      margin: 0px auto;
      border: solid;
    }
  </style>

  <title>留言板登入</title>
</head>

<body>
  <div class="login_box mt-3">
    <table style="width: 100%;height:100%;">
      <tr>
        <td align="center">
          <table align="center" width=350 height=230; class="index_table">
            <form method="POST" action="" name="Login">
              <tr align="center" style="font-size:25px;">
                <td colspan="2" style="font-size:35px;">留言板登入</td>
              </tr>
              <tr>
                <td align="center" style="font-size:25px;">使用者名稱</td>
                <td><input type="name" maxlength="16" name="uid" placeholder="請輸入帳號" style="width:180px;font-size:20px;border-radius: 3px; "></td>
              </tr>
              <tr>
                <td align="center" style="font-size:25px;">密 碼</td>
                <td><input name="password" type="password" maxlength="16" placeholder="請輸入密碼" style="width:180px;font-size:20px;border-radius: 3px; "></td>
              </tr>
              <tr align="center">
                <td colspan="2">
                  <input type="submit" name="login" value="登入" class="btn btn-primary">
                  <input type="reset" name="reset" value="取消" class="btn btn-secondary">
                  <input type="button" name="register" value="註冊" onclick="window.location.href='register.php'" class="btn btn-info" />
                </td>
              </tr>
            </form>
          </table>
        </td>
      </tr>
    </table>
  </div>

  <form>
</body>

</html>