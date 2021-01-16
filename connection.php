<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("remotemysql.com","3Xfb0olTjF","kWUZVKJpXB","3Xfb0olTjF");

if(!$conn)
{
	echo "Database connection failed...";
}

?>
