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

  <meta charset="utf-8">

</style>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Online event management system</h1>
<h2 >  <p>current event </p></a>
</div>
<table border="1"  style="width:100%">
<tr>
<td colspan="5">index</td>
<td colspan="5">nameevent</td>
<td colspan="5">venue</td>
<td colspan="5">date</td>
<td colspan="5">organizer</td>
<td colspan="5">aboutevent</td>
</tr>
<?php
 include('db.php');

  $select=mysql_query("SELECT * FROM events order by id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
  echo"<tr>
  <td colspan='5'>".$i."</td>
  <td colspan='5'>".$userrow['nameevent']."</td>
<td colspan='5'>".$userrow['venue']."</td>
  <td colspan='5'>".$userrow['date']."</td>
    <td colspan='5'>".$userrow['organizer']."</td>
      <td colspan='5'>".$userrow['aboutevent']."</td>
      </tr>";
      $i++;
      }



?>













</table>









</body>
</html>
