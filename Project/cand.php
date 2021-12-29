<?php

$user_name=filter_input(INPUT_POST, 'name');
$user_regstno=filter_input(INPUT_POST, 'regstno');
$user_edu=filter_input(INPUT_POST, 'edu');
$user_email=filter_input(INPUT_POST, 'email');
$user_info=filter_input(INPUT_POST, 'info');


$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="user_data";
$conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
 if(mysqli_connect_error()){
        	die('connection failed('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
    else{
	$sql="INSERT INTO `candidate`(`name`, `reg`, `edu`, `email`, `info`) VALUES('$user_name','$user_regstno','$user_edu','$user_email','$user_info')";
	if($conn->query($sql)){
		header("Location:sisu.html");
	}
	else{
		echo"error";}
		$conn->close();

}




?>