<?php

require("connect.php");

	   
$sql = "TRUNCATE TABLE dedykacje";

$result = $conn->query($sql);

if($sql !== FALSE)
{
   echo("All rows have been deleted.");
}
else
{
   echo("No rows have been deleted.");
}
header('Location: dj-dedykacje.php');
?>