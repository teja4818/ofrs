<?php

session_start();
$sul=$_SESSION['name1'];
$_SESSION['staffreportname']="";
// $_SESSION['userreportpswd']="";
$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="INSERT INTO `reportcases`
VALUES ('".$_POST["stafffullname"]."', '".$_POST["staffmobilenumber"]."', '".$_POST["staffemailid"]."', '".$_POST["stafflocation"]."', '".$_POST["staffmessage"]."','','" .$_POST["staffusername"]."','available','not allocated')";
if($_POST["staffusername"]!=$sul)
{
    echo "<script>alert('Incorrect Staff registered Name. Please try again.');</script>";
    echo "<script>window.location.href ='staffreport.html'</script>";
}
$res=mysqli_query($con,$sql) or die ("cannot execute query");
if($res){
    echo "<script>alert('Reporting successfull');</script>";
    echo "<script>window.location.href ='staffhome.html'</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='staffreport.html'</script>";
    }

    
$_SESSION['staffreportname']=$_POST['staffusername'];
// $_SESSION['userreportpwd']=$_POST['pwd2'];
?>
