<?php 

error_reporting(E_ALL^E_NOTICE);
include("connector.php");



//$ine = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ne'])));	
$user = $_POST['user'];	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$status = $_POST['status'];
$gender = $_POST['gender'];
$cname = $_POST['cname'];
$dname = $_POST['dname'];


$query = mysqli_query($con,"insert into user_details values( user_id,'$user','$fname','$lname','$gender','$password',$status)");

$query = mysqli_query($con, "select * from user_details order by user_id desc " );

if(mysqli_num_rows($query)>0){
	
$row = mysqli_fetch_array($query);
	
$user_details_id=$row['user_id'];

}


$query = mysqli_query($con,"insert into department values( id,'$dname','$user_details_id')");

$query = mysqli_query($con,"insert into course values( cid,'$cname','$user_details_id')");

echo $user_details_id;



?>