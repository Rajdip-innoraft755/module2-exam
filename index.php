<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOCAL-NOTEPAD-APP.COM</title>
  <link rel="stylesheet" href="/css/style.css">
  <meta name="theme-color" content="#fa4299">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">USER LOGIN</div>
    </div>
    <div class="form-container">
      <div class="form-inner">
        <form action="action.php" method="POST" class="login">
          <div>
            <span class="error">
              <?php ?>
            </span>
          </div>
          <div class="field" id="userId">
            <input type="text" placeholder="User ID" name="userId" required>
            <span class="error"></span>
          </div>
          <div class="field" id="password">
            <input type="password" placeholder="Password" id="pass" name="password" required>
            <span class="error"></span>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input id="login-btn" type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/login.js"></script>
</body>

</html>