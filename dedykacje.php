<?php

	session_start();
	
	if (isset($_SESSION['zalogowany']))
	{
		header('Location: dedykacje-form.php');
		exit();
	}
	
?>
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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/css.css" rel="stylesheet">

</head>
<body class="bg-black tx-white">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom changecolor-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/Logo/LogoPNG.png" alt="Logo No-Name" high="180" , width="180"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" >
                        <a class="nav-link nav-text" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text " href="oferta.html">Oferta</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link nav-text " href="galeria.html">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="faq.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="kontakt.html">Kontakt</a>
                    </li>
                    <li class="nav-item"  id="current">
                        <a class="nav-link nav-text" href="dedykacje.php">Dedykacje</a>
                    </li>
					       <li class="nav-item"><a class="nav-link px-2" href="https://www.facebook.com/Duet.NoName/" target="_blank"><span class="fa fa-facebook"></span></a></li>
							<li class="nav-item"><a class="nav-link px-2" href="https://www.instagram.com/duetnoname/" target="_blank"><span class="fa fa-instagram"></span></a></li>
							<li class="nav-item"><a class="nav-link px-2" href="#"><span class="fa fa-youtube"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Title -->
    <section>
            <container>
					<div class="naglowek">
						<img src="img/test1.jpg" class="" alt="DJ Slask" >
						</div>
				<hr class="hr-style">
            </container>
    </section>

    <!--Description -->
    <section>
	<div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <h2 class="display-4 text-center gold_text">Podaj hasło dostępu.</h2>
                            <h3>Duet No-Name wielokrotnie poda hasło w trakcie trwania imprezy.</h3>
                            <br>
							<p>Zabieg ten jest konieczny aby uniknąć niechcianych wejść ludzi nieuczestniczących w zabawie. Za utrudnienia przepraszamy.</p>
                        </div>
                    </div>
                </div>
				</div>
    </section>

								<div class="container">
									<div class="row align-items-center">
										<img src="img/maska2.png" class="" alt="DJ Slask" height="280" width="560">
										<div class="col-6 col-md-3 mx-auto">
											<div class="text-center">
													<form id="" method="post" action="check-password.php" role="form">
													<input type="password" name="form_password" id="form_password" class="form-control" placeholder="Hasło" >
													<button class="btn contact-button" type="submit">WEJDŹ</button>
												</form>	
												<?php
												if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
												?>
											</div>
										</div>
											
									</div>
								</div>
								

<!-- Footer -->
    <footer class="py-3 bg-black bg-black-shadow ">
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">

                    </div>
                    <div class="col-xl-4 footer-social text-center">

                        <a href="https://www.facebook.com/Duet.NoName/" target="_blank"><img class="footer-social rotate" src="img/icon/facebook.png" hight="75" width="75"></a>
                        <a href="#" target="_blank"><img class="footer-social rotate" src="img/icon/youtube.png" hight="75" width="75"></a>
                        <a href="https://www.instagram.com/duetnoname/" target="_blank"><img class="footer-social rotate" src="img/icon/instagram.png" hight="75" width="75"></a>
                    </div>
                    <div class="col-xl-4 gold_text">

                        <b><p class="text-center font-size20"> Zadwoń<br> 514-045-755</p></b>

                    </div>
                </div>
        </section>
    </footer>
</body>

</html>
