<?php
$user_name=filter_input(INPUT_POST, 'signup_fullname');
$user_pass=filter_input(INPUT_POST, 'signup_password');
$user_email=filter_input(INPUT_POST, 'signup_email');

if(!empty($user_name)){
	if(!empty($user_pass)){
		$dbhost="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="user_data";
        $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
        	die('connection failed('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
    else{
	$sql="insert into login_info(fullname,email,password) values('$user_name','$user_email','$user_pass')";
	if($conn->query($sql)){
		header("Location:sisu.html");
	}
	else{
		echo"error";}
		$conn->close();

}
}}

?>