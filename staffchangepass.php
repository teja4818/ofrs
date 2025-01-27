

<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
<style>
    body
    {
            background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)), url('./opening-page/lock.png');
            background-attachment: fixed;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
    }
    h3{
      color:black;
      font-size: 30px;
    }
    p
    {

      color:black;
      
       font-size: 25px;

    }
    p  span
    {
            color:black;
            background-color:crimson;
            padding: 8px 12px;
            border-radius: 10px;
            position: absolute;
            top: 55px;
            left: 40px;
    }
    form{
        background-color: rgba(176, 224, 230, 0.532);
        width: 500px;
        height: 500px;
        border-radius: 30px;
        position: relative;
        left: 500px;
        top: 80px;
    }
    input{
      padding: 12px 20px;
      border-radius: 10px;
    }

   </style>
</head>
<body>
<!-- <div><?php if(isset($message)) { echo $message; } ?></div> -->
<form method="post" action="staffchangepass1.php" align="center">
<h3 align="center">CHANGE PASSWORD</h3>
<p>Current Password:</P>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
<p>New Password:</p>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
<p>Confirm Password:</p>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
<div class="back">
        <p class="bk"><a href="staffhome.html"><span>Back</span></a></p>
</div>
</form>
<br>
<br>
</body>
</html>