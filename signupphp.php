<html>
<body>

<?php
include("connection.php");

$userID = $_POST["userID"];
$username = $_POST["username"];
$userpassword = $_POST["userpass"];
$email = $_POST["email"];



$sql = "INSERT INTO user(userID, username, userpass, email) VALUES('$userID','$username','$userpass','$email')";

//execute query //kene letak connection in each bracket
$result = mysqli_query($connection,$sql) or die ("ERROR : " .mysqli_error($connection));

//confirm the record is added
if($result)
	{//echo "Thank you for joining!";}
		echo '<script language="javascript">alert("Thank you for joining.");
		window.location = "login.php";</script>';
	}
//else
	//{die(mysqli_error($connection));}

$connection->close();
		//echo "<script>window.location = 'login.php'</script>";
?>
</body>
</html>