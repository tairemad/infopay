<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>




</head>

<body>


<table width="500" border="0" align="center">

<form name="form1" method="post" action="order.php">
<tr><td>First Name: </td><td><input type="text" name="firstName" value=''></td></tr>
<tr><td>Last Name: </td><td><input type="text" name="lastName" value=''></td></tr>
<tr><td>Street Address: </td><td><input type="text" name="streetAddress" value=''></td></tr>
<tr><td>City: </td><td><input type="text" name="city" value=''></td></tr>
<tr><td>State: (ex. MA)</td><td><input type="text" name="state" value=''></td></tr>
<tr><td>Phone (xxxxxxxxxx): </td><td><input type="text" name="txtPhone" value=''></td></tr>
<tr><td>Email: </td><td><input type="text" name="txtEmail" value=''></td></tr>
<tr><td></td><td><input type="submit" value="Submit"></td></tr>

</form>
</table>



</body>
</html>