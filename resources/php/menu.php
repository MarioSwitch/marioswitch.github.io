<style>
    .menu{
        position: fixed;
        height: 50px;
        width: 100%;
        left: 0;
        top: 0;
        background-color: black;
        margin: 0;
        padding: 0;
        border-bottom: 2px solid white;
        line-height: 50px;
    }
    .category{
        position: relative;
        height: 100%;
        width: auto;
        float: left;
        text-align:center;
    }
    .category img{
        margin:10px;
    }
    .item{
        visibility: hidden;
        background: black;
        text-align: center;
        border-left: 2px dotted white;
        border-right: 2px dotted white;
        border-bottom: 2px dotted white;
        padding: 0 10px;
    }
    .category:hover > .item{
        visibility: visible;
    }
</style>
<?php
    function insertMenu(){
        echo("
            <div class=\"menu\">
                <div class=\"category\"><a href=\"https://www.marioswitch.fr/\"><img src=\"https://i.imgur.com/dmWhVeb.png\" width=30 height=30 alt=\"Icône Mario\"></a></div>
                <div class=\"category\">Jeux
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/games/parcheesi.php\">Parcheesi</a></div>
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/games/geoguessr.php\">GeoGuessr</a></div>
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/games/fallguys.php\">Fall Guys</a></div>
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/games/minecraft.php\">Minecraft</a></div>
                </div>
                <div class=\"category\">Misc.
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/misc/discord-rules.php\">Règles Discord</a></div>
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/misc/privacy.php\">Google Play</a></div>
                    <div class=\"item\"><a href=\"https://www.marioswitch.fr/pages/misc/games.php\">Jeux les plus joués</a></div>
                </div>
                <div class=\"category\">Sous-domaines
                    <div class=\"item\"><a href=\"https://clock.marioswitch.fr/\">Horloge</a> (BETA)</div>
                    <div class=\"item\">Prédictions (unsupported)</div>
                </div>
            </div>
        ");
    }
?>