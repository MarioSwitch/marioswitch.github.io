function clock(){
    let date = new Date();
    document.getElementById("UTC-clock").innerHTML = ("0"+date.getUTCHours()).slice(-2)+":"+("0"+date.getUTCMinutes()).slice(-2)+":"+("0"+date.getUTCSeconds()).slice(-2);
    document.getElementById("FR-clock").innerHTML = ("0"+((date.getUTCHours()+2)%24)).slice(-2)+":"+("0"+date.getUTCMinutes()).slice(-2)+":"+("0"+date.getUTCSeconds()).slice(-2);
    setTimeout(clock,1000);
}