<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Order</title>

<?php
$dbserver = "localhost";
$dblogin = "tairemad_tairema";
$dbpassword = "7XpDTIt~?IC+";
$dbname = "tairemad_infopay";
 
$con = mysqli_connect("$dbserver","$dblogin","$dbpassword", "$dbname");
// if (!$con)
//   {
//   die('Could not connect to the mySQL server: ' . mysql_error());
//   }
 
// mysql_select_db("$dbname", $con);
 
$sql = "INSERT INTO customer_details (first_name, last_name, address, city, state, phone, email) VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[streetAddress]','$_POST[city]','$_POST[state]','$_POST[txtPhone]', '$_POST[txtEmail]')";
 
if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error());
  }

 
mysqli_close($con);
?>

</head>

<body>


<div id="form">

<table width="500" border="0" align="center">

<form name="form2" method="post" action="thanks.php">
<tr><td>Card type: </td><td><select name="cardType">
	<option value="">Please Select</option>
  <option value="visa">Visa</option>
  <option value="mc">Mastercard</option>
</select></td></tr>
<tr><td>Card Number: </td><td><input type="text" name="cardNumber" value=''></td></tr>
<tr><td>Card Expiration: (MM/YYYY) </td><td><input type="text" name="cardExp" value=''></td></tr>
<tr><td>Verification Code: </td><td><input type="text" name="cardVer" value=''></td></tr>

<tr><td></td><td><input type="submit" value="Submit"></td></tr>

</form>
</table>






</div>
</body>
</html>