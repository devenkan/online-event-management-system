<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style type="text/css">
body
{
 
}

    table,tr,td
    {

       border-collapse: collapse;
       align:center;
    }
    td
    {
      width:12px;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, tr {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

  </style>
</head>
<body>

<?php
 include('db.php');
 include ('session.php');
  $select=mysql_query("SELECT * FROM events where organizer='$login_session' ");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $nameevent=$userrow['nameevent'];
  $venue=$userrow['venue'];
  $date=$userrow['date'];
  $organizer=$userrow['organizer'];
?>

<table>
  <tr>
    <td colsan="5">namevent</td>
    <td colsan="5">venue</td>
    <td colsan="5">date</td>
    <td colsan="5">action </td>
  </tr>
<tr>
   <td colsan="5"><span><?php echo $nameevent; ?></span></td>
    <td colsan="5"><span><?php echo $venue; ?></span></td>
    <td colsan="5"><span><?php echo $date; ?></span></td>
    <td colsan="5">
    <a href="delete1.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
            <span class="delete" title="Delete"> X </span></a> 
            <a href="edit1.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>    

    </td>

</tr>
</table>

<?php } ?>
</body>
</html>
