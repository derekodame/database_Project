<?php 

error_reporting(E_ALL^E_NOTICE);
include("connector.php");
//$query = mysqli_query($con, "select * from user_details order by user_id desc limit 10" );
$query = mysqli_query($con,"SELECT * FROM user_details
					 JOIN department ON 
					user_details.user_id = department.course_id
					
					JOIN course ON 
					user_details.user_id = course.course_details_id
					
					order by user_id desc limit 10");


//$all = mysqli_query();
echo "<table border='1pd' class='display_t' width='1100dp'>
		
		<tr >
		<td><div style='width:23px;'>User_ID</div></td>
		<td><div style='width:50px;'>Username</div></td>
		<td><div style='width:50px;'>Firstname</div></td>
		<td><div style='width:50px;'>Lastname</div></td>
		<td><div style='width:24px;'>Gender</div></td>
		<td><div style='width:16px;'> Status</div></td>
		<td><div style='width:110px;'>Password </div></td>
		<td><div style='width:50px;'>Department_name </div></td>
		<td><div style='width:70px;'>course_name </div></td>
		
		
		</table><br/>";

if(mysqli_num_rows($query)>0){
	
while(($row = mysqli_fetch_array($query))){
	
	//$rowc = mysqli_fetch_array($queryc);
	//$rowd = mysqli_fetch_array($queryd);
	
	$id=$row['user_id'];
	$username=$row['username'];
	$firstname=$row['first_name'];
	$last_name=$row['last_name'];
	$gender=$row['gender'];
	$status=$row['status'];
	$password=$row['password'];
	
	$Department_name=$row['name'];
	$course_name=$row['cname'];
	
		echo "<table border='1pd' class='display_t' width='1100dp'>
		
		<tr >
		<td><div style='width:23px;'>$id</div></td>
		<td><div style='width:50px;'>$username</div></td>
		<td><div style='width:50px;'>$firstname</div></td>
		<td><div style='width:50px;'>$last_name</div></td>
		<td><div style='width:24px;'>$gender</div></td>
		<td><div style='width:16px;'> $status</div></td>
		<td><div style='width:110px;'>$password </div></td>
		<td><div style='width:50px;'>$Department_name </div></td>
		<td><div style='width:70px;'>$course_name </div></td>
		
		</tr>
		
		</table><br/>";}
}

?>