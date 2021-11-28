
function verifnomclass(){
    
    var nom = document.pcc.nomclass.value;
    if (nom == ""){
        document.getElementById("nomclass").style.borderColor="red";
    }
    else{
        document.getElementById("nomclass").style.borderColor="";
    }
}
function verifniveau(){
    
    var nom = document.pcc.niveau.value;
    if (nom == ""){
        document.getElementById("niveau").style.borderColor="red";
    }
    else{
        document.getElementById("niveau").style.borderColor="";
    }
}
function verifidprof(){
    
    var nom = document.pcc.idprof.value;
    if (nom == ""){
        document.getElementById("idprof").style.borderColor="red";
    }
    else{
        document.getElementById("idprof").style.borderColor="";
    }
}
function verifduree(){
    
    var nom = document.pcc.duree.value;
    if (nom == ""){
        document.getElementById("duree").style.borderColor="red";
    }
    else{
        document.getElementById("duree").style.borderColor="";
    }
}
function verifdatedebut(){
    
    var nom = document.pcc.datedebut.value;
    if (nom == ""){
        document.getElementById("datedebut").style.borderColor="red";
    }
    else{
        document.getElementById("datedebut").style.borderColor="";
    }
}

