<?PHP 

 error_reporting(E_ALL^E_NOTICE);
	 include("connection.php");
	  $k = mysqli_real_escape_string($con,trim($_GET['cl']));
	 
	  $terms = explode(" ", $k);
	  
	  
	  $query = "SELECT * FROM user_details WHERE  ";
	  
	  foreach($terms as $each){
		  
		 $i++;
		 
		 if(  $i==1)
			$query .= "firstname LIKE '%$each%' OR lastname LIKE '%$each%' ";
			 
			 else
			 
			$query .= "OR firstname LIKE '%$each%' ";
			
	  }
		
	 
			 $query = mysqli_query($con,$query);
			 $numrows = mysqli_num_rows($query);
			 
		
			 if(($k != "")){
			 if(($numrows > 0)) { 
			 
			 } else echo "not found";
			 
			 }


?>