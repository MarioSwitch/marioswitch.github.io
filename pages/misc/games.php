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
            Ci-dessous la liste des jeux auxquels j'ai le plus joué (au 31 décembre 2024).<br>
            Seuls les jeux comptabilisant plus de 25 heures sont mentionnés ici.<br>
            Les jeux en surbrillance sont ceux auxquels je joue activement, et qui peuvent donc avoir leur temps de jeu grandement augmenté depuis la dernière mise à jour.
        </p>
        <table class="table-hidden">
            <tr>
                <th>Rang</th>
                <th>Jeu</th>
                <th>Plateforme(s)</th>
                <th>Temps de jeu</th>
                <th>Mise à jour</th>
                <th>Notes</th>
            </tr>
            <tr class="highlight">
                <td><?php echo rank(1); ?></td>
                <td>The Longest Game Ever 2</td>
                <td>Mobile</td>
                <td>491 h</td>
                <td>31 décembre 2024</td>
                <td>D'après les succès du jeu</td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>UNO</td>
                <td>Mobile</td>
                <td>383:17</td>
                <td>Octobre 2022</td>
                <td>D'après Game Launcher </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Clash of Clans</td>
                <td>Mobile</td>
                <td>330:29</td>
                <td>Octobre 2022</td>
                <td>D'après Game Launcher</td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>New Super Mario Bros. 2</td>
                <td>3DS</td>
                <td>202:53</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario Odyssey</td>
                <td>Switch</td>
                <td>194:22</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario Maker</td>
                <td>Wii U, Switch</td>
                <td>176:45</td>
                <td>31 décembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Super Mario Maker (127:53)
                    <br>Super Mario Maker 2 (48:52)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>New Super Mario Bros. U</td>
                <td>Wii U</td>
                <td>171:49</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Fall Guys</td>
                <td>PC, Switch</td>
                <td>151:10</td>
                <td>31 décembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Fall Guys PC (137:24)
                    <br>Fall Guys Switch (13:46)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario 3D World</td>
                <td>Wii U</td>
                <td>147:54</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Yoshi's Woolly World</td>
                <td>Wii U, 3DS</td>
                <td>128:28</td>
                <td>30 novembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Yoshi's Woolly World (94:20)
                    <br>Poochy & Yoshi's Woolly World (34:08)
                </td>
            </tr>
            <tr class="highlight">
                <td><?php echo rank(); ?></td>
                <td>Hatsune Miku: Project DIVA Mega Mix</td>
                <td>PC, Switch</td>
                <td>127:10</td>
                <td>31 décembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Hatsune Miku: Project DIVA Mega Mix (102:43)
                    <br>初音ミク Project DIVA MEGA39's (17:33)
                    <br>Hatsune Miku: Project DIVA Mega Mix+ (6:54)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario 3D Land</td>
                <td>3DS</td>
                <td>98:56</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario Galaxy</td>
                <td>Wii</td>
                <td>76:02</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario Galaxy 2</td>
                <td>Wii</td>
                <td>74:59</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Picross</td>
                <td>Switch</td>
                <td>72:53</td>
                <td>31 décembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Picross S5 (63:41)
                    <br>Picross S4 Demo (3:47)
                    <br>Picross S6 Demo (3:19)
                    <br>Picross S5 Demo (2:06)
                    <br>Picross S7 Demo (– h)
                    <br>Picross S8 Demo (– h)
                    <br><abbr title="Picross S Genesis & Master System Edition">PCSGMSE</abbr> Demo (– h)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Rayman Legends</td>
                <td>Switch</td>
                <td>70:41</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Mario Kart 8</td>
                <td>Wii U</td>
                <td>67:47</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td colspan="2">JEU MYSTÈRE</td>
                <td>64:20</td>
                <td>30 novembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Logiart Grimoire</td>
                <td>PC</td>
                <td>58:42</td>
                <td>7 septembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Celeste</td>
                <td>PC</td>
                <td>57:01</td>
                <td>9 mars 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Fichier principal (28:30)
                    <br>Speedruns (9:07)
                    <br>Spring Collab (9:01 (7:49 + 1:12))
                    <br>Celeste II (3:03)
                    <br>Far Away (2:49)
                    <br>B-Side Strawberries (2:45)
                    <br>Strawberry Jam Collab (1:17)
                    <br>NuttyNoon (29 min)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Paper Mario: Color Splash</td>
                <td>Wii U</td>
                <td>54:58</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Cars: Race-o-Rama</td>
                <td>DS</td>
                <td>51:45</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rankEq(); ?></td>
                <td>Paper Mario: The Origami King</td>
                <td>Switch</td>
                <td>51:02</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Go Vacation</td>
                <td>Switch</td>
                <td>50:44</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr class="highlight">
                <td><?php echo rank(); ?></td>
                <td>Donkey Kong Country: Tropical Freeze</td>
                <td>Wii U</td>
                <td>45:04</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Animal Crossing: New Horizons</td>
                <td>Switch</td>
                <td>39:59</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rankEq(); ?></td>
                <td>Yoshi's Crafted World</td>
                <td>Switch</td>
                <td>38:02</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Temps Perdu</td>
                <td>Mobile</td>
                <td>37:14</td>
                <td>Octobre 2022</td>
                <td>D'après Game Launcher</td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Super Mario Bros. Wonder</td>
                <td>Switch</td>
                <td>37:01</td>
                <td>30 novembre 2024</td>
                <td>
                    <b>Comprend :</b>
                    <br>Super Mario Bros. Wonder (Ryujinx) (22:04)
                    <br>Super Mario Bros. Wonder (Switch, MarioSw.) (13:08)
                    <br>Super Mario Bros. Wonder (Switch, Alexis) (1:49)
                </td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>New Super Mario Bros.</td>
                <td>DS</td>
                <td>36:11</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Kirby et le monde oublié</td>
                <td>Switch</td>
                <td>34:29</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rankEq(); ?></td>
                <td>Minecraft</td>
                <td>Switch</td>
                <td>30:42</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>L'atelier du jeu vidéo</td>
                <td>Switch</td>
                <td>28:21</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rank(); ?></td>
                <td>Captain Toad: Treasure Tracker</td>
                <td>Wii U</td>
                <td>26:49</td>
                <td>17 avril 2023</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo rankEq(); ?></td>
                <td>Nintendo Labo Toy-Con 3</td>
                <td>Switch</td>
                <td>25:08</td>
                <td>31 décembre 2024</td>
                <td></td>
            </tr>
        </table>
	</body>
</html>