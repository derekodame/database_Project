
//$('#load_output_input').load("./output_field.php");
$('#load_display').load("./display.php");



function output_input(){
	//alert(3);
	var ne = document.getElementById('textarea1').value;


$.post('./sql_query.php', {ne:ne},function(data){
	
	$('#load_output_input').html(data);	
	$('#textarea1').val('');
	$('#textarea1').focus();
	$('#load_display').hide();
	
	
	
			});

}

function insert_users(){
	
	var user = document.getElementById('user').value;
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var password = document.getElementById('password').value;
	var status = document.getElementById('status').value;
	var gender = document.getElementById('gender').value;
	var cname = document.getElementById('cname').value;
	var dname = document.getElementById('dname').value;
	
	
	if((user=="") || (cname=="")||(status=="") || (gender=="") || (lname=="") || (fname=="") || (password=="")){
		alert("None of the field can be empty");
	}
	else {
		
			
$.post('./include.php', {user:user,fname:fname,lname:lname,gender:gender,password:password,status:status,cname:cname,dname:dname},function(data){
	
	$('#load_output_input').load("./output_field.php");	
	
	$('#load_display').hide();
	
	
			});
		
		
	}
	


}


function show_recent_entry(){
	$('#load_output_input').load("./output_field.php")
	$('#load_display').hide();
}

function u(){
	$('#load_output_input').load("./output_field.php");
	$('#load_display').hide();
}

function c(){
	$('#load_output_input').load("./course.php");
	$('#load_display').hide();
	
}

function d(){
	//alert();
	$('#load_output_input').load("./department.php");
	$('#load_display').hide();
	
	
}

function User_course_department(){
	//alert();
	
	$('#load_output_input').load("./all.php");
	$('#load_display').hide();
	
	
}

function deletee( d){
	
	
	$.post('./delete.php', {d:d},function(data){
	
	$('#load_output_input').load("./output_field.php");	
	
	$('#load_display').hide();
		
		alert("User ID =  "+ d + " was deleted");
	
	
			});
	
}



