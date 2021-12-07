/* fonction verif agir au niveau du saisie d'article , lezemhom ikounou maktoubin ou titre majuscule */
function verif() {


    var titre = document.getElementById("titre").value
    var article = document.getElementById("contenu").value
    var file = document.getElementById("photo").value
    var errMsgHolder = document.getElementById('nameErrMsg');


    /* le titre doivent être des lettres et commençant par des majuscules*/

    if (titre == "") {
        window.alert("veiller ecrire votre Titre d'article")
        return false
    }

    if (/^[a-z]/.test(document.getElementById("titre").value)) {
       window.alert("la premier lettre du nom doit etre en majuscule")
      // errMsgHolder.innerHTML ="la premier lettre du nom doit etre en majuscule";
        return false
    }
    if (article == "") {
       // window.alert("veiller ecrire votre Article ")
       errMsgHolder.innerHTML ="veille ecrire votre article";
        return false
    }
    if(file == null)
    {
     
        window.alert("veiller uploader votre photo ")
        return false

    }

    
}