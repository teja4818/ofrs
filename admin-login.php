<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Glassmorphism Login Form with HTML & CSS</title>
    <link rel="stylesheet" type="text/css" href="./css-files/stylegml.css">
  </head>
  <body>
    <div id="container">
      <div class="box">
        <div class="form-box">
          <div class="ic-account"></div>
          <div class="ic-account1"><a href="index.html"><img src="./opening-page/c.png" width="40px" height="40px"></a></div>
          <form name="login-form" action="adminlogin1.php" method="post">
            <input class="login-form-input" type="text" name="admin-username" placeholder="User-name" required>
            <input class="login-form-input" type="password" name="admin-password" placeholder="Password" required>
            <button class="login-form-btn" type="submit">Login</button>
            <!-- <p class="text"><a href="forgot-password.html">Forgot password?</a> or <a href="register.php">Sign up</a></p> -->
          </form>
        </div>
        <div class="circle-01"></div>
        <div class="circle-02"></div>
      </div>
    </div>
  </body>
</html>
