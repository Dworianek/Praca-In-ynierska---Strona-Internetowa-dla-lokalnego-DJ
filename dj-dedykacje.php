<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Duet No-Name</title>
  <link rel="shortcut icon" href="img/icon/icon.png" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/css.css" rel="stylesheet">

</head>
<body class="bg-black">

    

	  <section>
  <div class="dj_dedication">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="p-5">
            <h1 class="display-4 text-center gold_text" >LISTA DEDYKACJI NA IMPREZĘ</h1>
          </div>
		 </div>
        </div>
      </div>
    </div>
  </section>

   <div class="row">
            <div class="col-md-6 password_text">
              <p> Przed każdą imprezą zaleca się zmianę hasła dostepu umożliwiającego dedykację</p>
              </div>
            </div>
</div>
<form id="" method="post" action="change-password.php" role="form">
	  <div class="row align-items-center change_password">
            <div class="col-xl-2">
              <div class="form-group">
                <label for="form_password"></label>
                <input id="form_password" type="text" name="form_password" class="form-control" placeholder="Nowe hasło *" required="required" data-error="Proszę podaj swoje imię." minlength="6" maxlength="20">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-xl-2">
              <input type="submit"  class="btn btn-success btn-send password_button" value="Zmień hasło">
            </div>
			<hr class="hr-style-right">
      </div>
</form>


 <?php
			
			$conn = new mysqli("localhost", "adidwo_noname", "pasio470", "adidwo_noname") or die("Błąd");
			
			$conn -> query ('SET NAMES utf8');
			$conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
			
			$wynik = $conn->query("SELECT * FROM dedykacje");
			
			
			if($wynik->num_rows > 0){
				
				echo "<table>";
				echo "<tr>";
				echo "<th>Numer</th>";
				echo "<th>Dla kogo dedykacja</th>";
				echo "<th>Od kogo dedykacja</th>";
				echo "<th>Tytuł utworu</th>";
				echo "<th>Autor utworu</th>";
				echo "<th>Link do piosenki</th>";
				echo "<th>Dodatkowy opis</th>";
				echo "</tr>";
				
				while( $wiersz = $wynik->fetch_assoc() ){
					echo "<tr>";					
					echo "<td>" . $wiersz["id"]    . "</td>";
					echo "<td>" . $wiersz["odkogo"] . "</td>";
					echo "<td>" . $wiersz["dlakogo"] . "</td>";
					echo "<td>" . $wiersz["tytul"] . "</td>";
					echo "<td>" . $wiersz["autor"] . "</td>";
					echo" <td><a target=_blank href=". $wiersz["link"] .">". $wiersz["link"] ."</a></td>";
					echo "<td>" . $wiersz["opis"] . "</td>";
					echo "</tr>";
				}
				
				echo "</table>";
				
			}else {
				echo "<p style='color:white; text-align:center; font-size:40px; '>Lista dedykacji aktualnie jest pusta";

				}
			
			$conn->close();
		
 ?>
 
 <div class="container">
 <form id="" method="get" action="remove-allrecord.php" role="form">
	  <div class="row align-items-center remove_record">
            <div class="col-xl-12">
                         <input type="submit" class="btn btn-success btn-send remove_button" value="Wyczyść dedykację">
            </div>
      </div>
</form>
 </div>

</body>

</html>
