<?php

require("connect.php");

$user_password = $_POST['form_password'];
$pass_hash = base64_encode($user_password);

$sql = "SELECT * FROM uzytkownicy WHERE pass='$pass_hash'";

$wynik = $conn->query($sql);


	if($res=mysqli_fetch_array($wynik))
	{
			include("dedykacje.html");
		}
		else
		{
					$message = "Błędne hasło.\\nSpróbuj ponownie.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  include("dedykacje.php");
		}	

?>