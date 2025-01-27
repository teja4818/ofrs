<?php
session_start();
$_SESSION['name1']="";
$_SESSION['pswd1']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="select * from `adminlogin` where `username`='".$_POST["admin-username"]."' AND `password`='".$_POST["admin-password"]."'";
$res=mysqli_query($con,$sql) or die ("cannot execute query");
$que=mysqli_fetch_row($res);
$_SESSION['name1']=$_POST["admin-username"];
$_SESSION['pswd1']=$_POST["admin-password"];
if($que)
{
	header("LOCATION:adminhome.php");
}
else
{
    // <script> window("invalid login:")</script>
	header("LOCATION:adminerror.php");
}



?>