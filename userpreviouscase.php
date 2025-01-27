<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            background:powderblue;
        }
        table
        {
            padding:20px;
            position:relative;
            top: 100px;
            left: 500px;
        }
        thead{
            border:2px solid balck;


        }
        table,tr,td{
            padding-right:30px;
            padding-left: 50px;
            align-items: center;
            left: 100px;
            text-align:center;
            /* background-color:; */
            border:2px solid black;
        }
        h2 a
        {
            color:black;
        }
    </style>
        
</head>
<body>
    <div class="tablebody">
       
        <table>
            <thead>
                <tr>
                    <!-- <th>User-name</th> -->
                    <th>Name</th>
                    <th>Number</th>
                    <th>email-id</th>
                    <th>Location</th>
                    <th>Message.</th>
                    <th>UserName</th>
                    <th>Status</th>
                    <th>Team</th>

                </tr>

            </thead>
            <tbody>
            <?php
            session_start();
            // $username = $_SESSION["name2"];
            $us1=$_SESSION['name1'];
            
                // @include user-login1.php
                // session_start();
                // $_SESSION['name2']=""; 
        $con=mysqli_connect("localhost","root","","ofrs");
        // $query="select * from `userreportcases` where `name`='".$_SESSION['name1 ']."'";
        // $query= "SELECT uf.Name,urc.name,urc.mnumber,urc.location,urc.msg  FROM user_form uf,userreportcases urc where uf.Name='" . $username . "' and urc.name='" .$us1."' ";
        $query= "SELECT *  FROM reportcases where username='" .$us1."' ";
        $query_run=mysqli_query($con,$query);
        // $sql_run=mysqli_query($con,$sql);
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                // echo $row['name'];
                ?>
            <tr>
                <!-- <td><?= $row['Name'];?></td> -->
                <td><?= $row['Name'];?></td>
                <td><?= $row['mobilenumber'];?></td>
                <td><?= $row['Emailid'];?></td>
                <td><?= $row['location'];?></td>
                <td><?= $row['message'];?></td>
                <td><?= $row['username'];?></td>
                <td><?= $row['status'];?></td>
                <td><?= $row['team'];?></td>
            </tr>
            <?php
            }
        }
        else
        {
            // echo "NO RECORD FOUND.";
            ?>
                  <tr>
                    <td colspan="4">No Record Data Found.</td>
                  </tr>
           <?php
        }
        ?>
                <!-- <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr> -->
                <h2><a href="userhome.html">Back</a></h2>
            </tbody>
        </table>
    </div>
</body>
</html>