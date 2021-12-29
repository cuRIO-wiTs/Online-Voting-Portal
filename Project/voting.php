<?php
$votes=filter_input(INPUT_POST, 'vote');
session_start();
$username=$_SESSION['data'];

if(!empty($votes)){
		$dbhost="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="user_data";
        $conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
        	die('connection failed('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
    else{
	$sql="update login_info set vote='$votes'where email='$username'";
	if($conn->query($sql)){
		header("Location:sisu.html");
	}
	else{
		echo"error";}
		$conn->close();

}
}

?>