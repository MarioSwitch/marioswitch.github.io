<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Jeux les plus joués - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="../../resources/styles/general.css">
		<?php include_once '../../resources/php/menu.php' ?>
	</head>
	<body>
		<?php insertMenu(); ?>
		<h1>Jeux les plus joués</h1>
		<p>
			Ci-dessous la liste des jeux auxquels j'ai le plus joué (au 26 novembre 2025).<br>
			Seuls les jeux comptabilisant plus de 30 heures sont mentionnés ici.<br>
			Les jeux en surbrillance sont ceux auxquels je joue activement, et qui peuvent donc avoir leur temps de jeu grandement augmenté depuis la dernière mise à jour.<br>
			Les jeux grisés ne sont plus mis à jour en raison de l'impossibilité de récupérer leur temps de jeu.
		</p>
		<table class="table-hidden">
			<tr>
				<th>Rang</th>
				<th>Jeu</th>
				<th>Plateforme(s)</th>
				<th>Temps de jeu</th>
				<th>Changement</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td><?= rank(1); ?></td>
				<td>The Longest Game Ever 2</td>
				<td>Mobile</td>
				<td>501 h <small>(26/11/2025)</small></td>
				<td>+ 1 h <small>(04/10/2025)</small></td>
				<td>D'après les succès du jeu</td>
			</tr>
			<tr class="off">
				<td><?= rank(); ?></td>
				<td>UNO</td>
				<td>Mobile</td>
				<td>383:17 <small>(19/10/2022)</small></td>
				<td>–</td>
				<td>D'après Game Launcher </td>
			</tr>
			<tr class="off">
				<td><?= rank(); ?></td>
				<td>Clash of Clans</td>
				<td>Mobile</td>
				<td>330:29 <small>(19/10/2022)</small></td>
				<td>–</td>
				<td>D'après Game Launcher</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Hatsune Miku: Project DIVA Mega Mix</td>
				<td>PC, Switch</td>
				<td>228:05 <small>(26/11/2025)</small></td>
				<td>+ 1:48 <small>(04/10/2025)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Hatsune Miku: Project DIVA Mega Mix (106:14)
					<br>Hatsune Miku: Project DIVA Mega Mix+ (104:18)
					<br>初音ミク Project DIVA MEGA39's (17:33)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>New Super Mario Bros. 2</td>
				<td>3DS</td>
				<td>203:00 <small>(13/07/2025)</small></td>
				<td>+ 0:07 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario Odyssey</td>
				<td>Switch</td>
				<td>194:22 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario Maker</td>
				<td>Wii U, Switch</td>
				<td>177:22 <small>(13/07/2025)</small></td>
				<td>+ 0:37 <small>(31/12/2024)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Super Mario Maker (128:30)
					<br>Super Mario Maker 2 (48:52)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>New Super Mario Bros. U</td>
				<td>Wii U</td>
				<td>173:27 <small>(13/07/2025)</small></td>
				<td>+ 1:38 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Fall Guys</td>
				<td>PC, Switch</td>
				<td>165:04 <small>(26/11/2025)</small></td>
				<td>+ 8:54 <small>(04/10/2025)</small></td>
				<td>
					<b>Comprend :</b>
					<br>PC (151:18)
					<br>Switch (13:46)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Timberborn</td>
				<td>PC</td>
				<td>150:48 <small>(26/11/2025)</small></td>
				<td>+ 0:06 <small>(04/10/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario 3D World</td>
				<td>Wii U</td>
				<td>148:40 <small>(13/07/2025)</small></td>
				<td>+ 0:46 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Yoshi's Woolly World</td>
				<td>Wii U, 3DS</td>
				<td>128:28 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(30/11/2024)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Yoshi's Woolly World (94:20)
					<br>Poochy & Yoshi's Woolly World (34:08)
				</td>
			</tr>
			<tr class="highlight">
				<td><?= rank(); ?></td>
				<td>Super Mario Galaxy 2</td>
				<td>Wii</td>
				<td>101:43 <small>(26/11/2025)</small></td>
				<td>+ 26:33 <small>(13/07/2025)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Wii (75:10)
					<br>Dolphin (26:33)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario 3D Land</td>
				<td>3DS</td>
				<td>98:56 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Paper Mario: The Origami King</td>
				<td>Switch</td>
				<td>88:12 <small>(04/10/2025)</small></td>
				<td>+ 18:13 <small>(13/07/2025)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Alexis (51:08)
					<br>MarioSw. (37:04)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario Galaxy</td>
				<td>Wii</td>
				<td>76:15 <small>(13/07/2025)</small></td>
				<td>+ 0:13 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Rayman Legends</td>
				<td>Switch</td>
				<td>70:43 <small>(13/07/2025)</small></td>
				<td>+ 0:02 <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td colspan="2">JEU MYSTÈRE</td>
				<td>69:20 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(18/04/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Mario Kart 8</td>
				<td>Wii U</td>
				<td>68:49 <small>(13/07/2025)</small></td>
				<td>+ 1:02 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr class="highlight">
				<td><?= rank(); ?></td>
				<td>NSFW Solitaire</td>
				<td>PC</td>
				<td>65:30 <small>(26/11/2025)</small></td>
				<td>+ 7:00 <small>(04/10/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Picross S5</td>
				<td>Switch</td>
				<td>63:41 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Logiart Grimoire</td>
				<td>PC</td>
				<td>58:54 <small>(13/07/2025)</small></td>
				<td>+ 0:12 <small>(07/09/2024)</small></td>
				<td></td>
			</tr>
			<tr class="off">
				<td><?= rank(); ?></td>
				<td>Celeste</td>
				<td>PC</td>
				<td>57:01 <small>(09/03/2024)</small></td>
				<td>–</td>
				<td>D'après les fichiers de sauvegarde</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Paper Mario: Color Splash</td>
				<td>Wii U</td>
				<td>55:12 <small>(13/07/2025)</small></td>
				<td>+ 0:14 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Cars: Race-o-Rama</td>
				<td>DS</td>
				<td>51:51 <small>(13/07/2025)</small></td>
				<td>+ 0:06 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Go Vacation</td>
				<td>Switch</td>
				<td>50:44 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>shapez</td>
				<td>PC</td>
				<td>48:00 <small>(26/11/2025)</small></td>
				<td>+ 0:48 <small>(04/10/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Donkey Kong Country: Tropical Freeze</td>
				<td>Wii U</td>
				<td>46:15 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(01/02/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Temps Perdu</td>
				<td>Mobile</td>
				<td>41:54 <small>(04/10/2025)</small></td>
				<td>+ 0:03 <small>(13/07/2025)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Animal Crossing: New Horizons</td>
				<td>Switch</td>
				<td>40:05 <small>(13/07/2025)</small></td>
				<td>+ 0:06 <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Yoshi's Crafted World</td>
				<td>Switch</td>
				<td>38:02 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Super Mario Bros. Wonder</td>
				<td>Switch</td>
				<td>37:01 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(30/11/2024)</small></td>
				<td>
					<b>Comprend :</b>
					<br>Ryujinx (22:04)
					<br>Switch, MarioSw. (13:08)
					<br>Switch, Alexis (1:49)
				</td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>New Super Mario Bros.</td>
				<td>DS</td>
				<td>36:45 <small>(13/07/2025)</small></td>
				<td>+ 0:34 <small>(17/04/2023)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Kirby et le monde oublié</td>
				<td>Switch</td>
				<td>34:29 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
			<tr>
				<td><?= rank(); ?></td>
				<td>Minecraft</td>
				<td>Switch</td>
				<td>30:42 <small>(13/07/2025)</small></td>
				<td>Aucun <small>(31/12/2024)</small></td>
				<td></td>
			</tr>
		</table>
	</body>
</html>