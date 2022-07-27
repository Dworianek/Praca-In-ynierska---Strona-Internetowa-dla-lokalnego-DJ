<?php
	
	session_start();
	
require("connect.php");

	$user_password = $_POST['form_password'];
	
	//Zabezpieczenie przed wstrzykiwaniem
	$user_password = htmlentities($user_password,ENT_QUOTES,"UTF-8");
	
	$wynik = $conn->query("SELECT * FROM uzytkownicy");	
	$wiersz = $wynik->fetch_assoc() ;
			
if (password_verify($user_password, $wiersz["pass"])) {
	$_SESSION['zalogowany'] = true;
	include("dedykacje-form.php");
}		
else
		{
						$_SESSION['blad'] = '<span style="color:#D5AD6D">Nieprawidłowy login lub hasło!</span>';
  include("dedykacje.php");
		}
		

?>


			