<?php 
 error_reporting(0);
//error_reporting(E_ALL^E_NOTICE);
include("connector.php");

//$sql = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ne'])));	
$sql = ($_POST['ne']) ;
$table = ($_POST['t']) ;




$query = mysqli_query($con, $sql );



//$a = 'How are you?';

if (strpos($sql, 'user_details') !== false) {
    echo $sql . " --> was successful!" ;
echo "
<center>User_details</center>

<table border='1pd' class='display_t' width='900dp'>
		
		<tr >
		<td><div style='width:20px;'>User_ID</div></td>
		<td><div style='width:50px;'>Username</div></td>
		<td><div style='width:50px;'>Firstname</div></td>
		<td><div style='width:50px;'>Lastname</div></td>
		<td><div style='width:24px;'>Gender</div></td>
		<td><div style='width:14px;'> Status</div></td>
		<td><div style='width:98px;'>Password </div></td>
		<td><div style='border:#eeee thin solid; width:10px;'> </div></td>
		</tr>
		
		</table>";
	
	if(mysqli_num_rows($query)>0){
	
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
		<td><div onclick=deletee($id); id='$id' style='border:#eeee thin solid; width:10px; font-size:12px;cursor:pointer; '>delete </div></td>
		</tr>
		
		</table>";

}
}

}elseif (strpos($sql, 'Course')||(strpos($sql, 'course')) !== false)
{
 echo $sql . " --> was successful!" ;
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
}elseif((strpos($sql, 'department') !== false) ){
	
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

}
}
	
}else {echo " Please, something is wrong with the SQL Query.";}

/*if($query){
	
	

switch ($tdable) {
    case "User_details": 
		
        
		

		
		
        break;
    case "Course":
       

        break;
    case "Department":
        echo $sql . "--> was successful!" ;


        break;
}
	
	
	


}else{echo "Please, something is wrong with the SQL Query.";}

*/

?>