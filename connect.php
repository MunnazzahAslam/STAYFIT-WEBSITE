<?php
$username= 'root';
$password= '';
$db= 'stayfit';
$con= mysqli_connect('localhost', $username, $password, $db) ;
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$s=" select * from user where username='$username'";
$result= mysqli_query( $con, $s );
$num = mysqli_num_rows( $result );
if($num==1){
	echo "USERNAME ALREADY TAKEN";}
else
{	$reg="insert into user(username, password, email) values ('$username','$password', '$email')";
	mysqli_query($con, $reg);
	header('location: index.php');
}
?>