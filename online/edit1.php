<?php 
ob_start();
include('db.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $nameevent=$_POST['nameevent'];
  $venue=$_POST['venue'];
  $date=$_POST['date'];
  $organizer=$_POST['organizer'];
  $aboutevent=$_POST['aboutevent'];
  $updated=mysql_query("UPDATE events SET 
        nameevent='$nameevent', venue='$venue',date='$date',organizer='$organizer',aboutevent='$aboutevent' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:displayeventuser.php');
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
  $getselect=mysql_query("SELECT * FROM events WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $nameevent=$profile['nameevent'];
    $date=$profile['date'];
    $venue=$profile['venue'];
    $organizer=$profile['organizer'];
    $aboutevent=$profile['aboutevent'];
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> name of event</label>
      <input type="text" name="nameevent" required placeholder="name event" 
      value="<?php echo $nameevent; ?>" id="inputid" />
    </p>
    <p>
      <label  for="date"  id="preinput"> DATE: </label>
      <input type="date" name="date" required placeholder="Enter date" 
      value="<?php echo $date; ?>" id="inputid" />
    </p>
    <p>
      <label for="venue" id="preinput"> VENUE: </label>
      <input type="text" name="venue" required placeholder="venue" 
      value="<?php echo $venue; ?>" id="inputid" />
    </p>
    <p>
      <label for="organizer" id="preinput"> organizer: </label>
      <input type="text" name="organizer" required placeholder="organizer" 
      value="<?php echo $organizer; ?>" id="inputid" />
    </p>
    <p>
      <label for="aboutevent" id="preinput"> aboutevent </label>
      <input type="text" name="aboutevent" required placeholder="aboutevent" 
      value="<?php echo $aboutevent; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>