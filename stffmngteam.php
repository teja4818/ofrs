<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
<?php
session_start();
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$status="SELECT * FROM staff where status='available' ";
$res=mysqli_query($con,$status) or die("query failed");

?>
<html>
	<head>
	<style type="text/css">
	body{background-color:powderblue;
	background-size:1550px 800px;}
	.l{top:1000px;left:100px;width:300px;height:300px;}
	</style>
	</head>
	<body>
		
			<h3 align="center" style="background-color:grey;">Team Status</h3>
			<table style="background-color:beige;" align="center" cellspacing="40">
			<thead>
			<tr style="border:1p solid black;">
			<th style="font-size:18px;">USER_NAME</th>
			<!-- <th style="font-size:18px;">STAFF_LEAD</th>
			<th style="font-size:18px;">STAFF_MEM</th>
			<th style="font-size:18px;">PASSWORD</th> -->
            <th style="font-size:18px;">STATUS</th>
			</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($res))
			{
				echo '<tr>
					<td>'.$row['username'].'</td>
					
					
					<td>'.$row['status'].'</td>';
			// 		if($row['status']=="available")
			// 		{
			// 			echo '<td><a href="closed.php?assign='.$row['Name'].'">CLOSED</a></td>';
			// 		}
					
			// 		echo '</tr>';
            // <td>'.$row['dept-lead'].'</td>
			// 		<td>'.$row['dept-members'].'</td>
			// 		<td>'.$row['password'].'</td>
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
	