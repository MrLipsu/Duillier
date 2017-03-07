$(document).ready(function() {
  console.log("JQuery récupéré !");


  $("#numberNbEssai").click(function() {
    console.log("clique sur le nbEssai");


  });

  init();


});

function init()
{
  $(".startPage").css('visibility', 'visible');

  $("#buttonVisible").click(function(){
    $("#buttonVisible").remove();
    $(".formSignInBundle").css('visibility', 'visible');

    $.post(
        '../../jQuery/SignInBundle/tireur.php',
        {
          nom : $("#nom").val(),
          prenom :$("#prenom").val()
        },

        function(datas){
          $.each(datas, function(i, data){
            var date = data.anneeNaissance;
            date = tranformDate(date);

            $("#idLicence").val(data.idLicence);
            $("#adresse").val(data.adresse);
            $("#ville").val(data.ville);
            $("#codePostal").val(data.codePostalTireur);
            $("#email").val(data.mail);
            $("#anneeNaissance").val(date);
            //$("#email").val(data.anneeNaissance);
            //obligé de passer par une fonction en js natif(ne sais pas pourquoi Jquery n'y arrivais pas)
            setSelectValue("club",data.idClub);

          });

        },
        'json'
    );

  });

}

function setSelectValue(selectId, value)
{
	/*Récupération du select*/
	var elmt = document.getElementById(selectId);
	/*On parcourt les options du select*/
	for (var i = 0; i < elmt.options.length; i++)
	{
		/*Si l'élément à la bonne valeur on le sélectionne*/
		if(elmt.options[i].value == value)
		{
			elmt.selectedIndex = i;
			return true;
		}
	}
	/*On a pas trouvé la valeur on retourne faux*/
	return false;
}

function tranformDate(date){
  var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;

  if(!regex.test(date)){
    var annee = date.substring(0,4);
    var mois = date.substring(5,7);
    var jour = date.substring(8,10);
    date = jour + "/" + mois + "/" + annee;
  }

  return date;
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.borderColor = "red";
   else
      champ.style.borderColor = "#32CD32";
}

function verifNom(champ)
{
   if(champ.value.length < 2 || champ.value.length > 30)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifLicence(champ)
{
   var regex = /[0-9]{6}/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifAdresse(champ)
{
   if(champ.value.length < 2 || champ.value.length > 100)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifVille(champ)
{
   if(champ.value.length < 2 || champ.value.length > 50)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifCP(champ)
{
   var regex = /^[0-9]{4,5}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifNaissance(champ)
{

   var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifForm(f)
{

   var nomOk = verifNom(f.nom);
   var prenomOk = verifNom(f.prenom);
   var licenceOk = verifLicence(f.idLicence);
   var adresseOk = verifAdresse(f.adresse);
   var villeOk = verifVille(f.ville);
   var CPOk = verifCP(f.codePostal);
   var mailOk = verifMail(f.email);
   var naissanceOk = verifNaissance(f.anneeNaissance);

   if(nomOk && prenomOk && licenceOk && adresseOk && villeOk && CPOk && mailOk && naissanceOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
