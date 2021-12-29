<?php
session_start();

$user_pass=filter_input(INPUT_POST, 'signin_password');
$user_email=filter_input(INPUT_POST, 'signin_username');
$page=filter_input(INPUT_POST, 'page');
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="user_data";
$conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('connection failed('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sql="select * from login_info where email='$user_email' AND password='$user_pass' limit 1";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){
		if($page=="Student"){
		header("Location:home.html");
		$_SESSION['user']=$user_email;

		exit();
	}	
	    if($page=="Candidate"){
	    header("Location:candidate.html");	
	    exit();}
	}
		
	else{
		echo"your username/password is wrong";
	}
}

?>