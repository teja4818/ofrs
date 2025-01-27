<?php
 
 session_start();
 $username = $_SESSION["name3"];
 $con = mysqli_connect('localhost','root','','ofrs') or die('Unable To connect');
 if(count($_POST)>0) {
 $result = mysqli_query($con,"SELECT *from staff WHERE username='" . $username . "'");
 $row=mysqli_fetch_array($result);
 if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
 mysqli_query($con,"UPDATE stafflogin set password='" . $_POST["newPassword"] . "' WHERE username='" . $username . "'");
 echo "<script>alert('update successfull');</script>";
 echo "<script>window.location.href ='staffhome.html'</script>";
 } else{
//   $message = "Password is not correct";
    echo "<script>alert('Something went wrong. Please try again.');</script>";
     echo "<script>window.location.href ='staffhome.html'</script>";
 }
 
//  if($res){
//     echo "<script>alert('Reporting successfull');</script>";
//     echo "<script>window.location.href ='userhome.html'</script>";
//     } else {
//     echo "<script>alert('Something went wrong. Please try again.');</script>";
//     echo "<script>window.location.href ='userhome.html'</script>";
//     }
}
 
// if (isset($_POST['re_password']))
// 	{
// 	$old_pass = $_POST['old_pass'];
// 	$new_pass = $_POST['new_pass'];
// 	$re_pass = $_POST['re_pass'];
// 	$password_query = mysql_query("select * from user_form where 'Name'='$name2'");
// 	$password_row = mysql_fetch_array($password_query);
// 	$database_password = $password_row['password'];
// 	if ($database_password == $old_pass)
// 		{
// 		if ($new_pass == $re_pass)
// 			{
// 			$update_pwd = mysql_query("update user_form set password='$new_pass' where 'Name'='$name2'");
// 			echo "<script>alert('Update Sucessfully'); window.location='userhome.html'</script>";
// 			}
// 		  else
// 			{
// 			echo "<script>alert('Your new and Retype Password is not match'); window.location='userhome.html'</script>";
// 			}
// 		}
// 	  else
// 		{
// 		echo "<script>alert('Your old password is wrong'); window.location='userhome.html'</script>";
// 		}
// 	}

// session_start();

// //Database Information

// $dbhost = "localhost";
// $dbname = "ofrs";
// $dbuser = "root";
// $dbpass = "";

// //Connect to database

// $conn = mysql_connect ( $dbhost, $dbuser, $dbpass,$dbname)or die("Could not connect: ".mysql_error());
// mysql_select_db($dbname, $conn) or die(mysql_error());

// $username = $_POST['name2'];
// $password = $_POST['pswd2'];

//   mysql_query("UPDATE ofrs.user_form SET Password = PASSWORD('$new_pass') WHERE Name='$username'");
//   echo("Thank You. Your Password has been successfully changed.");
?>