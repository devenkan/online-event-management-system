<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="jumbotron text-center">
  <h1>Online event management system</h1>
  <p>a site you would like to stick </p>
</div>
<div class="container">
  <h3>Tabs</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="displayevent.php">display event</a></li>
    <li><a href="about.php">about  us</a></li>
    <li><a href="contact.php">contact  us</a></li>
	 
	   <li><a href="adminlogin.php">admin login</a></li>
  </ul>
  <br>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>login </h3>
      <form action="customerlogin.php" method="post">
<button class="btn btn-primary" id="username">username</button>
<input name" name="username" placeholder="username" type="text">
</br>
</br>
<button class="btn btn-primary" id="username">password</button>
<input password" name="password" placeholder="**********" type="password">
</br>
</br>
</br>
<input name="submit" type="submit" value=" Login " class="btn btn-default">
</form>
    </div>
    <div class="col-sm-4">
      <h3>Registration</h3>
      <form action="register.php" method="post">
<button class="btn btn-primary" id="username">username</button>
<input name" name="username" placeholder="username" type="text">
</br>
</br>
<button class="btn btn-primary" id="password">password</button>
<input password" name="password" placeholder="**********" type="password">
</br>
</br>
<button class="btn btn-primary" id="gendername">gendername</button>
<input name="gender" placeholder="emailaddress" type="text">
</br>
</br>
<button class="btn btn-primary" id="address">address</button>
<input  name="address" placeholder="address" type="text">
</br>
</br>
<button class="btn btn-primary" id="emailaddress">emailaddress</button>
<input name="emailaddress" placeholder="emailaddress" type="text">
</br>
</br>
<input name="submit" type="submit" value=" register" class="btn btn-default">

</form>
</div>
</div>
</body>
</br>
</br>
<div class="container">
<div class="row">
  <div class="col-sm-6">.col-sm-3</div>
  <div class="col-sm-6">.col-sm-6</div>
  <div class="col-sm-3">.col-sm-3</div>
</div></div>



</html>