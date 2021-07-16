<?php
	// 1. Create a database connection
	//    use external file *instead of* including db credentials here
	require_once("config.php");

	// Usually this data would come from HTML form values in $_POST
	// - edit these three lines with your information...
	$counter = 3;
	$firstName = "Hi! I am a new first name";
	$lastName = "And a new last name";
	$email = "And a new email";
	
	// 2. Perform database query
	$query  = "UPDATE contacts SET firstName='$firstName', lastName='$lastName', email='$email' WHERE counter='$counter'";
	$result = mysqli_query($connection, $query);
?>

<html>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Database Update</title>
</head>
<body>

	<h1>Database Update</h1>

<?php
	if ($result) {
		echo "Success! - the query seemed to work! (At least it didn't error-out.)";

		//new...
		echo "<br><br>MySQL affected rows: " . mysqli_affected_rows($connection);
?>
<?php
	} else {
		die("Database query failed.");
	}
?>
</body>
</html><?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>