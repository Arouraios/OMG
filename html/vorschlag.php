<!DOCTYPE html>
<html lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>OMG - Thema vorschlagen</title>

		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>

	<body>
		<header><nav class="grey lighten-1" role="navigation">
			<div class="nav-wrapper container"><a id="logo-container" href="../index.html" class="brand-logo">Startseite</a>
				<ul class="left hide-on-med-and-down">
					<li><a href="../index.html"></a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li><a href="./team.html">Das Team</a></li>
					<li><a href="./bisher.html">Bisherige Themen</a></li>
					<li class ="active"><a href="./vorschlag.php">Thema vorschlagen</a></li>
				</ul>
				<ul id="nav-mobile" class="sidenav">
					<li class="grey grey-text"><a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>a</li>
					<li><a href="../index.html" class="white-text">Startseite</a></li>
					<li><a href="./team.html" class="white-text">Das Team</a></li>
					<li><a href="./bisher.html" class="white-text">Bisherige Themen</a></li>
					<li class ="active"><a href="./vorschlag.php" class="white-text">Thema vorschlagen</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav></header>

		<main>
			<br><br><br>
			<div class="container">
			<div class="row center">
				<form class="col s12" method="post" action="vorschlag.php">
					<div class="input-field row center">
						<input id="vorschlag" name="vorschlag" class="materialize-textarea" type="text"></input>
						<label for="vorschlag">Vorschlag:</label>
					</div>
					<button type="submit" class="btn-large waves-effect waves-light orange"><i class="material-icons right">chevron_right</i>Senden</button>
					<?php
					if(isset($_POST['vorschlag']) && !empty($_POST['vorschlag']))
					{
						$file = '../vs.txt';
						$fh = fopen($file, 'a') or die('could not open file');
						$vorschlag = $_POST['vorschlag'].PHP_EOL;
						fwrite($fh, $vorschlag) or die("could not write to file");
						fclose($fh);
					}
					?>
				</form>
			</div>
			</div>
		</main>


		<footer class="page-footer orange">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Kontakt</h5>
						<p class="grey-text text-lighten-4">Fragen? Probleme? So erreichst du uns:</p>
					</div>
					<div class="col l3 s12">
					<ul>
						<li><p class="white-text">Jugendzentrum Am Eckbusch</p></li>
						<li><p class="white-text">Am Eckbusch 27</p></li>
						<li><p class="white-text">42113 Wuppertal</p></li>
					</ul>
					</div>
					<div class="col l3 s12">
					<ul>
						<li><u><a class="white-text" href="mailto:omg-jetztsindwirdran.de">omg-jetztsindwirdran@web.de</a></u></li>
						<li><p class="white-text" href="tel:0202 76924842">0202 76924842</p></li>
						<li><u><a class="white-text" href="./vorschlag.php">Feedback/Vorschlag einreichen</a></u></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
			<div class="container">
				Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
			</div>
		</footer>

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="../js/materialize.js"></script>
		<script src="../js/init.js"></script>

	</body>
</html>
