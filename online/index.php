<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ongoing.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
body
{
background-color:;
;
}
.gry
{
background-color:#d9d9d9;
}

</style>
<body>

<div class="jumbotron text-center">
  <h1>Ongoing.com</h1>
  <p>a site you would like to stick </p>


   <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
   <marquee>welcome to online event management system :site owned by open source </marquee>
    </div>
</div>

<div class="container">
  <h3>Tabs</h3>
  <ul class="nav nav-tabs">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="displayevent.php">display event</a></li>
					<li><a href="about.php">about  us</a></li>
					   <li><a href="adminlogin.php">admin login</a></li>
  </ul>
  <br>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
									<h3>login </h3>
							  <form action="customerlogin.php" method="post" name="myForm1"  onsubmit="return validateForma()">
						<button class="btn btn-primary" id="username">username</button>
						<input  name="username" placeholder="username" type="text"class="btn btn-default">
						</br>
						</br>
						<button class="btn btn-primary" id="username">password</button>
						<input  name="password" placeholder="**********" type="password"class="btn btn-default">
						</br>
						</br>
						</br>
						<input name="submit" type="submit" value="Login" class="btn btn-default">
						</form>
    </div>
	<script>

	function validateForma() {
    var x = document.forms["myForm1"]["username"].value;
	var y=document.forms["myForm1"]["password"].value;
    if (x == null || x == "" || y == null || y == "") {
        alert("enter all data correctly");
        return false;
    }

</script>






    <div class="col-sm-4">
							  <h3>Registration</h3>
							  <form action="register.php" method="post">
                <div class="form-group">
						<label for="exampleInputEmail1">username</label>
						<input name="username" placeholder="username" type="text"class="form-control">
					</div>
          <div class="form-group">
      <label for="exampleInputEmail1">password</label>
      <input name="password" placeholder="password" type="password"class="form-control">
    </div>
    <div class="form-group">
    <label for="gender">gender</label>
    <select id="gender" name="gender" class="form-control">
    <option value="male">male</option>
    <option value="male">female</option>
    </select>
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">address</label>
							<input  name="address" placeholder="address" type="text"class="form-control">
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">email address</label>
			           <input name="emailaddress" placeholder="emailaddress" type="text"class="form-control">
                 </div>
					  <div class="form-group">
						<input name="submit" type="submit" value=" register"  class="form-control" >

            </div>
						</form>
</div>





<div class="col-sm-3">




</div>






</div>
</div>
</div>
</br>
<div class="gry">
 <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%" >

    </div>
  </div>
</body>

<div class="container">
<div class="row">
		  <div class="col-sm-5">
				<button class="btn btn-primary" id="username">contact us</button>
				</br>
				</br>

				<form action="sendmail.php" name="myForm" onsubmit="return validateForm()">


								<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="btn" id="name" placeholder="Enter your name"  name="name">
								</div>



							<div class="form-group">
							  <label for="email">Email:</label>
							  <input type="email"class="btn " placeholder="Enter email" name="email">
							</div>




							<div class="form-group">
						  <label for="comment">Comment:</label>
						  <textarea class="form-control" rows="5"  name="message"></textarea>
						</div>

							<div class="checkbox">
							  <label><input type="checkbox"> Remember me</label>
							</div>
							<button type="submit" class="btn btn-default" >Submit</button>
						  </form>




</div>












  <div class="col-sm-2">

</div>
  <div class="col-sm-3">
</br>
</br>
<h2>Details</h2>
			<button class="btn btn-primary" id="username">phoneno</button>
			<button class="btn btn-default" id="username">9845817326</button>
			</br>
			</br>
			<button class="btn btn-primary" id="username">location</button>

			<button class="btn btn-default" id="username">gaindakot2 </button>

</div>

</div>
</div>




</html>
