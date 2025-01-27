<?php
session_start();

$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$con1=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");

$sql="UPDATE `staff` SET `status` ='available' WHERE `username`='".$_SESSION['name1']."'";
$res=mysqli_query($con,$sql)or die("query failed");

$sql1="UPDATE `reportcases` SET `status` ='closed' WHERE `team`='".$_SESSION['assign1']."'";
$res1=mysqli_query($con1,$sql1)or die("query1 failed");
$sql2="UPDATE `reportcases` SET `team` ='none' WHERE `team`='".$_SESSION['assign1']."'";
$res2=mysqli_query($con1,$sql1)or die("query1 failed");



?>
<html>
	<head>
	<style type="text/css">
	body{background-image:url("fg.jpg");
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
	</style>
	</head>
	<body>
		
		<class="l">
		<center>
		
<?php
		echo "<h2>REPORT.\n";
		echo "\r\n<i>".$_SESSION["assign"]."</i>";
		echo " has been CLOSED  By : ";
		echo "<i>".$_SESSION["assign1"]."</i></h2>";
?>
<br>
<form method="POST" action="staffhome.html">
			<input type="submit" value="OK" name="OK"/></form>
			</center>
</body>
</html>