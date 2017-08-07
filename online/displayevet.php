<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM events order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $nameevent=$userrow['nameevent'];
  $venue=$userrow['venue'];
  $date=$userrow['date'];
  $organizer=$userrow['organizer'];
?>

<div class="display">
  <p> id: <span><?php echo $id; ?></span>
  <p> nameevent : <span><?php echo $nameevent; ?></span>
    <a href="delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a>
  </p>
  <br />
  <p>venue : <span><?php echo $venue; ?></span>
    <a href="edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
  </p>
  <br />
  <p>date <span><?php echo $date; ?></span>
  </p>
  <br />
  <p> organizer: <span><?php echo $organizer; ?></span>
  </p>
  <br />
  <img src="download.jpg">
 
</div>

<?php } ?>