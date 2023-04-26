<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GeoGuessr - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="../../resources/styles/general.css">
        <?php include_once '../../resources/php/menu.php' ?>
    </head>
	<body>
        <?php insertMenu(); ?>
		<h1>GeoGuessr</h1>
		<p>
            <a href="https://www.geoguessr.com">GeoGuessr</a> est un jeu de géographie consistant à retrouver, sur la carte du monde, sa localisation à partir de panoramas <a href="https://fr.wikipedia.org/wiki/Google_Street_View">Google StreetView</a> (ou <a href="https://fr.wikipedia.org/wiki/Mapillary">Mapillary</a> pour la <a href="https://www.geoguessr.com/free">version gratuite</a>).<br>
            Les panneaux routiers et publicitaires, la langue, le paysage ou tout autre indice à l'écran permettent de déterminer cet endroit.<br>
            Il existe énormément de modes de jeux (ceux-ci sont listés et détaillés ci-dessous).<br>
            Le jeu étant régulièrement mis à jour, certaines informations peuvent avoir évolué depuis la dernière révision de cette page (le 13 janvier 2023).<br>
        </p>
        <br>
        <h2>Organisation du site</h2>
        <p>
            Le site se décompose en 4 parties :
        </p>
        <ul>
            <li><b><ins>Singleplayer (solo) :</ins></b> Page permettant d'accéder à différents modes de jeu jouables seul.</li>
            <li><b><ins>Multiplayer (multijoueur en ligne) :</ins></b> Page permettant de jouer seul contre d'autres personnes en ligne aux modes Battle Royale et Duels.</li>
            <li><b><ins>Party (multijoueur entre amis) :</ins></b> Page permettant de créer des "parties" (jusqu'à 100 personnes) et jouer entre amis à divers modes de jeu. Cependant, un de vos amis doit avoir un compte Pro afin de lancer les parties.</li>
            <li><b><ins>Quiz :</ins></b> Page permettant de créer et de jouer à des quiz.</li>
        </ul>
        <br>
        <h2>Singleplayer (solo)</h2>
        <p>
            5 modes de jeu sont disponibles dans cet onglet :
        </p>
        <ul>
            <li>Maps (cartes)</li>
            <li>The Daily Challenge (le défi du jour)</li>
            <li>Explorer Mode (mode explorateur)</li>
            <li>Streaks (séries)</li>
            <li>Pro Leagues (ligues Pro)</li>
            <li><abbr title="Ceci n'est pas un mode de jeu, il regroupe uniquement les parties commencées mais pas encore terminées.">Ongoing Games (parties en cours)</abbr></li>
        </ul>
        <br>
        <h3>Mode de jeu principal</h3>
        <p>
            Ce mode est celui joué lors du jeu sur des cartes (Maps), du défi du jour (The Daily Challenge), l'exploration (Explorer Mode) et les ligues Pro (Pro Leagues).<br>
            <br>
            Il consiste à retrouver 5 emplacements choisis aléatoirement dans une zone délimitée (le Monde, un pays ou une région particulière, etc.) ou parmi un panel créé manuellement (pour les cartes personnalisées).<br>
            Chaque emplacement peut rapporter jusqu'à 5 000 points, pour un total de 25 000 points.<br>
            Le nombre de points est déterminé en fonction de la distance entre l'emplacement réel et l'emplacement choisi. Plus la distance est faible, plus le nombre de points est important.<br>
            Le barème dépend aussi de la taille de la zone délimitée : plus la zone est grande, plus le barème est "souple" (distance plus grande pour le même nombre de points).<br>
            <br>
            Le défi du jour est en réalité une partie Monde choisie aléatoirement tous les jours et chaque manche est limitée à 3 minutes.<br>
            Le mode exploration consiste à faire les cartes de chaque pays et d'obtenir un maximum de points.<br>
            Pour ces deux modes, une médaille est attribuée selon le barème suivant : Bronze à partir de 5 000 points, Argent à partir de 15 000 points, Or à partir de 22 500 points et Platine à 25 000 points.<br>
            <br>
            Les ligues Pro sont des ligues qui peuvent être uniquement créées par des joueurs Pro.<br>
            Le créateur, au moment de créer sa ligue, détermine son titre, sa description, ses règles de jeu (limite de temps, droit à se déplacer, à zoomer...) ainsi que les cartes qu'il souhaite.<br>
            Ensuite, n'importe quel compte peut rejoindre sa ligue grâce au lien pour y participer.<br>
            Chaque fois qu'une partie est lancée, les joueurs inscrits peuvent y jouer et tous les points à trouver sont les mêmes pour tous.<br>
            À la fin d'une partie, le joueur avec le meilleur score marque 1 point. Celui avec le plus de points une fois toutes les parties terminées remporte la ligue. 
        </p>
        <br>
        <h3>Séries (Streaks)</h3>
        <p>
            Ce mode de jeu se divise en 2 types :<br>
            <br>
            Le mode Série de pays (Country Streaks) consiste à trouver <b>uniquement</b> le <abbr title="Certaines frontières étant discutées, certaines zones ne peuvent pas être sélectionnés (Taïwan, Palestine,...). Il est donc impossible de tomber dans ces régions dans ce mode de jeu.">pays</abbr> dans lequel l'emplacement se trouve.<br>
            À chaque bonne réponse, le score augmente de 1 et un nouvel emplacement est choisi.<br>
            Il n'y a donc pas de limite de score. Cependant, dès qu'une mauvaise réponse est donnée, la partie s'arrête.<br>
            <br>
            Dans le mode Série d'États américains (US State Streaks), les emplacements possibles sont limités aux États-Unis.<br>
            Cependant, il faut trouver l'État dans lequel l'emplacement se trouve.<br>
            Le score est comptabilisé de la même manière que pour la Série de pays.<br>
        </p>
        <br>
        <h2>Multiplayer (multijoueur en ligne)</h2>
        <p>
            5 modes de jeu sont disponibles dans cet onglet :
        </p>
        <ul>
            <li>ACW Tournaments (tournois)</li>
            <li>Competitive (compétitif)</li>
            <li>Battle Royale Countries (Battle Royale : pays)</li>
            <li>Battle Royale Distance (Battle Royale : distance)</li>
            <li>Duels (duels)</li>
        </ul>
        <br>
        <h3>Tournois (ACW Tournaments)</h3>
        <p>
            Ce mode est apparu en octobre 2022.<br>
            Les tournois se déroulent tous les mercredis à 20:00 CET (20:00 à l'heure française d'hiver et 21:00 à l'heure française d'été) et les inscriptions ouvrent 2 heures avant.<br>
            Suivant le score que vous avez en mode compétitif, vous participerez à un "tier" particulier du tournoi.<br>
            Pour chaque tier, 32 joueurs participent à 7 manches consécutives à élimination directe : pour gagner, il faut gagner 7 fois de suite !<br>
            Si vous gagnez, la récompense sera plus importante si vous êtes dans de meilleurs tiers.
        </p>
        <br>
        <h3>Compétitif (Competitive)</h3>
        <table class="table-visible float">
            <tr>
                <th>Notation</th>
                <th>Division</th>
                <th>Icône</th>
            </tr>
            <tr>
                <td>0-449</td>
                <td>Bronze</td>
                <td><img src="https://www.geoguessr.com/_next/static/images/rating-bronze-08009691512faa0c265b01743ff053c0.png" alt="Division Bronze" width=100 height=100></td>
            </tr>
            <tr>
                <td>450-674</td>
                <td>Argent</td>
                <td><img src="https://www.geoguessr.com/_next/static/images/rating-silver-c453660f9df60c05c4cd1c6aba036330.png" alt="Division Argent" width=100 height=100></td>
            </tr>
            <tr>
                <td>675-849</td>
                <td>Or</td>
                <td><img src="https://www.geoguessr.com/_next/static/images/rating-gold-b25d049413b602382076513251586849.png" alt="Division Or" width=100 height=100></td>
            </tr>
            <tr>
                <td>850-1099</td>
                <td>Maître</td>
                <td><img src="https://www.geoguessr.com/_next/static/images/rating-master-82ce69adbf6dabdd408f8ccd2e7befe8.png" alt="Division Maître" width=100 height=100></td>
            </tr>
            <tr>
                <td><abbr title="Même si le grade Champion est le dernier, le cercle indiquant la progression vers la division suivante est toujours actif et est complété à 1500. Il est également possible de dépasser les 1500 points.">1100+</abbr></td>
                <td>Champion</td>
                <td><img src="https://www.geoguessr.com/_next/static/images/rating-champion-ed5fec1b5adc69fb1370ea7f5fdc85b7.png" alt="Division Champion" width=100 height=100></td>
            </tr>
        </table>
        <p>
            Le mode compétitif est un mode apparu en mars 2022 en remplacement du mode <i>Carrière</i>.<br>
            Il se décompose en saisons. Chacune d'entre elles dure 8 semaines (soit environ 2 mois) et un classement général et personnel de celle-ci est présenté après la date de fin.<br>
            Chaque semaine est découpée en 2 temps : la phase de qualification (du lundi au jeudi) et la phase de jeu (du vendredi au dimanche).<br>
            Pour se qualifier, il faut récupérer <abbr title="75 dans les saisons Beta et Printemps (Spring), 50 dans la saison Été (Summer)">25</abbr> points de qualification en jouant aux 3 modes disponibles pendant la période de qualification.<br>
            <br>
            A chaque week-end, une phase de jeu est disponible.
            Pour progresser, il faut récupérer des points de saison. Pour ce faire, on peut jouer un maximum de <abbr title="10 dans les 2 premières saisons">5</abbr> parties par mode de jeu (soit <abbr title="30 dans les 2 premières saisons">15</abbr> parties au total).<br>
            A chaque partie, des points de placement sont distribués comme suit :
        </p>
        <ul style="margin-left: 280px;">
            <li>10 points pour le 1<sup>er</sup> (Battle Royale) ou gagner (Duels)</li>
            <li>7 points pour le 2<sup>e</sup> (Battle Royale)</li>
            <li>5 points pour le 3<sup>e</sup> (Battle Royale)</li>
            <li>3 points si un joueur de division OR n'est pas dans les 3 premiers, mais est le 1<sup>er</sup> joueur OR</li>
            <li>2 points si un joueur de division OR n'est pas dans les 3 premiers, mais est le 2<sup>e</sup> joueur OR</li>
            <li>1 point si un joueur de division OR n'est pas dans les 3 premiers, mais est le 3<sup>e</sup> joueur OR</li>
            <li>Aucun point pour les joueurs arrivant 4<sup>e</sup> et n'étant pas dans les 3 premiers joueurs OR (Battle Royale) ou perdre (Duels)</li>
        </ul>
        <p>
            Ensuite, les points sont multipliés par 1 (joueurs BRONZE) / 1,5 (joueurs ARGENT) / 2,5 (joueurs OR en Duels) / 4 (joueurs OR en Battle Royale, MAÎTRE et CHAMPION).<br>
            On peut donc récupérer un maximum de 600 points de saison par semaine (en étant 15 fois premier sur les 15 parties (soit 150 points de classement) et en étant MAÎTRE ou CHAMPION).<br>
            Il est également possible d'obtenir un trophée par week-end en ayant au moins 10 points de placement (trophée en bronze), 20 points de placement (trophée en argent), 30 points de placement (trophée en or).<br>
        </p>
        <br>
        <table class="table-visible float-clear">
            <tr>
                <th>Saison</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Changements notables</th>
            </tr>
            <tr>
                <td><img src="https://www.geoguessr.com/_next/static/images/season-icon-beta-796ca77d6f68c5561a029f5aae55d878.svg" alt="BETA" width=96 height=88></td>
                <td>7 mars 2022</td>
                <td>24 avril 2022</td>
                <td>Création du mode<br>Ajustements sur les Duels et les Battle Royale Distance</td>
            </tr>
            <tr>
                <td><img src="https://www.geoguessr.com/_next/static/images/season-logo-spring-af41eda6087bc4830ca4545cc2d23d92.png" alt="Spring" width=163 height=89></td>
                <td>2 mai 2022</td>
                <td>26 juin 2022</td>
                <td><abbr title="Les rangs de tous les joueurs ont été rapprochés de 500, qui est le point de départ.">Soft Reset</abbr><br>Ajout de la division Champion</td>
            </tr>
            <tr>
                <td><img src="https://www.geoguessr.com/_next/static/images/season-logo-summer-1a2a76250f38ec379d671c61cb4fb71c.png" alt="Summer"  width=122 height=45></td>
                <td>4 juillet 2022</td>
                <td>28 août 2022</td>
                <td>Nombre de parties réduites de 10 à 5 par type de jeu et par semaine<br>Nombre de points de qualifications réduits de 75 à 50<br>Matchmaking basé sur la division du joueur<br>Refonte de l'attribution des points</td>
            </tr>
            <tr>
                <td><img src="https://www.geoguessr.com/images/fit/192/96/ce/0/plain/seasonicon/e85e6d4fa100982139b3931a7a30c8bc.png" alt="Autumn" width="140" height="70"></td>
                <td>12 septembre 2022</td>
                <td>30 octobre 2022</td>
                <td>Nombre de points de qualifications réduits de 50 à 25</td>
            </tr>
            <tr>
                <td><img src="https://www.geoguessr.com/images/fit/192/96/ce/0/plain/seasonicon/4c320b59ae4f7a4ccf55bafc8fa75a11.png" alt="Winter" width="130" height="70"></td>
                <td>14 novembre 2022</td>
                <td>1<sup>er</sup> janvier 2023</td>
                <td>Pas de changements notables</td>
            </tr>
        </table>
        <br>
        <h3>Battle Royale : pays</h3>
        <p>
            La Battle Royale en "mode pays" consiste à deviner le pays de l'emplacement tiré au sort en un minimum de tentatives et en un temps limité.<br>
            À chaque bonne réponse, vous vous qualifiez pour la manche suivante. Les autres joueurs verront que vous êtes qualifiés, mais ne sauront pas quel pays est correct.<br>
            À chaque mauvaise réponse, vous perdez une vie et les autres joueurs verront votre tentative (ils sauront donc que ce n'est pas le pays que vous avez validé).<br>
            Si vous n'avez plus de vies, vous êtes disqualifié et avez perdu. Si personne ne trouve dans le temps imparti, les joueurs de la manche précédente peuvent rejouer.<br>
            Si un seul joueur trouve, la partie se termine et le joueur ayant trouvé remporte la partie.<br>
            Lors de la 1<sup>re</sup> partie, les 10 joueurs peuvent se qualifier. Cependant, à partir de la 2<sup>e</sup> manche, il y a une place en moins. La partie peut donc durer jusqu'à 9 manches.<br>
            S'il y a plus de joueurs que de places, dès que toutes les places sont remplies, le dernier joueur est automatiquement disqualifié, même s'il n'a pas perdu toutes ses vies.<br>
        </p>
        <br>
        <h3>Battle Royale : distance</h3>
        <p>
            La Battle Royale en "mode distance" consiste à avoir le point le plus proche de l'emplacement réel en un minimum de tentatives et en un temps limité.<br>
            Ici, il n'y a donc pas de bonne ou de mauvaise réponse, mais seulement un classement qui ordonne les joueurs selon leur écart avec le vrai emplacement.<br>
            Chaque point placé sur la carte vous fait perdre une tentative et le point que vous placez ne peut que diminuer votre écart. En effet, le point n'est comptabilisé que s'il est mieux placé que votre ancien meilleur point.<br>
            L'affichage sur la droite de l'écran indique votre classement ainsi que 2 distances qui sont l'écart avec la personne devant et derrière vous.<br>
            À la fin d'une manche, le joueur étant le plus loin de la position réelle est éliminé. Les autres joueurs récupèrent 1 tentative (par défaut) ou plus (si leur point est dans le bon pays, assez proche, etc.), dans la limite de 3 tentatives en stock.<br>
            
        </p>
        <br>
        <h3>Duels</h3>
        <p>
            Les duels ont pour but d'affronter un autre joueur en ligne.<br>
            Chaque joueur commence avec 6 000 PV. À chaque manche, le joueur le plus proche de l'emplacement exact inflige des dégâts à son adversaire.<br>
            Ces dégâts correspondent à la différence entre les points de chaque joueur. Les points sont calculés de la même façon que dans le mode de jeu principal.<br>
            Le joueur perdant tous ses PV en premier fait gagner son adversaire.<br>
            Les 3 premières manches se déroulent normalement. La 4<sup>e</sup> manche est une manche bonus : les points récupérés lors de celle-ci sont divisés par 4 avant d'être ajoutés aux PV respectifs de chaque joueur.<br>
            À partir de la 5<sup>e</sup> manche, les dégâts sont multipliés par 1.5 puis 2, 2.5, 3, 3.5, etc. jusqu'à ce qu'un joueur perde.<br>
        </p>
        <br>
        <h2>Multijoueur entre amis (Party)</h2>
        <p>
            Pour jouer entre amis, vous devez créer une "fête" (party) dans laquelle vous pourrez inviter d'autres joueurs via un lien. Seuls les joueurs Pro peuvent créer des fêtes.<br>
            <br>
            7 modes de jeu sont disponibles dans cet onglet :
        </p>
        <ul>
            <li>Live Challenges (challenges en temps réel)</li>
            <li>Battle Royale Countries (Battle Royale : pays)</li>
            <li>Battle Royale Distance (Battle Royale : distance)</li>
            <li>Duels (duels)</li>
            <li>Team Duels (duels en équipe)</li>
            <li>City Streaks (séries de villes)</li>
            <li>Bulls Eye (Dans le mille !)</li>
        </ul>
        <p>
            Seul le créateur de la fête (et s'il est encore Pro) peut commencer une partie et choisir les paramètres pendant que les autres joueurs rejoignent depuis le menu principal de la fête.<br>
            Le menu indique également les scores quotidiens et totaux de tous les joueurs.<br>
            <br>
            Les modes Battle Royale et Duels, étant les mêmes qu'en ligne, ne seront pas recopiées.<br>
            Merci de vous référer aux sections ci-dessus si vous souhaitez voir les détails.
        </p>
        <br>
        <h3>Challenges en temps réel (Live Challenges)</h3>
        <p>
            Ce mode n'est jouable qu'entre amis, dans une "party". Tous les membres de la "party" peuvent y participer (soit jusqu'à 100 joueurs).<br>
            <br>
            Il s'agit d'une adaptation du mode de jeu principal en multijoueur.<br>
            <br>
            Il y a tout de même quelques différences :
        </p>
        <ul>
            <li>Les joueurs doivent jouer simultanément. Le jeu attend que tous les joueurs aient validé (ou une fois le temps écoulé) avant de passer à la manche suivante.</li>
            <li>Le compte à rebours est affiché au centre de l'écran.</li>
            <li>Les joueurs ayant déjà validé leur proposition peuvent regarder les autres joueurs et voir le temps restant en attendant la manche suivante.</li>
        </ul>
        <br>
        <h3>Duels en équipe (Team Duels)</h3>
        <p>
            Les duels en équipe (jusqu'à 20 joueurs) se déroulent de la même manière que les duels classiques, mais en équipe.<br>
            <br>
                Il y a tout de même quelques changements :<br>
        </p>
        <ul>
            <li>Les équipes peuvent être déséquilibrées : vous pouvez aussi bien jouer à 10 contre 10 qu'à 19 contre 1.</li>
            <li>Chaque joueur peut faire sa proposition, mais seule la meilleure de chaque équipe compte. Le système de points est ensuite calqué sur les duels classiques.</li>
            <li>Il n'y a pas de manche bonus et les manches compte double, triple, etc. commencent dès la 4<sup>e</sup> manche.</li>
        </ul>
        <br>
        <h3>Séries de villes (City Streaks)</h3>
        <p>
            Dans ce mode, l'emplacement choisi est toujours dans une ville et un panel de villes possibles est affiché sur la carte de sélection.<br>
            Dans ces parties, l'objectif est de trouver un maximum de villes possibles dans un laps de temps limité.<br>
            Lors de certains paliers, le fait de valider la manche vous accorde un point de contrôle.
            À chaque mauvaise réponse, une vie vous est retirée. Quand vous n'avez plus de vies, vous redescendez au dernier point de contrôle.
        </p>
        <br>
        <h3>Dans le mille ! (Bulls Eye)</h3>
        <p>
            Ce mode ne peut être joué que de 2 à 6 joueurs. C'est un mode coopératif.<br>
            <br>
            Le principe est simple : obtenir le plus de points possible en 5 manches. Le maximum est de 25 000 points.<br>
            Pour ce faire, tous les joueurs doivent s'unir afin de trouver le maximum d'indices. Ils peuvent, par exemple, se téléporter aux autres.<br>
            À chaque manche, chaque joueur peut poser un cercle de diamètre au choix (parmi Ultra (<abbr title="Si la carte choisie n'est pas Monde, ce diamètre sera réduit.">~3 000 km</abbr>, 500 pts), Large (<abbr title="Si la carte choisie n'est pas Monde, ce diamètre sera réduit.">~1 000 km</abbr>, 1000 pts), Medium (<abbr title="Si la carte choisie n'est pas Monde, ce diamètre sera réduit.">~350 km</abbr>, 2000 pts), Small (<abbr title="Si la carte choisie n'est pas Monde, ce diamètre sera réduit.">~130 km</abbr>, 3000 pts), Mini (<abbr title="Si la carte choisie n'est pas Monde, ce diamètre sera réduit.">~40 km</abbr>, 4000 pts) et Bulls-Eye (~600 m, 5000 pts)).<br>
            En validant, le cercle devient vert si l'emplacement se situe à l'intérieur de celui-ci ou rouge s'il se situe à l'extérieur. En ayant cette information, les autres joueurs peuvent adapter leur proposition.<br>
            Une fois les cercles de tous les joueurs posés, le cercle vert le plus précis donne son nombre de points à la manche en cours.<br>
        </p>
        <br>
        <h2>Quiz</h2>
        <p>
            Les quiz peuvent contenir jusqu'à 50 manches.<br>
            Chaque manche peut-être une question (avec 2-4 réponses proposées et 1 seule correcte) ou un emplacement à trouver sur la carte, dure entre 10 secondes et 10 minutes et jusqu'à 5000 points peuvent être obtenus.<br>
            Pour les questions, les joueurs ayant eu faux ne gagnent aucun point tandis que ceux ayant répondu correctement gagnent des points en fonction de leur classement (le 1<sup>er</sup> à donner la bonne réponse gagne 5000 points puis les points baissent).<br>
            Pour les emplacements à deviner, la distribution des points se fait suivant la distance entre le point proposé et réel (voir le mode de jeu principal pour plus de détails).<br>
            <br>
            Pour jouer à un quiz, le créateur doit lancer la partie. Un code à 4 caractères ainsi qu'un Code QR est généré. Le code doit être saisi sur <a href="https://geoguessr.com/join">cette page</a>.<br>
            Chaque quiz peut être joué jusqu'à 1000 personnes simultanément.<br>
        </p>
        <br>
        <h2>Niveaux</h2>
        <p>
            Pour monter de niveau, il faut accumuler des points d'expérience en jouant à n'importe quel mode (sauf entre amis).<br>
            En fonction de votre niveau, un grade vous est attribué et un cadre est apposé à votre photo de profil.<br>
        </p>
        <br>
        <table class="table-visible">
            <tr>
                <th>Niveau</th>
                <th>Grade</th>
                <th>Cadre</th>
            </tr>
            <tr>
                <td>1-3</td>
                <td><i>Rookie Tourist</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-10.png" alt="Cadre Niveaux 1-10" width=100 height=100></td>
            </tr>
            <tr>
                <td>4-6</td>
                <td><i>Tourist</i></td>
            </tr>
            <tr>
                <td>7-9</td>
                <td><i>Master Tourist</i></td>
            </tr>
            <tr>
                <td>10-13</td>
                <td><i>Rookie Hiker</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-20.png" alt="Cadre Niveaux 11-20" width=100 height=100></td>
            </tr>
            <tr>
                <td>14-16</td>
                <td><i>Hiker</i></td>
            </tr>
            <tr>
                <td>17-19</td>
                <td><i>Master Hiker</i></td>
            </tr>
            <tr>
                <td>20-23</td>
                <td><i>Rookie Traveller</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-30.png" alt="Cadre Niveaux 21-30" width=100 height=100></td>
            </tr>
            <tr>
                <td>24-26</td>
                <td><i>Traveller</i></td>
            </tr>
            <tr>
                <td>27-29</td>
                <td><i>Master Traveller</i></td>
            </tr>
            <tr>
                <td>30-33</td>
                <td><i>Rookie Seeker</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-40.png" alt="Cadre Niveaux 31-40" width=100 height=100></td>
            </tr>
            <tr>
                <td>34-36</td>
                <td><i>Seeker</i></td>
            </tr>
            <tr>
                <td>37-39</td>
                <td><i>Master Seeker</i></td>
            </tr>
            <tr>
                <td>40-43</td>
                <td><i>Rookie Voyager</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-50.png" alt="Cadre Niveaux 41-50" width=100 height=100></td>
            </tr>
            <tr>
                <td>44-46</td>
                <td><i>Voyager</i></td>
            </tr>
            <tr>
                <td>47-49</td>
                <td><i>Master Voyager</i></td>
            </tr>
            <tr>
                <td>50-53</td>
                <td><i>Rookie Expeditioner</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-60.png" alt="Cadre Niveaux 51-60" width=100 height=100></td>
            </tr>
            <tr>
                <td>54-56</td>
                <td><i>Expeditioner</i></td>
            </tr>
            <tr>
                <td>57-59</td>
                <td><i>Master Expeditioner</i></td>
            </tr>
            <tr>
                <td>60-63</td>
                <td><i>Rookie Pathfinder</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-70.png" alt="Cadre Niveaux 61-70" width=100 height=100></td>
            </tr>
            <tr>
                <td>64-66</td>
                <td><i>Pathfinder</i></td>
            </tr>
            <tr>
                <td>67-69</td>
                <td><i>Master Pathfinder</i></td>
            </tr>
            <tr>
                <td>70-73</td>
                <td><i>Rookie Trailblazer</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-80.png" alt="Cadre Niveaux 71-80" width=100 height=100></td>
            </tr>
            <tr>
                <td>74-76</td>
                <td><i>Trailblazer</i></td>
            </tr>
            <tr>
                <td>77-79</td>
                <td><i>Master Trailblazer</i></td>
            </tr>
            <tr>
                <td>80-83</td>
                <td><i>Rookie Globetrotter</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-90.png" alt="Cadre Niveaux 81-90" width=100 height=100></td>
            </tr>
            <tr>
                <td>84-86</td>
                <td><i>Globetrotter</i></td>
            </tr>
            <tr>
                <td>87-89</td>
                <td><i>Master Globetrotter</i></td>
            </tr>
            <tr>
                <td>90-93</td>
                <td><i>Rookie Explorer</i></td>
                <td rowspan="3"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-100.png" alt="Cadre Niveaux 91-100" width=100 height=100></td>
            </tr>
            <tr>
                <td>94-96</td>
                <td><i>Explorer</i></td>
            </tr>
            <tr>
                <td>97-99</td>
                <td><i>Master Explorer</i></td>
            </tr>
            <tr>
                <td>100-109</td>
                <td><i>Master Explorer Pro</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-110.png" alt="Cadre Niveaux 101-110" width=100 height=100></td>
            </tr>
            <tr>
                <td>110-119</td>
                <td><i>Master Explorer Supreme</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-120.png" alt="Cadre Niveaux 111-120" width=100 height=100></td>
            </tr>
            <tr>
                <td>120-129</td>
                <td><i>Master Explorer Elite</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-130.png" alt="Cadre Niveaux 121-130" width=100 height=100></td>
            </tr>
            <tr>
                <td>130-139</td>
                <td><i>Supreme Explorer</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-140.png" alt="Cadre Niveaux 131-140" width=100 height=100></td>
            </tr>
            <tr>
                <td>140-149</td>
                <td><i>Supreme Explorer Pro</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-150.png" alt="Cadre Niveaux 141-150" width=100 height=100></td>
            </tr>
            <tr>
                <td>150-159</td>
                <td><i>Supreme Explorer Elite</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-160.png" alt="Cadre Niveaux 151-160" width=100 height=100></td>
            </tr>
            <tr>
                <td>160-169</td>
                <td><i>Ultimate Explorer</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-170.png" alt="Cadre Niveaux 161-170" width=100 height=100></td>
            </tr>
            <tr>
                <td>170-179</td>
                <td><i>Ultimate Explorer Pro</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-180.png" alt="Cadre Niveaux 171-180" width=100 height=100></td>
            </tr>
            <tr>
                <td>180-189</td>
                <td><i>Ultimate Explorer Supreme</i></td>
                <td><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-190.png" alt="Cadre Niveaux 181-190" width=100 height=100></td>
            </tr>
            <tr>
                <td>190-199</td>
                <td><i>Ultimate Explorer Elite</i></td>
                <td rowspan="2"><img src="https://www.geoguessr.com/static/avatars/tiers/low-quality/tier-200.png" alt="Cadre Niveaux 191+" width=100 height=100></td>
            </tr>
            <tr>
                <td><abbr title="Niveau maximum atteignable dans GeoGuessr">200</abbr></td>
                <td><i>Ultimate Master Explorer</i></td>
            </tr>
        </table>
        <br>
        <h2>Application mobile</h2>
        <p>
            Ce jeu est également disponible sur <a href="https://play.google.com/store/apps/details?id=com.geoguessr.app">Android</a> <abbr title="Cette partie a été rédigée lorsque la version Android était la version 2.3.1. Si la version disponible dans le Play Store est plus avancée, il est possible que certains passages soient obsolètes.">(MàJ : v2.3.1)</abbr> et <a href="https://apps.apple.com/fr/app/geoguessr/id1049876497">iOS</a>. Cependant, ces versions diffèrent du jeu web.
        </p>
        <br>
        <h3>Mode Infini (Infinity)</h3>
        <p>
            Ce mode n'est disponible que sur la version smartphone.
            Il est similaire au mode normal à quelques différences près :
        </p>
            <ul>
                <li>La partie ne s'arrête pas au bout de 5 manches. Comme son nom l'indique, elle continue à l'infini.</li>
                <li>Être proche de l'emplacement réel permet de gagner plus de points d'expérience. Cependant, aucune médaille ou succès ne vous sera donné en jouant à ce mode.</li>
                <li>Il n'y a donc pas de bonne ou de mauvaise réponse. Une fois validé, le jeu vous affiche le résultat et rien de plus. Cela pourrait ainsi s'apparenter à un mode "entraînement", d'autant plus que les scores ne sont pas sauvegardés.</li>
            </ul>
        <br>
        <h3>Autres modes</h3>
        <p>
            Les autres modes disponibles en version mobile sont :
        </p>
            <ul>
                <li>Jouer avec des amis (avec les "fêtes")</li>
                <li>Cartes en solo (mode de jeu principal)</li>
                <li>Battle Royale (pays et distance)</li>
                <li>Duels</li>
                <li>Série de pays</li>
            </ul>
        <p>
            Ces modes sont très similaires à la version web du jeu.<br>
        </p>
        <br>
        <h2>Sources & références</h2>
        <ul>
            <li><a href="https://www.geoguessr.com">GeoGuessr</a></li>
            <li><a href="https://geoguessr.zendesk.com/hc/en-us">Forum GeoGuessr</a></li>
            <li><a href="https://www.reddit.com/r/geoguessr/">Reddit GeoGuessr</a></li>
            <li><a href="https://somerandomstuff1.wordpress.com/2019/02/08/geoguessr-the-top-tips-tricks-and-techniques/">Blog personnel (en anglais)</a></li>
        </ul>
	</body>
</html>