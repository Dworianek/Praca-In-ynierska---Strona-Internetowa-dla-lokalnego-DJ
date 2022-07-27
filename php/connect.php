<?php
	
$conn = mysqli_connect(
'localhost',
'adidwo_noname',
'pasio470',
'adidwo_noname'
);

//Polskie znaki + w phpmyadnim utf8_polish_ci
$conn -> query ('SET NAMES utf8');
$conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
?>