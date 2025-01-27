



<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
<style>
    body
    {
            background:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.7)), url('./opening-page/lock.png');
            background-attachment: fixed;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
    }
    p
    {

      color:black;
      
       font-size: 22px;
       font: weight 500px;

    }
    h3{
        font-size: 30px;
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
        top: 100px;
    }
    input{
      padding: 12px 20px;
      border-radius: 10px;
    }


    </style>

</head>
<body>
<!-- <h3 align="center">CHANGE PASSWORD</h3> -->
<!-- <div><?php if(isset($message)) { echo $message; } ?></div> -->
<form method="post" action="fp1.php" align="center">
        <h3 align="center">CHANGE PASSWORD</h3>
<p>User-Name:</p>
<input type="text" name="checkuser"><span id="currentPassword" class="required"></span>
<br>
<p>New Password:</p>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
<p>Confirm Password:</p>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
<div class="back">
        <p class="bk"><a href="user-login.html"><span>Back</span></a></p>
</div>
</form>
<!-- <div class="back">
                <p class="bk"><a href="user-login.html"><span>Back</span></a></p>
        </div> -->
<br>
<br>
</body>
</html>
