<?php
session_start();
$_SESSION['name1']="";
$_SESSION['pswd1']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="INSERT INTO `reportcases`
VALUES ('".$_POST["fullname"]."', '".$_POST["mobilenumber"]."', '".$_POST["emailid"]."','".$_POST["location"]."', '".$_POST["message"]."','','','available','not allocated')";
$res=mysqli_query($con,$sql) or die ("cannot execute query");
if($res){
    echo "<script>alert('Reporting successfull');</script>";
    echo "<script>window.location.href ='index.html'</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='report.html'</script>";
    }

    
$_SESSION['name1']=$_POST["fullname"];
$_SESSION['pswd1']=$_POST["password"];
?>

