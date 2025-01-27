<?php
session_start();
$_SESSION['name1']="";
$_SESSION['pswd3']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="select * from `staff` where `username`='".$_POST["staff-username"]."' AND `password`='".$_POST["staff-password"]."'";
$res=mysqli_query($con,$sql) or die ("cannot execute query");
$que=mysqli_fetch_row($res);
$_SESSION['name1']=$_POST["staff-username"];
$_SESSION['pswd3']=$_POST["staff-password"];
if($que)
{
	header("LOCATION:staffhome.html");
}
else
{
    // <script> window("invalid login:")</script>
	header("LOCATION:adminerror.php");
}



?>