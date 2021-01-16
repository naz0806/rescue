<!--
in this file we write code for connection with database.
-->
<?php
 //connect to the database
    $link = mysqli_connect('remotemysql.com', '3Xfb0olTjF', 'kWUZVKJpXB', '3Xfb0olTjF') or die($link);

    if($mysqli->connect_error){
        die('Connection Failed : '.$mysqli->connect_error);
    }

?>



<!--
$conn = mysqli_connect("remotemysql.com","3Xfb0olTjF","kWUZVKJpXB","3Xfb0olTjF");

if(!$conn)
{
	echo "Database connection failed...";
}
-->
