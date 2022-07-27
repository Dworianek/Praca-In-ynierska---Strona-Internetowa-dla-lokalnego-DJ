<?php

require("connect.php");

$dedication_from = $_POST['dedication_from'];
$dedication_for = $_POST['dedication_for'];
$track_title = $_POST['track_title'];
$track_author = $_POST['track_author'];
$yt_link = $_POST['yt_link'];
$form_message = $_POST['form_message'];

//Zabezpieczenie przed wstrzykiwaniem
$dedication_from = htmlentities($dedication_from,ENT_QUOTES,"UTF-8");
$dedication_for = htmlentities($dedication_for,ENT_QUOTES,"UTF-8");
$track_title = htmlentities($track_title,ENT_QUOTES,"UTF-8");
$track_author = htmlentities($track_author,ENT_QUOTES,"UTF-8");
$yt_link = htmlentities($yt_link,ENT_QUOTES,"UTF-8");
$form_message = htmlentities($form_message,ENT_QUOTES,"UTF-8");
	   
$sql = "INSERT INTO dedykacje(id, odkogo, dlakogo, tytul, autor, link, opis) VALUES (' ','$dedication_from','$dedication_for','$track_title','$track_author','$yt_link','$form_message')";

$result = $conn->query($sql);
 
header('Location: dedykacje.html');

?>