<?php 

error_reporting(E_ALL^E_NOTICE);
include("./connector.php");
$query = mysqli_query($con, "select * from user_details limit 100" );


if(mysqli_num_rows($query)>0){
	
	echo "<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>User_ID</div></td>
		<td><div style='width:50px;'>Username</div></td>
		<td><div style='width:50px;'>firstname</div></td>
		<td><div style='width:50px;'>Lastname</div></td>
		<td><div style='width:24px;'>Gender</div></td>
		<td><div style='width:14px;'> Status</div></td>
		<td><div style='width:98px;'>Password </div></td>
		<td><div style='border:#eeee thin solid; width:10px;'>delete </div></td>
		</tr>
		
		</table><br/>";
	
while($row = mysqli_fetch_array($query)){
	
	
		
	$id=$row['user_id'];
	$username=$row['username'];
	$firstname=$row['first_name'];
	$last_name=$row['last_name'];
	$gender=$row['gender'];
	$status=$row['status'];
	$password=$row['password'];
	
		echo "<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>$id</div></td>
		<td><div style='width:50px;'>$username</div></td>
		<td><div style='width:50px;'>$firstname</div></td>
		<td><div style='width:50px;'>$last_name</div></td>
		<td><div style='width:24px;'>$gender</div></td>
		<td><div style='width:14px;'> $status</div></td>
		<td><div style='width:98px;'>$password </div></td>
		<td><div title='DELETE FROM user_details WHERE user_id = $id' onclick=deletee($id); id='$id' style='border:#eeee thin solid; width:10px; font-size:12px; cursor:pointer; '>delete </div></td>
		</tr>
		
		</table><br/>";

			}
}

?>