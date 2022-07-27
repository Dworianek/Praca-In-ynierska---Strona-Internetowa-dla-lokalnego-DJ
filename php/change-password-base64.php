<?php

require("connect.php");

$current_password = $_POST['form_password'];
$pass_hash = base64_encode($current_password);

$change_password = "UPDATE uzytkownicy SET pass = '$pass_hash' WHERE id = '1'";
$result = $conn->query($change_password);

 header('Location: dj-dedykacje.php');
?>