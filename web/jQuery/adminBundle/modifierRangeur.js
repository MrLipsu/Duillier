$(document).ready(function() {

  creationDesNotif();
  verifRepas();

  majRecapNombreDeCoups();
  majPrix();

  preRemplissageDesChamps();

  //$('#jour').val(tranformDate($('#jour').val()));

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

  //$('#groupe[value="0"]').attr('checked', true);
});












function preRemplissageDesChamps(){

  $('#club').val($("#clubActuel").val());

  preRemplissageBoutonRadio('estGaucher', 'preRemplissageEstGaucher');
  preRemplissageBoutonRadio('groupe', 'preRemplissageGroupe');
  preRemplissageBoutonRadio('chefGroupe', 'preRemplissageChefGroupe');
  preRemplissageBoutonRadio('doleGroupe', 'preRemplissageDoleGroupe');
  preRemplissageBoutonRadio('duillier', 'preRemplissageDuillier');
  preRemplissageBoutonRadio('montBlanc', 'preRemplissageMontblanc');
  preRemplissageBoutonRadio('perceNeige', 'preRemplissagePerceNeige');

}

function preRemplissageBoutonRadio(idBouttonRadio, idHiddenDePreRemplissage){
  var ValueDePreRemplissage = $('#'+idHiddenDePreRemplissage).val();
  //console.log("value : "+ValueDePreRemplissage);
  if (ValueDePreRemplissage == false) {
    ValueDePreRemplissage = 0;
  }
  $('#'+idBouttonRadio+'[value="'+ValueDePreRemplissage+'"]').attr('checked', true);

}

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

  $.notiModal.init("notifRangeurNonDispo", {
    title:"Rangeur non disponible ",
    content:"En prenant ce rangeur, vous empiétez sur un rangeur suivant qui est déja réservé",
    ok:"rediriger vers le planning",
    max_width: 800,
    sound: true,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../../../../../gestionRangeur";
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

function transformDateToYYYYMMDD(date){

  var newdate = date.split("/").reverse().join("-");
  return newdate;
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













function isRangerOk(){
  var rangeur = $("#nombreDeRangeurs").val();
  console.log($("#nombreDeRangeurs").val());
  console.log($("#jour").val());
  console.log($("#heure").val());
  console.log($("#idLivret").val());

  //line added for the var that will have the result
    var result = false;
    $.ajax({
        type: "POST",
        url: '../../../../../../../jQuery/SignInBundle/horaireByHeure.php',
        data: ({
          jour : $("#jour").val(),
          heure : $("#heure").val()
        }),
        dataType: "json",
        //line added to get ajax response in sync
        async: false,
        success: function(datas) {
          console.log('tamaman');
          $.each(datas, function(i, data){
            var idHoraireDebut = parseInt(data.idHoraire);
            console.log(idHoraireDebut);
            var idHoraireFin = parseInt(idHoraireDebut) + parseInt(rangeur - 1);
            console.log(idHoraireFin);

            $.ajax({
                type: "POST",
                url: '../../../../../../../jQuery/adminBundle/occupeAndPoste.php',
                data: ({
                  idDebut : idHoraireDebut,
                  idFin : idHoraireFin,
                  idPoste : $("#poste").val()
                }),
                dataType: "json",
                //line added to get ajax response in sync
                async: false,
                success: function(datas) {
                  result = true;
                  $.each(datas, function(i, data){
                    console.log(data.nbIdHoraire);
                    console.log("num livret : "+data.numLivret);
                    if(data.nbIdHoraire == 0){
                        console.log("if");
                      //line added to save ajax response in var result
                      result = true;
                    }else {
                      console.log("else");
                      console.log($("#idLivret").val());
                      if ($("#idLivret").val() != data.numLivret) {
                        result = false;
                      }


                    }
                  });
                },
                error: function() {
                    alert('Error occured lol');
                }
            });

          });

        },
        error: function() {
            alert('Error occured ta mere');
        }
    });
    //line added to return ajax response
    return result;

}


function verifForm(f)
{
   console.log("salut");
   var nomOk = verifNom(f.nom);
   var prenomOk = verifNom(f.prenom);
   var licenceOk = verifLicence(f.idLicence);
   var adresseOk = verifAdresse(f.adresse);
   var villeOk = verifVille(f.ville);
   var CPOk = verifCP(f.codePostal);
   var mailOk = verifMail(f.email);
   var naissanceOk = verifNaissance(f.anneeNaissance);




   var verifRanger = isRangerOk();
   console.log(verifRanger);


   if(nomOk && prenomOk && licenceOk && adresseOk && villeOk && CPOk && mailOk && naissanceOk ){
     if (verifRanger) {
       return true;
     }else {
       $.notiModal.get("notifRangeurNonDispo").show();

       return false;
     }
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
