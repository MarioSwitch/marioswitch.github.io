<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Accueil - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="resources/styles/general.css">
		<?php include_once 'resources/php/menu.php' ?>
		<?php include_once 'resources/php/functions.php' ?>
	</head>
	<body>
		<?php insertMenu(); ?>
		<h1>Accueil</h1>
		<h2>Bienvenue sur le site de MarioSwitch !</h2>
		<p>
			Bonjour et bienvenue sur le site de MarioSwitch.<br>
			Il a été créé en <a href="https://fr.wikipedia.org/wiki/HTML">HTML</a>/<a href="https://fr.wikipedia.org/wiki/Cascading_Style_Sheets">CSS</a>/<a href="https://fr.wikipedia.org/wiki/JavaScript">JS</a> par MarioSwitch en utilisant <a href="https://fr.wikipedia.org/wiki/Visual_Studio_Code">Visual Studio Code</a> (sans utiliser d'éditeur visuel).<br>
			Depuis la version 2.0 (15 décembre 2022), du <a href="https://fr.wikipedia.org/wiki/PHP">PHP</a> est également exécuté, notamment pour gérer la barre de menu et calculer automatiquement les statistiques du site.<br>
			Le site est hébergé sur <a href="https://fr.wikipedia.org/wiki/OVHcloud">OVH Cloud</a> (<a href="https://fr.wikipedia.org/wiki/GitHub">GitHub</a> jusqu'au 15 décembre 2022).<br>
			Cependant, le code source est toujours disponible sur le <a href="https://github.com/MarioSwitch/marioswitch.github.io/">dépôt "marioswitch.github.io"</a> sur GitHub.<br>
			Toutes les pages ont été vérifiées par le <a href="https://validator.w3.org/nu/">validateur HTML5</a> du <a href="https://fr.wikipedia.org/wiki/World_Wide_Web_Consortium">W3C</a> (au 29 avr. 2022). Le site respecte donc les standards de ce langage.<br>
			Si vous remarquez un problème ou une erreur, vous pouvez le signaler <a href="https://github.com/MarioSwitch/marioswitch.github.io/issues">ici</a>. Vous pouvez également y soumettre des suggestions d'amélioration.
		</p>
		<br>
		<h2>Statistiques & dates clés</h2>
		<table class="table-hidden">
			<tr>
				<th>Début du projet</th>
				<td>8 novembre 2021</td>
			</tr>
			<tr>
				<th>Mise en ligne</th>
				<td>18 janvier 2022</td>
			</tr>
			<tr>
				<th>Acquisition du domaine</th>
				<td>4 février 2022</td>
			</tr>
			<tr>
				<th>Hébergement web</th>
				<td>15 décembre 2022</td>
			</tr>
			<tr>
				<th>Version</th>
				<td>2.2<br>(9 mars 2024)</td>
			</tr>
			<tr>
				<th><abbr title="Calculé automatiquement en PHP.">Pages publiques</abbr></th>
				<td><?php totalPages(); ?> (<?php codeSize(); ?>)</td>
			</tr>
			<tr>
				<th><abbr title="Taille totale du site (y compris les pages privées), hors predictions.marioswitch.fr. Calculé automatiquement en PHP.">Taille totale du site</abbr></th>
				<td><?php totalSize(); ?></td>
			</tr>
			<tr>
				<th>Temps passé</th>
				<td>60+ heures</td>
			</tr>
		</table>
		<br>
		<h2>Notes de mises à jour</h2>
		<table class="table-hidden">
			<tr>
				<th>2.2</th>
				<td>9 mars 2024</td>
				<td>Changement d'éditeur de code<br>Ajout des dates des versions</td>
			</tr>
			<tr>
				<th>2.1</th>
				<td>26 avril 2023</td>
				<td>Mise en place de Git<br>Mise à jour du dépôt GitHub</td>
			</tr>
			<tr>
				<th>2.0<br>Hébergement web</th>
				<td>15 décembre 2022</td>
				<td>Ajout de PHP<br>Ajout d'une barre de menu</td>
			</tr>
			<tr>
				<th>1.5</th>
				<td>29 avril 2022</td>
				<td>Respect des règles HTML5<br>Réorganisation du site</td>
			</tr>
			<tr>
				<th>1.4</th>
				<td>9 avril 2022</td>
				<td>Ajout des DOCTYPE et des langues</td>
			</tr>
			<tr>
				<th>1.3</th>
				<td>19 février 2022</td>
				<td>Les tableaux possèdent désormais une "class"</td>
			</tr>
			<tr>
				<th>1.2</th>
				<td>11 février 2022</td>
				<td>Amélioration de la CSS</td>
			</tr>
			<tr>
				<th>1.1</th>
				<td>7 février 2022</td>
				<td>Ajout d'une CSS pour uniformiser le style</td>
			</tr>
			<tr>
				<th>1.0<br>Domaine personnalisé</th>
				<td>4 février 2022</td>
				<td>Transfert du site vers <i>marioswitch.fr</i><br>Les versions ne changent plus à la màj d'une page</td>
			</tr>
			<tr>
				<th>Beta 2.0 - 2.1</th>
				<td>26 janvier - 2 février 2022</td>
				<td>Ajout de la page <i>Parcheesi</i><br>Améliorations diverses</td>
			</tr>
			<tr>
				<th>Beta 1.0 - 1.4<br>1<sup>re</sup> publication</th>
				<td>18 - 25 janvier 2022</td>
				<td>Mise en ligne du site<br>Ajout du réseau Speedrun.com<br>La police <i>Nunito</i> affecte tout le monde<br>Ajustements divers</td>
			</tr>
			<tr>
				<th>Alpha 3.0<br>MàJ technique</th>
				<td></td>
				<td>Mise en place de "class"<br>Ajout d'un logo<br>Renommage de la page en "Accueil"</td>
			</tr>
			<tr>
				<th>Alpha 2.0</th>
				<td></td>
				<td>Le fond du site est désormais noir<br>Ajout de numéros de versions et de notes de MàJ<br> Ajout d'icônes pour les réseaux<br>Ajouts & corrections diverses</td>
			</tr>
			<tr>
				<th>Alpha 1.0 - 1.3</th>
				<td></td>
				<td>Création du site & divers ajouts</td>
			</tr>
		</table>
		<hr>
		<p class="center">
			<a href="https://youtube.com/channel/UCP6sft2CrLn148rBknFT8yQ"><img src="resources/svg/youtube.svg" alt="YouTube" width=45 height=30></a>
			<a href="https://twitch.tv/marioswitch2020"><img src="resources/svg/twitch.svg" alt="Twitch" width=50 height=50></a>
			<a href="https://x.com/marioswitch2020"><img src="resources/svg/x.svg" alt="X (ex-Twitter)" width=40 height=40></a>
			<a href="https://discord.gg/xEFsH6x"><img src="resources/svg/discord.svg" alt="Discord" width=50 height=40></a>
			<a href="https://github.com/marioswitch"><img class="inverse" src="resources/svg/github.svg" alt="GitHub" width=40 height=40></a>
			<a href="https://speedrun.com/MarioSwitch"><img src="https://www.speedrun.com/images/1st.png" alt="Speedrun.com" width=45 height=40></a>
			<a href="https://play.google.com/store/apps/dev?id=6889444212492017160"><img src="resources/svg/google-play.svg" alt="Google Play" width="40" height="40"></a>
			<br>2022-2025 MarioSwitch
		</p>
	</body>
</html>