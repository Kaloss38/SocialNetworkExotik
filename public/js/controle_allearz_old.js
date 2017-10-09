
// ---------------------JS JULIEN ------------------------------------------

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


// bouton radio
function verifRadio()
{		
	var i = 0;
	nb = 0
		
	for (i=0;i< document.getElementsByName("radio").length;i++)
	{
		if(document.getElementsByName("radio").item(i).checked)
		{
			nb++;			
		}
	}
	if (nb <= 0) {
		document.getElementById('errorRadio').innerHTML= "Vous devez choisir un nombre d'enfants."; 
		return false;
	}	
	return true;
}

//liste déroulante
function verifListe()   
 {  
 	if(document.getElementById('situation').value != 0){
 		return true;
 	}
 	document.getElementById('errorListe').innerHTML= "Vous devez faire un choix marital.";  
 	return false;
 }  




 // Verification générale
 function verifForm(f) {
 	var ? = verifNom(f.?);
 	var

 	if (&&  && &&  ) 
 	{
 		return true;
 	}

 	alert("veuillez saisir tous les champs");
	return false;


	
  }




// debut verif pseudo
function verifFriends(champ)
{
   if(champ.value.length < 2 || champ.value.length > 50)
   {
      surligne(champ, true);
      return false;
      alert("Entre 2 et 50 caractères");
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}//fin verif pseudo


// debut verif pseudo
function verifQuestions(champ)
{
   if(champ.value.length < 2 || champ.value.length > 80)
   {
      surligne(champ, true);
      return false;
      alert("Entre 2 et 80 caractères");
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}//fin verif pseudo

function verifName(champ)
{	
	
	regex = new RegExp("(^[a-zA-Z']{1})([a-zA-Z']+)(([\ \-])([a-zA-Z']{1})([a-zA-Z']*))?$","");
   if(champ.value.length < 2 || !regex.test(champ.value))
   {
      surligne(champ, true);
      document.getElementById('errorNom').innerHTML= "Votre Nom est mal rempli.";
      document.getElementById('errorPrenom').innerHTML= "Votre Prénom est mal rempli.";
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }


// --------------------FIN JULIEN--------------------------------------------

// ---------------   JS KEVIN     --------------------------------- 

// Limite le nombre de caractère à 20
function verifLongueurChaine20(champ) {
	if (champ.value.length < 0 || champ.value.length > 20) {
		surligne(champ, true);
		return false;
		alert("20 caractères maximum");
	}
	else {
		surligne(champ, false);
		return true;
	}
}

//------------------------------------------------------------------

// Uniquement des chiffres et  - + /  .

function verifTelephone(event) {
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
	var champ = document.getElementById('telephone');
	var caracteres = "0123456789-/+.";
	if (caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
}

//------------------------------------------------------------------

// Vérifie l'age

function verifAge(champ) {
	var age = parseInt(champ.value);
	if (isNaN(age) || age < 18 || age > 111) {
		surligne(champ, true);
		return false;
	}
	else {
		surligne(champ, false);
		return true;
	}
} 


//------------------------------------------------------------------


// 12 caractères maximum

function verifLongueurChaine12(champ) {
	if (champ.value.length < 2 || champ.value.length > 12) {
		surligne(champ, true);
		return false;
		alert("12 caractères maximum");
	}
	else {
		surligne(champ, false);
		return true;
	}
}


//------------------------------------------------------------------


function verifLongueurChaine250(champ) {
	if (champ.value.length < 0 || champ.value.length > 250) {
		surligne(champ, true);
		return false;
		alert("250 caractères maximum");
	}
	else {
		surligne(champ, false);
		return true;
	}



// --------------FIN JS KEVIN --------------------------------------



// -------------------- JS NANS --------------------------------- 

/* messagerie controle ------------------------------------------------------------------*/

/* recherche conversation /  messagerie */ 

// Controle si il y a au mini 2 caractères et au max 50

function verifLongueurChaine50(champ) {
	if (champ.value.length < 2 || champ.value.length > 50) {
		surligne(champ, true);
		return false;
		alert("Entre 2 et 50 caractères");
	}
	else {
		surligne(champ, false);
		return true;
	}
}

/* votre message / messagerie */


function verifLongueurChaine500(champ) {
	
	var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
	var message= document.getElementById('msg');

	if (champ.value.length < 2 || champ.value.length > 500 && champ.value != message.value || !regex.test(champ.value) ) {
		surligne(champ, true);
		return false;
		alert("Entre 2 et 500 caractères");
		document.getElementById('errormessageConfirm').innerHTML= "Votre message ne doit pas contenir de caracteres speciaux.";
	}
	else {
		surligne(champ, false);
		return true;
	}
}





/* contact controle nom */
function verifNom(champ)
{	
	
	regex = new RegExp("(^[a-zA-Z']{1})([a-zA-Z']+)(([\ \-])([a-zA-Z']{1})([a-zA-Z']*))?$","");
   if(champ.value.length < 2 || !regex.test(champ.value))
   {
      surligne(champ, true);
      document.getElementById('errorNom').innerHTML= "Votre Nom est mal rempli.";
      document.getElementById('errorPrenom').innerHTML= "Votre Prénom est mal rempli.";
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }


// type de demande 
//liste déroulante
function verifListe()   
 {  
 	if(document.getElementById('situation').value != 0){
 		return true;
 	}
 	document.getElementById('errorListe').innerHTML= "Vous devez faire un choix marital.";  
 	return false;
 }  



//------------------------------------ page contact ---------------------------



function verifLongueurChaine(champ) {
	if (champ.value.length < 2 || champ.value.length > 150) {
		surligne(champ, true);
		return false;
		alert("Entre 2 et 150 caractères");
	}
	else {
		surligne(champ, false);
		return true;
	}
}


//------------------------------ FIN JS NANS -----------------------------


//------------------------------ JS JOHN -----------------------------



function verifLongueurChaine20(champ) {
	if (champ.value.length < 2 || champ.value.length > 20) {
		surligne(champ, true);
		return false;
		alert("Entre 2 et 20 caractères");
	}
	else {
		surligne(champ, false);
		return true;
	}
}

function verifCaracteresPseudo(event) {
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
	var champ = document.getElementById('nom');
	var caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-";
	if (caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
}

//Fin controle NOM et PRENOM

// Controle si MAIL respecte la regex
function verifEmail(champ) {
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	if (!regex.test(champ.value)) {
		surligne(champ, true);
		return false;
	}	
	else {
		surligne(champ, false);
		return true;
	}
}



// Fin confirmation MDP

//Checkbox inscription
function verifCheckBox()
{		
	var i = 0;
	nb = 0
		
	for (i=0;i< document.getElementsByClassName("box").length;i++)
	{
		if(document.getElementsByClassName("box").item(i).checked)
		{
			nb++;			
		}
	}
	if (nb <= 1) {
		document.getElementById('errorCheckBox').innerHTML= "Vous n'avez pas accepté(e) la charte :(";
      	return false;
	} 
	return true; 
}

//Fin checkbox inscription

 // Verification générale
 function verifForm(f) {
 	var pseudoOk = verifNom(f.pseudo);
 	var mailOk = verifEmail(f.email);
 	var passwordOk = verifPassword(f.password);
 	var confirmPassworOk = verifConfirmPassword(f.confirmPassword);
 	var checkBoxOk = verifCheckBox(f.box);
 	
 	if (nomOk && prenomOk && listeOk && dateOk && 
 		radioOk && nbRueOk && rueOk && codePostalOk && villeOk && 
 		telNumberOk && mailOk && checkBoxOk && passwordOk && confirmPassworOk ) {
 		return true;
 	}

 	alert("veuillez saisir tous les champs");
	return false;


	
  }
	// Fin vérification générale

	
//------------------------------ FIN JS JOHN -----------------------------