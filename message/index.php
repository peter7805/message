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
  </style>

  <title>Peter_Huang Message Board</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div>
        <span class="navbar-brand">Welcome to Peter_Huang Message Board，
          <?php
          session_start();
          if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
          } else {
            echo 'Guest';
          }
          if (isset($_SESSION['id'])) {
            $memberId = $_SESSION['id'];
          } else {
            $memberId = NULL;
          }
          ?>
        </span>
      </div>

      <div class="align-right">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <?php
            if (!isset($_SESSION['username'])) {
              echo '<a href="login.php">Sign in</a>';
              echo '<li class="ml-3"><a href="signup.php">Sign up</a></li>';
            } else {
              echo '<a href="logout_api.php">Sign out</a>';
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div>
      <h1 class="text-center mt-4">Peter Huang Message Board</h1>
    </div>
    <div>
      <div class="message">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">姓名</th>
              <th scope="col">留言內容</th>
              <th scope="col">創建時間</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody id="showmsg">
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <?php
    if (isset($_SESSION['username'])) {
      echo '<div class="p-3 p-md-5 ">
              <div>
                  <h1 class="display-4">input your message here</h1>
                  <div class="form-group">
                      <textarea class="form-control" style="width:100%" rows="7" id="Msg"></textarea>
                  </div>
              </div>
              <button class="btn btn-lg  btn-default btn-block" type="button" id="addMsg" style="background-color: white;width:50%;margin:auto;">送出</button>
            </div>';
    }
    ?>
  </div>
</body>
<script>
  $(document).ready(function() {
    var uname = "<?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : ''); ?>";
    $.ajax({
      type: "GET",
      url: "select_message_api.php",
      dataType: "json",
      success: function(res) {
        var id = "<?php echo $_SESSION['id'] ?>";
        for (i = 0; i < res.length; i++) {
          if (id == res[i].memberId) {
            $("$showmsg").append(
              `<tr><th scope = "row">${res[i].id}</th><td>${res[i].name}</td><td>${res[i].content}</td><td>${res[i].creat_time}</td>
              <td>
              <button type="button" class="btn btn-info" id="updateMsg" data-id ="${res[i].id}">修改</button>
              <button type="button" class="btn btn-danger" id="delMsg" onclick="del(${res[i].id})">刪除</button>
              </td></tr>`
            );
          } else {
            $("$showmsg").append(
              `<tr><th scope = "row">${res[i].id}</th><td>${res[i].name}</td><td>${res[i].content}</td>td>${res[i].creat_time}</td><td></td></tr>`
            );
          }
        }
      },
    });
    //新增留言
    $("#addMsg").click(function() {
      if ($("#Msg").val() != "") {
        $.ajax({
          type: "POST",
          url: "creat_message_api.php",
          data: {
            message: $("#Msg").val()
          },
          success: function(res) {
            if (res == 'true') {
              alert('您的留言已經送出');
              // window.location.href = "index.php";
              location.reload();
            }
          },
          error: function() {
            alert('新增留言失敗');
          }
        });
      } else {
        alert('留言內容不得為空');
      }
    });
    //刪除留言
    function del(e) {
      $.ajax({
        type: "POST", //傳送方式
        url: "del_message_api.php", //傳送目的地
        data: {
          id: e
        },
        success: function(res) {
          location.reload();
        },
        error: function(error) {
          alert('刪除資料失敗');
        }
      });
    }
  });
</script>

</html>