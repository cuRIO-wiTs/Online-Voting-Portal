<?php
session_start();
$full_name=filter_input(INPUT_POST, 'fullname');
$register_no=filter_input(INPUT_POST, 'register');
$email_id=filter_input(INPUT_POST, 'email');
$phone_no=filter_input(INPUT_POST, 'phone');
$branch_name=filter_input(INPUT_POST, 'branch');
$gender=filter_input(INPUT_POST, 'gender');
$_SESSION['data']=$email_id;
if(!empty($full_name)){
	
		$dbhost="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="user_data";
        $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
        	die('connection failed('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
    else{
	$sql="insert into register(name,regno,email,brn,phno,gen)values('$full_name','$register_no','$email_id','$branch_name','$phone_no','$gender')";
	if($conn->query($sql)){
		header("Location:poll.html");
	}
	else{
		echo"error";}
		$conn->close();

}
}


?>