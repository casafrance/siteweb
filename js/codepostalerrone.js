

// Désactiver le bouton submit au démarrage du formulaire
function auChargement(){
	document.getElementById("submit").disabled = true;
}


// fonction pour modifier le style ok et ko 
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#FFC0CB";
   else
      champ.style.backgroundColor = "";
}


//Fonction de vérification du code postal
function checkCodePostal(code){
	var valeurN = code.value;
	if (isNaN(valeurN) || valeurN.length!=5) {
		surligne(code, true);
		document.form1.code.value = "";
		document.form1.code.focus();
	} else {
		surligne(code, false);
		document.getElementById("submit").disabled = false;
	}
	
}

