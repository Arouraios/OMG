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
					<li><a href="./vorschlag.html">Thema vorschlagen</a></li>
				</ul>
				<ul id="nav-mobile" class="sidenav">
					<li><a href="#">Navbar Link</a></li>
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
					<!--span class="helper-text" data-error="wrong" data-success="right"></span-->
				</div>
				<input type="submit" class="btn waves-effect waves-light orange" value="Senden"></input>
				<?php
						$file = '../vs.txt';
						$fh = fopen($file, 'a') or die('could not open file');
						$vorschlag = print_r($_POST['vorschlag'])+'\n';
						fwrite($fh, $vorschlag);
						fclose($fh);
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
						<p class="grey-text text-lighten-4">Wir sind eine Gruppe von Schülern und Erwachsenen die gemeinsam ein neues Gottesdienstformat für unsere Gemeinde aufbauen</p>
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
						<li><u><a class="white-text" href="mailto:xyz@xyz.de">xyz@xyz.de</a></u></li>
						<li><p class="white-text">0202 76924842</p></li>
						<li><u><a class="white-text" href="html/vorschlag.html">Feedback/Vorschlag einreichen</a></u></li>
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
