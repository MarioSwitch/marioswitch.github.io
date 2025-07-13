<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Longest Game Ever 2 - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="../../resources/styles/general.css">
		<?php include_once '../../resources/php/menu.php' ?>
	</head>
	<body>
		<?php insertMenu(); ?>
		<h1>The Longest Game Ever 2</h1>
		<p>
			The Longest Game Ever 2 (abrégé TLGE2) est un jeu de rôles sorti sur Android en bêta le <abbr title="Source : https://discord.com/channels/571664895414763530/571673632812564482/1363134858540613824">19 avril 2019</abbr>, et officiellement le 2 juin de la même année.<br>
			Le jeu est fait pour être très long et ennuyant (comme le nom "Le jeu le plus long de tous les temps 2" l'indique).<br>
			Il comporte 9 082 niveaux (4 541 niveaux en normal et autant en difficile), des boss (qui reprennent les concepts des niveaux en plus difficile) ainsi que des succès.
		</p>
		<br>
		<h2>Limites et statistiques (au 13 juillet 2025)</h2>
		<p>
			Sur environ 286 275 joueurs<sup>[1]</sup>, au moins 196 personnes<sup>[2]</sup> ont terminé tous les niveaux, et <b>un seul</b> a obtenu tous les points d'expérience (73 329<sup>[3]</sup>).<br>
			En effet, <i>romain22222</i> a débloqué son dernier succès le 1<sup>er</sup> octobre 2024, et devient le premier et seul joueur à terminer le jeu à 100 %<sup>[4]</sup>.<br>
			<br>
			Je suis le 97<sup>e</sup> / 146<sup>e</sup><sup>[5]</sup> à avoir terminé tous les niveaux et 10<sup>e</sup> / 12<sup>e[5]</sup> en nombre d'XP (70 394 / 73 379, rang 165).<br>
			<br>
			<sup>[1]</sup> Basé sur le fait que je sois 146<sup>e</sup> et dans le top 0,0510 %. 146/0,000510 = 286 275.<br>
			<sup>[2]</sup> 196 personnes au 21 avril 2024, selon ce message : <a href="https://discord.com/channels/571664895414763530/571673632812564482/1231608721113612368">https://discord.com/channels/571664895414763530/571673632812564482/1231608721113612368</a><br>
			<sup>[3]</sup> Le nombre de points d'expérience maximum se situe en réalité entre 73 329 et 73 379 à cause de mises à jour ayant inséré des décalages pour certains joueurs.<br>
			<sup>[4]</sup> Concernant la version 1.4.27 (dernière version à ce jour, publiée le 1<sup>er</sup> octobre 2023). De futures mises à jour ajoutant du nouveau contenu pourraient être publiées, et ainsi lui « retirer » le 100 %.<br>
			<sup>[5]</sup> Classement selon Google Play Jeux / selon le jeu lui-même<br>
		</p>
		<br>
		<h2>Classement Google Play Jeux (au 13 juillet 2025)</h2>
		<table class="table-hidden">
			<tr>
				<th>Rang</th>
				<th>Joueur</th>
				<th>Points XP</th>
				<th>Reste</th>
				<th>Reste<br><abbr title="Sondage réalisé sur Discord le 21 avril 2025">(sondage)</abbr></th>
			</tr>
			<tr>
				<td><s><?php echo rank(1); ?></s></td>
				<td><s>SAGEPAPI</s></td>
				<td><s>2 000 000 244</s></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><s><?php echo rank(); ?></s></td>
				<td><s>LiranP</s></td>
				<td><s>90 110</s></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(1); ?></td>
				<td>IkeaPoutre</td>
				<td>73 354</td>
				<td>25</td>
				<td><abbr title="Explorateur IV (5)&#xa;Zombie enterré (5)&#xa;Voyageur VI (5)&#xa;Premième (10)">25</abbr></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>romain22222</td>
				<td>73 329</td>
				<td>Terminé à 100 %<br><small>(1<sup>er</sup> oct. 2024)</small></td>
				<td>Terminé à 100 %<br><small>(1<sup>er</sup> oct. 2024)</small></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>LybLyb8</td>
				<td>73 024</td>
				<td><?php echo remaining(73024) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>JSw1zard</td>
				<td>72 849</td>
				<td><?php echo remaining(72849) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>L'HeureuxTraité</td>
				<td>72 614</td>
				<td><?php echo remaining(72614) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Thebluestone</td>
				<td>72 534</td>
				<td><?php echo remaining(72534) ?></td>
				<td><abbr title="Simon hardcore 6 (320)&#xa;&#xa;Explorateur IV (5)&#xa;Zombie enterré (5)&#xa;Machine à clics (5)&#xa;Lord de la confrérie des boutons (5)&#xa;Voyageur VI (5)">345</abbr></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Cadaeib65</td>
				<td>72 164</td>
				<td><?php echo remaining(xp: 72164) ?></td>
				<td><abbr title="Métronome chrono-clic 3 à 6 (160 + 190 + 220 + 500)&#xa;&#xa;Explorateur IV (5)&#xa;Zombie enterré (5)&#xa;Machine à clics (5)&#xa;Lord de la confrérie des boutons (5)&#xa;Voyageur IV (100)&#xa;Voyageur V (5)&#xa;Voyageur VI (5)&#xa;Pipelette III (5)&#xa;Premième (10)">1 215</abbr></td>
			</tr>
			<tr class="highlight">
				<td><?php echo rank(); ?></td>
				<td>MarioSwitch2020</td>
				<td>70 394</td>
				<td>2 985</td>
				<td><abbr title="Métronome chrono-clic 3 à 6 (160 + 190 + 220 + 500)&#xa;Simon hardcore 2 à 6 (160 + 180 + 200 + 260 + 320)&#xa;&#xa;Boss Fighter IX (500)&#xa;Explorateur IV (5)&#xa;Zombie (200)&#xa;Zombie enterré (5)&#xa;Machine à clics (5)&#xa;Lord de la confrérie des boutons (5)&#xa;Voyageur V (5)&#xa;Voyageur VI (5)&#xa;Érudit de la magie (50)&#xa;Pipelette III (5)&#xa;Premième (10)">2 985</abbr></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>MMorgante</td>
				<td>70 324</td>
				<td><?php echo remaining(70324) ?></td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Antoine1804</td>
				<td>70 309</td>
				<td><?php echo remaining(70309) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>SpaceMark</td>
				<td>70 284</td>
				<td><?php echo remaining(70284) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Kamisamiaw</td>
				<td>70 204</td>
				<td><?php echo remaining(70204) ?></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>archeacnos</td>
				<td>70 129</td>
				<td><?php echo remaining(70129) ?></td>
				<td><abbr title="Flappy Penguin 6 (300)&#xa;Concierge 3 (500)&#xa;Bibliothécaire TLGE 6 (280)&#xa;Ok Guugle 3 à 6 (40 + 95 + 140 + 120)&#xa;Simon hardcore 2 à 6 (160 + 180 + 200 + 260 + 320)&#xa;&#xa;Boss Fighter IX (500)&#xa;Explorateur IV (5)&#xa;Zombie enterré (5)&#xa;Machine à clics (5)&#xa;Lord de la confrérie des boutons (5)&#xa;Voyageur V (5)&#xa;Voyageur VI (5)&#xa;Pipelette III (5)">3 130</abbr></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>ArthurOuvrard49</td>
				<td>69 419</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Qennor</td>
				<td>69 074</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Guilarai</td>
				<td>68 894</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>NovaTuRbO</td>
				<td>68 384</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Demurah</td>
				<td>67 664</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>tobbug42</td>
				<td>67 359</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Priscillia96</td>
				<td>66 074</td>
				<td></td>
			</tr>
			<tr>
				<th colspan="4">▲ Accès au salon #vip du serveur Discord ▲</th>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>razeuqla</td>
				<td>66 039</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>Gamefreak8376</td>
				<td>65 664</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>DragonsHunter4</td>
				<td>65 541</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>BordhellickQcsn</td>
				<td>65 334</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>akoolguy</td>
				<td>61 942</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>SkuutAlien</td>
				<td>61 654</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo rank(); ?></td>
				<td>UniqueStone47712</td>
				<td>60 579</td>
				<td></td>
			</tr>
			<tr>
				<th colspan="2"></th>
				<th>≥ 60 000</th>
				<th></th>
			</tr>
		</table>
	</body>
</html>