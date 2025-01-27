<?php
session_start();
$_SESSION['assign']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="select * from `staff`";
$res=mysqli_query($con,$sql) or die("query failed");
$_SESSION['assign']=$_GET['assign'];
?>
<html>
	<head>
	<style type="text/css">
		*
		{
			list-style:none;
			text-decoration:none;
		}
	body{background-image:url('opening-page/ad3.png');
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
	table,th,tr
	{
		color:white;
		border-radius: 20px;
	}
	a
	{
		padding:8px 10px;
		background-color:crimson;
		border-radius:10px;
		color:white;
	}
	</style>
	</head>
	<body>
		
			<h3 align="center">STAFF DETAILS</h3>
			<table style="background-color:black;" align="center" cellspacing="50">
			<thead>
			<tr>
			<th style="font-size:18px;">STAFF-NAME</th>
			<th style="font-size:18px;">STATUS</th>
			<th></th>
			</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($res))
			{
				echo '<tr>
					<td>'.$row['username'].'</td>
					<td>'.$row['status'].'</td>';
					if($row['status']=="available")
					{
						echo '<td><a href="assign1.php?assign1='.$row['username'].'">Assign</a></td>';
					}
					echo '</tr>';
			}
			?>
	</tbody>
	</table><br>
	<center>
	<form method="POST" action="adminhome.php">
			<input type="submit" value="OK" name="OK"/></form>
			</center>
	</body>
	</html>
