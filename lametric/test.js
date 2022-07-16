var url = 'http://www.marioswitch.fr/lametric/test.json';
var request = new XMLHttpRequest();
request.open('GET',url);
request.send();
request.onload = function() {
    var resultat = request.response;
    console.log(resultat);
}
