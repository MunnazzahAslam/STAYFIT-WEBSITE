<?php
$username= 'root';
$password= '';
$db= 'stayfit';
$con= mysqli_connect('localhost', $username, $password, $db) ;
$username = $_POST['username'];
$password = $_POST['password'];
$s=" select * from user where username='$username' && password= '$password'";
$result= mysqli_query( $con, $s );
$num = mysqli_num_rows( $result );
if($num==1){
	$logged_in_user = mysqli_fetch_assoc($result);
			if ($logged_in_user['username'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}

else{
	echo "YOUR ID/PASSWORD IS INCORRECT";
}
?>