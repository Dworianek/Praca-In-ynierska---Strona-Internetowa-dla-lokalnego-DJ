<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$party_type = $_POST['type'];
$message = $_POST['message'];


$email_from = 'Duet No-Name Formularz kontaktowy';
$email_subject = "Nowa wiadomosc ze strony Duet-Noname.pl";

$email_body = "Imie i Nazwisko klienta: $name $surname\n".
"E-mail: $visitor_email.\n".
"Miejscowosc: $city.\n".
"Jaka impreza: $party_type.\n".
"Numer kontaktowy: $phone.\n".
"\n".
" $message.\n";

$to = "kontakt@duetnoname.pl";
$headers = "From: $email_from \r\n";
$headers .= "Odpisz : $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: kontakt.html");
?>