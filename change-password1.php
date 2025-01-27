<?php
 
 session_start();
 $username = $_SESSION["name1"];
 $con = mysqli_connect('localhost','root','','ofrs') or die('Unable To connect');
 if(count($_POST)>0) {
 $result = mysqli_query($con,"SELECT *from user_form WHERE Name='" . $username . "'");
 $row=mysqli_fetch_array($result);
 if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
 mysqli_query($con,"UPDATE user_form set password='" .$_POST["newPassword"]."'  WHERE Name='" . $username . "'");
 echo "<script>alert('update successfull');</script>";
 echo "<script>window.location.href ='userhome.html'</script>";
 } else{

    echo "<script>alert('Something went wrong. Please try again.');</script>";
     echo "<script>window.location.href ='userhome.html'</script>";
 }
 

}
 
?>