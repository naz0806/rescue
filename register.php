<?php

require_once('connection.php');

$Fullname = $Email = $Username = $Password = $Contact = '';

$Fullname = $_POST['Fullname'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Contact = $_POST['Contact'];
$Pass = MD5($Password);

$sql = "INSERT INTO users (Fullname, Email, Username, Password, Contact) VALUES ('$Fullname','$Email','$Username','$Pass','$Contact')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: http://localhost/donatemate%2008012021/web/donor/signIn-donor.php");
}
else
{
	echo "Error :".$sql;
}


?>