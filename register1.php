<?php
session_start();
$_SESSION['name1']="";
$_SESSION['pswd1']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="INSERT INTO `user_form`
VALUES ('".$_POST["register-fn"]."', '".$_POST["register-dob"]."', '".$_POST["register-email"]."', '".$_POST["register-pn"]."','".$_POST["register-pwd"]."')";
$res=mysqli_query($con,$sql) or die ("cannot execute query");

$_SESSION['name1']=$_POST["register-fn"];
$_SESSION['pswd1']=$_POST["register-pwd"];
if($res){
        echo "<script>alert('Registered succesfully');</script>";
        echo "<script>window.location.href ='user-login.html'</script>";
        } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
        echo "<script>window.location.href ='register.php'</script>";
        }
?>
<html>
<body>
<a href="user-login.html">LOGIN</a>
</body>
</html>
