<?php
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="select * from `reportcases`";
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
	body{background-image:url('opening-page/ad3.png');
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
	table,th,tr{
		
		color:white;
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
		
			<h3 align="center">REPORTS</h3>
			<table style="background-color:black;
			border-radius: 40px;" align="center" cellspacing="40">
			<thead>
			<tr>
			<th style="font-size:18px;text-align:center;">NAME</th>
			<th style="font-size:18px;text-align:center;">MOBILENUMBER</th>
			<th style="font-size:18px;text-align:center;">EMAIL-ID</th>
			<th style="font-size:18px;text-align:center;">LOCATION</th>
            <th style="font-size:18px;text-align:center;">MESSAGE</th>
			<th style="font-size:18px;text-align:center;">STATUS</th>
			<th style="font-size:18px;text-align:center;">TEAM</th>
			<th style="font-size:18px;text-align:center;">Assign</th>
			
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
					if($row['team']=="not allocated")
					// if($row['status']=="avaliable")
					{
						echo '<td><a href="assigndept.php?assign='.$row['Name'].'">Assign</a></td>';
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
	
					