<?php
session_start();
$_SESSION['name1']="";
$_SESSION['pswd2']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="select * from `user_form` where `Name`='".$_POST["username"]."' AND `password`='".$_POST["password"]."'";
$res=mysqli_query($con,$sql) or die ("cannot execute query");
$que=mysqli_fetch_row($res);
$_SESSION['name1']=$_POST["username"];
$_SESSION['pswd2']=$_POST["password"];
if($que)
{
	header("LOCATION:userhome.html");
}
else
{
    // <script> window("invalid login:")</script>
	header("LOCATION:adminerror.php");
}



?>