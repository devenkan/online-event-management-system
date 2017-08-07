<?php

if(isset($_POST['submit']))
{
	if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['address'])||empty($_POST['gender'])||empty($_POST['emailaddress']))
	{

$error = "Username or Password is invalid";
		echo $error;
	}


else
{
	$username=$_POST['username'];
$password=$_POST['password'];
$passwordmd5=md5($password); 
$address=$_POST['address'];
$emailaddress=$_POST['emailaddress'];
$gender=$_POST['gender'];
$servername = "localhost";
$usernamehost = "root";
$passwordhost = "";
$dbname = "user";


// Create connection
$conn = mysqli_connect($servername, $usernamehost, $passwordhost, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO  customer(username, password,gender,address,emailaddress)
  VALUES ('$username', '$passwordmd5','$gender','$address','$emailaddress');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
}
?>