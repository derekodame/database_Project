<?php 

error_reporting(E_ALL^E_NOTICE);
include("connector.php");
$query = mysqli_query($con, "select * from course order by cid desc limit 10" );
echo "
<center>Course</center>

<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>C_id</div></td>
		<td><div style='width:50px;'>Field</div></td>
		<td><div style='width:50px;'>User_details_id</div></td>
		
		
		
		</table>
		";
	
	if(mysqli_num_rows($query)>0){
	
while($row = mysqli_fetch_array($query)){
	$id=$row['cid'];
	
	$name=$row['cname'];
	$User_details_id=$row['course_details_id'];
	
	
		echo "<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>$id</div></td>
		<td><div style='width:50px;'>$name</div></td>
		<td><div style='width:50px;'>$User_details_id</div></td>
		
		
		</tr>
		
		</table>";

}
}
?>