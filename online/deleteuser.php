<?php
  ob_start();
  include("db.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM customer WHERE id='$delete'");
  if($delete)
  {
      header("Location:profileadmin.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>