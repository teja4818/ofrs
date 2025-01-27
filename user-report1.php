<?php
session_start();
 $ul=$_SESSION['name1'];
$_SESSION['userreportname']="";
// $_SESSION['userreportpswd']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="INSERT INTO `reportcases`
VALUES ('".$_POST["fullname"]."', '".$_POST["mobilenumber"]."', '".$_POST["emailid"]."', '".$_POST["location"]."', '".$_POST["message"]."','" .$_POST["username"]."','','available','not allocated')";
// $sqli="INSERT INTO `usercases`
// VALUES ('','".$_POST["fullname"]."', '".$_POST["mobilenumber"]."', '".$_POST["emailid"]."', '".$_POST["location"]."', '".$_POST["message"]."')";
if($_POST["username"]!=$ul)
{
    echo "<script>alert('Incorrect User Name. Please try again.');</script>";
    echo "<script>window.location.href ='user-report.php'</script>";
}
$res=mysqli_query($con,$sql) or die ("cannot execute query");

if($res){
    echo "<script>alert('Reporting successfull');</script>";
    echo "<script>window.location.href ='userhome.html'</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='user-report.php'</script>";
    }

    
$_SESSION['userreportname']=$_POST['username'];
// $_SESSION['userreportname']=$ul;
// $_SESSION['userreportpwd']=$_POST['pwd2'];
?>
