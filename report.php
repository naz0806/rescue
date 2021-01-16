<?php

require_once('connection.php');

$vict_name = $vict_ic = $vict_contact = $vict_email = $vict_age = $vict_state = $vict_work = $vict_report ='';

$vict_name = $_POST['vict_name'];
$vict_ic = $_POST['vict_ic'];
$vict_contact = $_POST['vict_contact'];
$vict_email = $_POST['vict_email'];
$vict_age = $_POST['vict_age'];
$vict_state = $_POST['vict_state'];
$vict_work =  $_POST['vict_work'];
$vict_report = $_POST['vict_report'];

$sql = "INSERT INTO report (vict_name, vict_ic, vict_contact, vict_email, vict_age, vict_state, vict_work, vict_report) VALUES 
     ('$vict_name','$vict_ic','$vict_contact','$vict_email','$vict_age','$vict_state','$vict_work','$vict_report' )";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: https://rescue-cmt322.herokuapp.com/victimMakeReport-A.php");
}
else
{
	echo "Error :".$sql;
}


?>
