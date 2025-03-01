<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Parcheesi - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="../../resources/styles/general.css">
		<?php include_once '../../resources/php/menu.php' ?>
	</head>
	<body>
		<?php insertMenu(); ?>
		<h1>Parcheesi</h1>
		<p>
			Il existe de multiples variantes du Parcheesi.<br>
			Cette page ne concerne que la <a href="https://www.mundijeux.fr/multijoueur/parcheesi/">version Mundijeux</a> de ce jeu.<br>
			Par conséquent, ces règles peuvent différer de celles écrites sur d'autres sites/règlements.
		</p>
		<br>
		<h2>Vocabulaire</h2>
		<ul>
			<li><b>Maison :</b> Zone pour placer les pions qui ne sont pas encore en jeu. Celle-ci est placée au coin du plateau.</li>
			<li><b>Pont :</b> 2 pions appartenant au même joueur à la même case. Il bloque tout passage au-dessus de celui-ci. Les 2 pions formant le pont ne peuvent pas être mangés.</li>
			<li><b>Cases sécurisées :</b> Cases № 5, 12, 17, 22, 29, 34, 39, 46, 51, 56, 63 et 68 (représentées par un "M") et celles des couloirs de fin. Les pions placés sur ces cases ne peuvent pas être mangés.</li>
		</ul>
		<br>
		<h2>Règles du jeu</h2>
		<p>
			Le jeu se joue avec 2 dés classiques (de 1 à 6) et 4 pions par joueur, sur un plateau spécifique composé de 4 maisons, 68 cases traversant tout le plateau et 4 couloirs de fin (un de chaque couleur).<br>
			L'objectif est d'amener ses 4 pions à l'arrivée (case du centre) en parcourant, pour chacun d'eux, 71 cases (63 des 68 cases et les 8 cases composant le couloir de fin).<br>
			Celui qui amène ses 4 pions sur la case centrale du plateau remporte la partie.
		</p>
		<br>
		<h2>Déroulement du jeu</h2>
		<p>
			Au lancement de la partie, 3 des 4 pions du joueur sont dans la maison et 1 pion est déjà placé sur la case départ dudit joueur (№ 5 pour la jaune, № 22 pour la bleue, № 39 pour la rouge et № 56 pour la verte).<br>
			Le joueur ayant les pions jaunes commence.<br>
		</p>
		<ul>
			<li><b>Si le joueur fait un double</b>, il doit ouvrir son (ou l'un de ses) pont(s) en déplaçant <b>uniquement un seul pion</b> formant celui-ci. Il peut également avancer un autre pion. S'il n'a pas de pont, il joue normalement et <b>relancera les dés</b>. Attention, si le joueur fait un 3<sup>e</sup> double consécutif, le dernier pion déplacé retournera à sa maison (sauf si celui-ci est sur une case sécurisée).</li>
			<li><b>Si le joueur fait 5 (avec l'un des dés ou la somme)</b>, il doit <b>sortir un pion</b> et le placer sur la case départ. S'il a déjà sorti tous ses pions, il joue normalement.</li>
			<li><b>Dans tous les autres cas (pas de double et pas de 5, ni sur un dé, ni la somme des 2 dés)</b>, le joueur avance ses pions du nombre de cases indiqués par les 2 dés. Il peut choisir d'avancer un seul pion du total des dés ou d'avancer 2 pions en suivant la répartition des cases indiquées par les dés.</li>
		</ul>
		<p>
			<b><ins>Cas particuliers :</ins></b><br>
		</p>
		<ul>
			<li>Si le joueur fait un double et que ses pions forment déjà 2 ponts, il <b>choisit</b> le pont qu'il souhaite ouvrir.</li>
			<li>Si le joueur fait un double 5, la priorité est donnée à l'ouverture d'un pont. Cependant, s'il fait 5 avec un pion du pont, il devra <b>obligatoirement</b> sortir un pion afin d'utiliser le 2<sup>e</sup> dé.</li>
			<li>Si le joueur doit sortir un pion, mais que la case de sortie est occupée par 2 pions nous appartenant, il ne sort pas de pion et joue normalement.</li>
			<li>Si le joueur doit sortir un pion, mais que la case de sortie est occupée par un pion nous appartenant et un pion adverse, il sort son pion en mangeant le pion adverse (même si c'est une case sécurisée).</li>
			<li>Si le joueur doit sortir un pion, mais que la case de sortie est occupée par 2 pions adverses, il sort son pion en mangeant le pion arrivé en dernier sur la case (même si c'est une case sécurisée).</li>
		</ul>
		<p>
			Si un joueur arrive à placer 2 de ses pions sur la même case, il crée un pont. Celui-ci empêchera tous les autres pions (y compris les siens) de passer au-dessus de ladite case.<br>
			Si un joueur arrive à placer un de ses pions sur la même case qu'un autre pion, il le mangera. Le pion mangé retournera à sa maison et le joueur l'ayant mangé bénéficiera de 20 cases à utiliser sur <b>un seul pion</b>.<br>
			Si un joueur arrive à placer un de ses pions sur la case finale, il bénéficie de 10 cases à utiliser sur <b>un seul pion</b>.<br>
			Le bonus ne peut pas être utilisé sur un pion qui, en avançant de 10 ou 20 cases, créerait un pont avec un autre pion de la même couleur.<br> 
			Dans ces 2 cas, le bonus, s'il peut être utilisé, est obligatoire et doit être utilisé <b>immédiatement</b> et non à la fin du tour. S'il ne peut pas être utilisé, celui-ci est supprimé.
		</p>
		<br>
		<h3>2 contre 2</h3>
		<p>
			Le jeu 2 contre 2 conserve les mêmes règles de base. Cependant, certaines de celles-ci sont tout de même adaptées :
		</p>
		<ul>
			<li>Pour gagner, il faut que les 4 pions des 2 joueurs soient arrivés (soit 8 pions).</li>
			<li>Le jeu se déroule comme si votre binôme était un adversaire : vous pouvez manger ses pions, etc.</li>
			<li>Une fois qu'un joueur termine le jeu (en ayant ses 4 pions à l'arrivée), il joue les pions de son coéquipier.</li>
		</ul>
		<br>
		<h2>Quelques conseils</h2>
		<ul>
			<li>Visez les cases sécurisées.</li>
			<li>Évitez de ne garder qu'un seul pion sur le plateau. Vous risquez de subir vos lancés de dés, car vous ne pourrez plus jouer stratégiquement (en séparant les dés).</li>
			<li>Si vous pouvez gagner un bonus (de 10 ou 20 cases), vérifiez que ces cases ne vous gênent pas (en vous forçant à vous déplacer juste devant un adversaire par exemple) avant de jouer.</li>
			<li>En partie 2 contre 2, si vous pouvez manger un pion de votre binôme, ne rejetez pas tout de suite l'idée. Préférez voir si les 20 cases bonus ne sont pas plus avantageuses que ce pion à cet endroit.</li>
		</ul>
		<br>
		<h2>Sources & références</h2>
		<ul>
			<li><a href="https://fr.wikipedia.org/wiki/Parcheesi">Wikipédia</a></li>
			<li><a href="https://www.mundijeux.fr/multijoueur/parcheesi/regles/">Règles Mundijeux</a></li>
			<li><a href="https://www.mundijeux.fr/play/parcheesi">Jeu Mundijeux</a></li>
		</ul>
	</body>
</html>