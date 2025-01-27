

<!-- // @include 'config.php'

// if(isset($_POST['submit'])){
//     b
// }


//  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- <link rel="stylesheet" href="css-files/registration-style.css"> -->
    <link rel="stylesheet" type="text/css" href="./css-files/stylegml.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;700&family=Fira+Sans:wght@500&family=Kanit:ital,wght@0,300;1,100;1,200&display=swap" rel="stylesheet">
    <title>user-login</title>
</head>
<body>
    <div id="container">
        <div class="box">
          <div class="form-box">
            <div class="ic-account"></div>
            <div class="ic-account1"><a href="user-login.html"><img src="./opening-page/c.png" width="30px" height="30px"></a></div>
                <form class="login-form" method="post" action="register1.php">
                      <span>Full NAME:</span>  <input type="text" class="login-form-input" name="register-fn" placeholder="enter fullname" required>
                      <span>Date-Of-Birth:</span> <input type="date"class="login-form-input" name="register-dob" placeholder="enter password" required>
                      <span>Email-Id:</span> <input type="email" class="login-form-input" name="register-email" placeholder="ofrs123@gmail.com" required>
                      <span>phone-number:</span> <input type="tel" class="login-form-input" name="register-pn" placeholder="enter phonenumber." required>
                      <span>password:</span> <input type="password" class="login-form-input" name="register-pwd" placeholder="enter password" required>
                      <!-- <span>:</span> <input type="email" class="btn" name="register" placeholder="enter password" required> -->
                      <input type="submit" name="submit" class="login-form-btn" value="submit">
                      <!-- <input type="submit" name="submit" class="login-form-btn" value="submit"> -->
                </form>
            </div>
            <div class="circle-01"></div>
            <div class="circle-02"></div>
            
        </div>
    </div>
    
</body>
</html>