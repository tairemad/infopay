<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Results</title>


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
 
$sql="INSERT INTO payment_details (card_type, card_number, card_exp_date, card_ver)
VALUES ('$_POST[cardType]','$_POST[cardNumber]','$_POST[cardExp]','$_POST[cardVer]')";
 
if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error());
  }

 
mysqli_close($con);
?>




</head>

<body>
<?php
$connection = mysqli_connect ("localhost", "tairemad_tairema", "7XpDTIt~?IC+", "tairemad_infopay");
// 	if (!$connection) {
// 		die("Database connection failed: "
// . mysql_error());}
// $db_select = mysql_select_db("tuniqued_infopay", $connection);
// 	if (!$db_select) {
// 		die("Database selection failed: "  .mysql_error());}
		

$sql = mysqli_query($connection, "select * from customer_details, payment_details where customer_details.id = payment_details.id");

while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
    echo 'First Name: '.$row['first_name'];
    echo '<br/> Last Name: '.$row['last_name'];
    echo '<br/> Address: '.$row['address'];
    echo '<br/> City: '.$row['city'];
    echo '<br/> State: '.$row['state'];
	echo '<br/> Email: '.$row['email'];
    echo '<br/> Phone: '.$row['phone'];
    echo '<br/> Card Type: '.$row['card_type'];
    echo '<br/> Card Number: '.$row['card_number'];
    echo '<br/> Card Expiration: '.$row['card_exp_date'];
    echo '<br/> Card Verification #: '.$row['card_ver'];
    echo '<br/><br/>';
    }

?>


</body>
</html>