<?php 
ob_start();
include('db.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $username=$_POST['username'];
  $address=$_POST['address'];
  $password=$_POST['password'];
  
  $updated=mysql_query("UPDATE tbl SET 
        username='$username', password='$password',address='$address' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:displayuser.php');
  }
}
}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM  customer WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $username=$profile['username'];
    $password=$profile['password'];
    $address=$profile['address'];
   
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> name of event</label>
      <input type="text" name="username" required placeholder="username" 
      value="<?php echo $username; ?>" id="inputid" />
    </p>
    <p>
      <label  for="password"  id="preinput"> password </label>
      <input type="password" name="password" required placeholder="password" 
      value="<?php echo $password; ?>" id="inputid" />
    </p>
    <p>
      <label for="address" id="preinput"> address: </label>
      <input type="text" name="address" required placeholder="address" 
      value="<?php echo $address; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>