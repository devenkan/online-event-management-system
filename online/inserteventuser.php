<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<button><a href="profile.php">back</a></button>
<form method="POST" action="inserteventmysqli.php">
event name:<input type="text" name="nameevent"/>
</br>
</br>
venue:<input type="text" name="venue" />
</br>
</br>
date:<input type="date" name="date"/>
</br>
aboutevent:<input type="text" name="aboutevent"/>
</br>
</br>
<input type="submit" value="submit" name="submit">

</form>

</body>
</html>