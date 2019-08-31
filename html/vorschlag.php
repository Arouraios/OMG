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
			<div class="nav-wrapper container">
				<a href="../index.html"><img src="../images/OMG.png" alt="OMG" heigt=5% width=5%></img></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="../index.html">Startseite</a></li>
					<li><a href="./team.html">Das Team</a></li>
					<li><a href="./termine.html">Termine</a></li>
					<li class ="active"><a href="./vorschlag.php">Thema vorschlagen</a></li>
					<li><button type="button" name="dark_light" onclick="darker()" title="Toggle dark/light mode">🌛</button></li>
				</ul>
				<ul id="nav-mobile" class="sidenav">
					<li class="grey grey-text"><a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>a</li>
					<li><a href="../index.html" class="white-text">Startseite</a></li>
					<li><a href="./team.html" class="white-text">Das Team</a></li>
					<li><a href="./termine.html" class="white-text">Termine</a></li>
					<li class ="active"><a href="./vorschlag.php" class="white-text">Thema vorschlagen</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav></header>

		<main>
			<div class="section no-pad-bot" id="index-banner">
				<div class="container">
					<br><br>
					<h1 class="header center orange-text">Feedback</h1>
					<div class="row center">
						<h5 class="header col s12 light">Wenn ihr Verbesserungsvorschläge oder Ideen für weitere Themen habt, dann schreibt diese einfach in das Feld!</h5>
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row center">
				<form class="col s12" method="post" action="vorschlag.php">
					<div class="input-field row center">
						<input id="vorschlag" name="vorschlag" class="materialize-textarea" type="text"></input>
						<label for="vorschlag">Vorschlag:</label>
					</div>
					<button type="submit" class="btn-large waves-effect waves-light orange" onClick="save()"><i class="material-icons right">chevron_right</i>Senden</button>
					<?php
					if(isset($_POST['vorschlag']) && !empty($_POST['vorschlag']))
					{
						$path = '../text/feedback.txt';
						$file = fopen($path, 'a') or die('could not open file');
						$vorschlag = 'Feedback vom '.date('l j n Y H:i:s') . ': ' . $_POST['vorschlag'].PHP_EOL;
						fwrite($file, $vorschlag) or die("could not write to file");
						fclose($file);
						$empfaenger = 'omg-jetztsindwirdran@web.de';
						$betreff = 'Neues Feedback vom '.date('l j n Y H:i:s');;
						$nachricht = $vorschlag;
						$header = 'From: OMG-Website' . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
						mail($empfaenger, $betreff, $nachricht, $header);
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
		<script>
			function save(){
				var text = document.getElementById("vorschlag");
				var txtFile = new File("/text/feedback.txt");
				txtFile.writeln(text);
				txtFile.close();
			}
			function test(){
			dateisystem.root.getFile("/text/feedback.txt", {}, function(datei){
					dateisystem.root.getDirectory("/text/", {}, function(verzeichis){
						datei.moveTo(verzeichnis);
					});
				});
			}
		</script>
		<script>
			document.body.style.backgroundColor = sessionStorage.getItem('bg');
			document.body.style.color = sessionStorage.getItem('cc');
			function darker() {
				if ( sessionStorage.getItem('bg') === 'rgb(255, 255, 255)') {
					sessionStorage.setItem('bg', 'rgb(40, 40, 40)');
					sessionStorage.setItem('cc', '#777');
				}
				else if (sessionStorage.getItem('bg') == null || undefined) {
					sessionStorage.setItem('bg', 'rgb(40, 40, 40)');
					sessionStorage.setItem('cc', '#777');
				}
				else if( sessionStorage.getItem('bg') === 'rgb(40, 40, 40)') {
					sessionStorage.setItem('bg', 'rgb(255, 255, 255)');
					sessionStorage.setItem('cc', '#333');
				}
				document.body.style.backgroundColor = sessionStorage.getItem('bg');
				document.body.style.color = sessionStorage.getItem('cc');
			}
		</script>
	</body>
</html>
