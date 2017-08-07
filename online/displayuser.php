<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM customer order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $username=$userrow['username'];
  $address=$userrow['address'];
  

?>

<div class="display">
  <p> id: <span><?php echo $id; ?></span>
  <p> username <span><?php echo $username; ?></span>
    <a href="deleteuser.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a>
  </p>
  <br />
  <p>address <span><?php echo $address; ?></span>
    <a href="edituser.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
  </p>
  
  <img src="download.jpg">
 
</div>

<?php } ?>