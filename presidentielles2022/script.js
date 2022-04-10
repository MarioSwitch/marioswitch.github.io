function timer(){
    let date = new Date();
    let goal1 = new Date('2022-04-10T18:00:00Z');
    let goal2 = new Date('2022-04-24T18:00:00Z');
    let remaining1 = new Date(goal1-date);
    let remaining2 = new Date(goal2-date);
    if(remaining1>86400*1000){document.getElementById("timer1").innerHTML = "Résultats dans "+(remaining1.getUTCDate()-1)+"j "+("0"+remaining1.getUTCHours()).slice(-2)+":"+("0"+remaining1.getUTCMinutes()).slice(-2)+":"+("0"+remaining1.getUTCSeconds()).slice(-2);}
    if(remaining2>86400*1000){document.getElementById("timer2").innerHTML = "Résultats dans "+(remaining2.getUTCDate()-1)+"j "+("0"+remaining2.getUTCHours()).slice(-2)+":"+("0"+remaining2.getUTCMinutes()).slice(-2)+":"+("0"+remaining2.getUTCSeconds()).slice(-2);}
    if(remaining1<86400*1000){document.getElementById("timer1").innerHTML = "Résultats dans "+("0"+remaining1.getUTCHours()).slice(-2)+":"+("0"+remaining1.getUTCMinutes()).slice(-2)+":"+("0"+remaining1.getUTCSeconds()).slice(-2);}
    if(remaining2<86400*1000){document.getElementById("timer2").innerHTML = "Résultats dans "+("0"+remaining2.getUTCHours()).slice(-2)+":"+("0"+remaining2.getUTCMinutes()).slice(-2)+":"+("0"+remaining2.getUTCSeconds()).slice(-2);}
    if(remaining1<3600*1000){document.getElementById("timer1").innerHTML = "Résultats dans "+("0"+remaining1.getUTCMinutes()).slice(-2)+":"+("0"+remaining1.getUTCSeconds()).slice(-2);}
    if(remaining2<3600*1000){document.getElementById("timer2").innerHTML = "Résultats dans "+("0"+remaining2.getUTCMinutes()).slice(-2)+":"+("0"+remaining2.getUTCSeconds()).slice(-2);}
    if(remaining1<60*1000){document.getElementById("timer1").innerHTML = "Résultats dans "+remaining1.getUTCSeconds()+"s";}
    if(remaining2<60*1000){document.getElementById("timer2").innerHTML = "Résultats dans "+remaining2.getUTCSeconds()+"s";}
    if(remaining1<0){document.getElementById("timer1").innerHTML = "Les résultats sont désormais connus. Ils seront présentés ici dans quelques jours.";}
    if(remaining2<0){document.getElementById("timer2").innerHTML = "Les résultats sont désormais connus. Ils seront présentés ici dans quelques jours.";}
    setTimeout(timer,1000);
}