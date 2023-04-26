<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clock.css">
    <script src="clock.js"></script>
    <title>Heures UTC et française</title>
</head>
<body onload="clock();">
    <?php insertMenu(); ?>
    <div id="UTC-div">
        <h1>Heure UTC</h1>
        <span class="clocks" id="UTC-clock"></span>
    </div>
    <div id="FR-div">
        <h1>Heure en France (UTC+2)</h1>
        <span class="clocks" id="FR-clock"></span>
        <p>L'heure affichée est valable jusqu'au passage à l'heure d'hiver (le dimanche 29 octobre 2023 à 03:00).</p>
    </div>
    <p style="position:fixed;bottom:0"><b>Note :</b> Dû à la construction du fichier JS (permettant de mettre à jour les horloges), les secondes peuvent être inexactes (à moins d'une seconde près).</p>
</body>
</html>