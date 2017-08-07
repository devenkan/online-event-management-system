<html>
<head>
</head>
<body>
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo $error;
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$passwordmd5=md5($password);
echo $passwordmd5;
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("user", $connection);
// SQL query to fetch information of registerd users and finds user match.

$query = mysql_query("select * from customer where password='$passwordmd5' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {

echo"<script>alert('username and password is invalid')</script>";

}
mysql_close($connection); // Closing Connection
}
}
?>
</body>
</html>