<?php
session_start();
$_SESSION['assign1']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$con1=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");

$sql="UPDATE `staff` SET `status` ='assigned' WHERE `username`='".$_GET['assign1']."' ";
$res=mysqli_query($con,$sql)or die("query failed");

$sql1="UPDATE `reportcases` SET `team` ='".$_GET['assign1']."' WHERE `Name`='".$_SESSION['assign']."'";
//Name=$_SESSION['assign'];
$res1=mysqli_query($con1,$sql1)or die("query1 failed");
$_SESSION['assign1']=$_GET['assign1'];


?>
<html>
	<head>
	<style type="text/css">
	body{background-image:url('opening-page/ad3.png');
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
	h2
	{
		align-items:center;
		background-color:black;
		width:50%;
		height:10vh;
		color:white;
		letter-spacing: 2px;
		border-radius: 10px;
		
	}
	i
	{
		color:red;
		
	}
	</style>
	</head>
	<body>
		
		<class="l">
		<center>
		
<?php
		echo "<h2><span>
		Staff team";
		// echo "\n";
		echo "<i>&nbsp;&nbsp;".$_GET["assign1"]."</i>";
		echo " has been assigned to the Report: ";
		echo "<i>".$_SESSION["assign"]."</i></h2>";
?>
<br>
<form method="POST" action="adminhome.php">
			<input type="submit" value="OK" name="OK"/></form>
			</center>
</body>
</html>