$(document).ready(function() {

  creationDesNotif();
  verifRepas();

  majRecapNombreDeCoups();
  majPrix();


  $("#nbEssais").change(function() {
    majRecapNombreDeCoups();
    majPrix();
  });

  $("#divTirs").change(function(){
    majRecapNombreDeCoups();
    majPrix();
  });


  $("#estGaucher").change(function(){
    if ($("#poste").attr("value") != 2 && $("#poste").attr("value") != 4 && $("#poste").attr("value") != 6) {
      $.notiModal.get("alerteGaucher").show();
    }
  });

  $("#divTirs").change(function(){
    majRecapNombreDeCoups();
    majPrix();
  });


  $("#estGaucher").change(function(){
    if ($("#poste").attr("value") != 2 && $("#poste").attr("value") != 4 && $("#poste").attr("value") != 6) {
      $.notiModal.get("alerteGaucher").show();
    }
  });


});


function verifRepas(){
  if ($("#booleanRepas").val() == 0) {
    $("#nbRepas").css('visibility', 'hidden');
    $("#divNbDeRepas").prepend("Il n'y a pas de repas ce jour là");
  }
}


function creationDesNotif(){

  $.notiModal.init("alerteGaucher", {
    title:"Vous etes gaucher ? ",
    content:"Si vous êtes gaucher, nous vous conseillons de vous inscrire sur les postes 2, 4 ou 6",
    ok:"rediriger vers le planning",
    max_width: 800,
    sound: true,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../planning";
    }
  });
}

function majPrix(){

  nbEssais = $("#nbEssais").val();
  prixDesTirs = majPrixViaTirs();

  var prix = nbEssais*2 +prixDesTirs;
  $("#prix").attr('value', prix);
  $("#prix").html(prix);
}

function majRecapNombreDeCoups(){
  nbCoupsViaTirs = majNombreDeCoupsViaTirs();
  nbCoupsViaEssais = $("#nbEssais").val()*5;
  $("#recapNombreDecoups").html(nbCoupsViaTirs+nbCoupsViaEssais);
  $("#recapNombreDecoups").attr("value", nbCoupsViaTirs+nbCoupsViaEssais);
  majNombreDeRangeur();
}

function majNombreDeCoupsViaTirs(){
  nombreDeCoupsViaTirs = 0;

  if ($('#doleGroupe').is(':checked'))
    nombreDeCoupsViaTirs = nombreDeCoupsViaTirs+10;
  if ($("#duillier").is(':checked'))
    nombreDeCoupsViaTirs = nombreDeCoupsViaTirs+6;
  if ($("#montBlanc").is(':checked'))
    nombreDeCoupsViaTirs = nombreDeCoupsViaTirs+9;
  if ($("#perceNeige").is(':checked'))
    nombreDeCoupsViaTirs = nombreDeCoupsViaTirs+6;

  return nombreDeCoupsViaTirs;
}

function majPrixViaTirs(){
  var prix = 6;

  if ($('#doleGroupe').is(':checked'))
    prix = prix +11;
  if ($("#duillier").is(':checked'))
    prix = prix +9.5;
  if ($("#montBlanc").is(':checked'))
    prix = prix +13;
  if ($("#perceNeige").is(':checked'))
    prix = prix +12.5;

  return prix;
}

function majNombreDeRangeur(){
  var nombreDeCoups = $("#recapNombreDecoups").attr("value");
  var nombreDeRangeurs;
  if (nombreDeCoups < 16) {
    nombreDeRangeurs = 1
  }else if (nombreDeCoups < 31){
    nombreDeRangeurs = 2;
  }else {
    nombreDeRangeurs = 3;
  }
  $("#nombreDeRangeurs").html(nombreDeRangeurs);
  $("#nombreDeRangeurs").attr("value",nombreDeRangeurs);
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