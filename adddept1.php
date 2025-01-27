<?php
session_start();
$_SESSION['name9']="";

$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="INSERT INTO `staff`
VALUES ('".$_POST["deptname"]."', '".$_POST["deptlead"]."', '".$_POST["teamlist"]."', '".$_POST["deptpassword"]."','available')";
$res=mysqli_query($con,$sql) or die ("cannot execute query");

$_SESSION['name9']=$_POST["deptname"];
if($res){
    echo "<script>alert('add team successfull');</script>";
    echo "<script>window.location.href ='adminhome.php'</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='adddept.php'</script>";
    }
    $_SESSION['name9']=$_POST["deptname"];
?>

