<?php 
include("connector.php");
//include("include.php");

?>
<!doctype html> 
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>


</head>
<link href="css.css" type="text/css" rel="stylesheet">
<body>

<div class="field_Main">
<div class="input_1">
<div>
	<button title="select * from user_details order by user_id desc limit 10" style="cursor: pointer;" onClick="u();"> user details </button> || <button  onClick="c();" style="cursor: pointer;" title="select * from course order by cid desc limit 10" >course</button>  || <button title="select * from department order by id desc limit 10" onClick="d();" style="cursor: pointer;">department</button> || <button title="SELECT * FROM user_details
					 JOIN department ON 
					user_details.user_id = department.course_id
					
					JOIN course ON 
					user_details.user_id = course.course_details_id
					
					order by user_id desc limit 10" onClick="User_course_department();" style="cursor: pointer;">All</button> <hr/>
</div>
<div>
	<p>Insert/add user details </p>
	
	Username<br/>
		<input type="text" placeholder="username" id="user">
	<br/>
	Firstname<br/>
	  <input type="text" placeholder="firstname" id="fname">
	<br/>
	Lastname<br/>
	  <input type="text" placeholder="lastname" id="lname">
	<br/>
	Password<br/>
	  <input type="text" placeholder="password" id="password">
	<br/>
	 Gender
	  <select id="gender">
	    <option value="Male">Male</option>
	    <option value="Female">Female</option>
	    </select>
	  Status<select id="status">
	    <option value="1">1</option>
	    <option value="0">0</option>
	    </select>
	 <br/>
	Field of study <br/>
	  <input type="text" placeholder="Course Name" id="cname"><br/><br/>
	
	<selecdt name="select">
	  
	  </select><br/>
	<select name="select2" id="dname">
	  <option value="CS">CS Department</option>
	  <option value="EN">EN Department</option>
	  <option value="MA">MA Department</option>
	  <option value="PH">PH Department</option>
	  </select>

	
	  <button onClick="insert_users();" title="insert into user_details values( user_id,'$user','$fname','$lname','$gender','$password',$status)"> Insert</button>	
	   <button onClick="show_recent_entry();"  style="cursor: pointer;" title="select * from user_details order by user_id desc limit 10">Show recent entries</button>	
	  </p></div>
<div>
  <hr/>
  <p>SQL Query</p>
  <p>user_details --> user_id|username|||first_name||last_name||gender||password||status<br/>
    course -->cid||cname||course_details_id<br/>
    Department --> id||name||course_id
  </p>
  
    
<selecst id="d" name="select">
	  
	  </select><br/><br/>
  
  
  <textarea name="textarea1" id="textarea1" ></textarea>
    <input type="button" onClick="output_input();" value="okay">
     <button onClick="show_recent_entry();"  style="cursor: pointer;">Show recent entries</button>	
	  
  
</div>
<hr/>
</div>
<ol>
  
</ol>

<table>
<ol>


<div class="load"> 
<div id="load_display" class="load_display">display <br/>

</div>

<div id="load_output_input">Sql Field output <br/>
</div>
</div>
</ol>
</table>



</div>
</body>
</html>

<script  src="jquery-1.8.3.min.js"></script>
<script  src="javascript.js"> </script>


