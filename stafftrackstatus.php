<?php
session_start();
// $stfusr=$_POST["staff-username"];
// $suf1=$_SESSION['name9'];
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="SELECT * FROM `reportcases` where status='available' and team!='not allocated'";
//where status='available'.
//'team'='" .$stfusr."'
$res=mysqli_query($con,$sql) or die("query failed");


?>
<html>
	<head>
	<style type="text/css">
		*
		{
			text-decoration: none;
			list-style:none;
		}
	body{background-color:powderblue;
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
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
		
			<h3 align="center" style="background-color:grey;">Tracking Status</h3>
			<table style="background-color:beige;border-radius:30px;" align="center" cellspacing="40">
			<thead>
			<tr style="border:1p solid black;">
			<th style="font-size:18px;">NAME</th>
			<th style="font-size:18px;">MOBILENUMBER</th>
			<th style="font-size:18px;">EMAILID</th>
			<th style="font-size:18px;">LOCATION</th>
            <th style="font-size:18px;">MESSAGE</th>
			<th style="font-size:18px;">STATUS</th>
			<th style="font-size:18px;">TEAM</th>
			<!-- <th style="font-size:18px;">name</th> -->
			<!-- <th></th> -->
			</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($res))
			{
				echo '<tr>
					<td>'.$row['Name'].'</td>
					<td>'.$row['mobilenumber'].'</td>
					<td>'.$row['Emailid'].'</td>
					<td>'.$row['location'].'</td>
					<td>'.$row['message'].'</td>
					<td>'.$row['status'].'</td>
                    <td>'.$row['team'].'</td>';
					if($row['status']=="available")
					{
						echo '<td><a href="closed.php?assign='.$row['Name'].'">CLOSE</a></td>';
					}
					
					echo '</tr>';
			}
			?>
	</tbody>
	</table><br>
	<center>
	<form method="POST" action="staffhome.html">
			<input type="submit" value="OK" name="OK"/></form>
			</center>
	</body>
	</html>
	
					