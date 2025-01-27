<?php
session_start();
$_SESSION['name9']="";
if(isset($_POST['delete']))
 {
//     echo "<script>alert('Something went wrong. Please try again.');</script>";
//     echo "<script>window.location.href ='managestaff.php'</script>";


$con=mysqli_connect("localhost","root","","ofrs") or die("cannot connect");
$sql="DELETE from `staff` where username='".$_POST['deletedept']."' ";
// VALUES ('".$_POST["text1"]."', '".$_POST["text2"]."','available')";
$res=mysqli_query($con,$sql) or die ("cannot execute query");

$_SESSION['name9']=$_POST["deletedept"];
if($res){
    echo "<script>alert(' team deleted successfully');</script>";
    echo "<script>window.location.href ='adminhome.php'</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='managestaff.php'</script>";
    }
}
else{
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href ='managestaff.php'</script>";
}
?>

