<?php

$username = $_REQUEST['username'];

$connection = new mysqli("localhost","Shinobi","Shinobi","akademia");

if ($connection->connect_error){
	echo "fail";
}	
else {
}
$sql = "CREATE TABLE $username (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(30) NOT NULL,
answer VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}

#header("Location: http://localhost/main-page/index.html");

?>


<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = '$username';
</script>

</body>
</html>