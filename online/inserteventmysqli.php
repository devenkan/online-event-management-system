<?php
include ('session.php');
$organizer=$login_session;

if(isset($_POST['submit']))
{
	if(empty($_POST['nameevent'])||empty($_POST['venue'])||empty($_POST['date'])||empty($_POST['aboutevent']))
	{

$error = "Username or Password is invalid";
		echo $error;
	}


else
{
	$nameevent=$_POST['nameevent'];
$venue=$_POST['venue'];
$date=$_POST['date'];

$aboutevent=$_POST['aboutevent'];


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

$sql = "INSERT INTO  events(nameevent, venue,date,organizer,aboutevent)
  VALUES ('$nameevent', '$venue','$date','$organizer','$aboutevent');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
    include ('displayeventuser.php');
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
}
?>