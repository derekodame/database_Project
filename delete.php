<?PHP 
include("connector.php");


$dbid=$_POST['d'];

mysqli_query($con,"DELETE FROM user_details WHERE user_id = '$dbid'");
mysqli_query($con,"DELETE FROM department WHERE  course_id = '$dbid'");
mysqli_query($con,"DELETE FROM course WHERE course_details_id = '$dbid'");

?>