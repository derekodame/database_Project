<?php 

error_reporting(E_ALL^E_NOTICE);
include("connector.php");
$query = mysqli_query($con, "select * from department order by id desc limit 10" );

echo "
<center>Department</center>

<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>D_id</div></td>
		<td><div style='width:50px;'>Department_Name</div></td>
		<td><div style='width:50px;'>User_details_id</div></td>
		
		
		
		</table>";
	
	if(mysqli_num_rows($query)>0){
	
while($row = mysqli_fetch_array($query)){
	$idd=$row['id'];
	
	$named=$row['name'];
	$User_details_idd=$row['course_id'];
	
	
		echo "
		
		
		<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>$idd</div></td>
		<td><div style='width:50px;'>$named</div></td>
		<td><div style='width:50px;'>$User_details_idd</div></td>
		
		
		</tr>
		
		</table>";

}}

?>