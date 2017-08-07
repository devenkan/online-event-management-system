<?php
include('session.php');



?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
body
	{
		background-color:white;
	}

</style>
<body>

<div id="profile">
<b id="welcome">Welcome user: <i><?php echo $login_session; ?></i></b>

<button id="logout"><a href="logout.php">Log Out</a></button>

<button id="logout"><a href="deluserevent.php">deleteevent</a></button>
<button id="logout"><a href="displayeventuser.php">display event</a></button>



<button id="logout"><a href="inserteventuser.php">insert events</a></button>
<button id="logout"><a href="userprofile.php">profile</a></button>
</div>

<p>welcome to online event management system</p>
<?php echo "Today is " . date("Y/m/d") . "<br>"; ?>

<p>current event </p>
<?php
include("displayevent.php");
?>
</body>
</html>
