<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
//$date = $_POST['date'];
$mob = $_POST['mob'];
$password = $_POST['password'];

$cname = $_POST['country'];
$cname= ucwords(strtolower($cname));

$sname = $_POST['state'];
$sname= ucwords(strtolower($sname));


$cname = stripslashes($cname);
$cname = addslashes($cname);
$cname = ucwords(strtolower($cname));

$sname = stripslashes($sname);
$sname = addslashes($sname);
$sname = ucwords(strtolower($sname));

$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));


$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
//$date = stripslashes($date);
$new_date = date('Y-m-d',strtotime($_POST['date']));
//$date = addslashes($date);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$new_date','$email' ,'$mob', '$password', '$cname', '$sname')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>