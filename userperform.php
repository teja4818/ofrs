<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url('./opening-page/ad.jpg');
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        table{
            background-color: rgb(222, 184, 135);
           
            color:black;
            width: 400px;
            height: 150px;
            font-size: 18px;
            border-radius:8px;
            position: relative;
            top: 200px;
            left: 550px;
            text-align: center;
           
        }
        th,td
        {
            border: 1px solid black;
            border-radius:8px;
            padding: 20px;
        }
        </style>
</head>
<body>
    <?php
    session_start();
    $val=$_SESSION['name1'];
    
                    $con=mysqli_connect("localhost","root","","ofrs");
                    
                    if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql="SELECT username FROM reportcases where username='".$val."'";

                    if ($result=mysqli_query($con,$sql))
                    {
                    
                    $rowcount=mysqli_num_rows($result);
                    echo "<table >";
                    echo "<tr><th>Name</th><th>Count</th><th>Percentage.</th></tr>";
                    echo "<tr><td>'".$val."'</td><td>'".$rowcount."'</td><td>$rowcount%</td></tr>";
                    echo "</table>";
                    
                    mysqli_free_result($result);
                    }
                    else{
                        echo "<table >";
                        echo "<tr><th>Name</th><th>Count</th><th>Percentage.</th></tr>";
                        echo "<tr><td>''</td><td>''</td><td>%</td></tr>";
                        echo "</table>";

                    }
                    mysqli_close($con);
?>
</body>
</html>