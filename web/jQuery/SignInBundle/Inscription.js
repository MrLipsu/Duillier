$(document).ready(function() {
  console.log("JQuery récupéré inscript !");


  init();

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

  $("#divTirs").change(function(){
    majRecapNombreDeCoups();
    majPrix();
  });


  $("#estGaucher").change(function(){
    if ($("#poste").attr("value") != 2 && $("#poste").attr("value") != 4 && $("#poste").attr("value") != 6) {
      $.notiModal.get("alerteGaucher").show();
    }
  });


  $("#chefGroupe").change(function(){
    $.notiModal.get("alerteChefGroupe").show();
  });


});



function verifRepas(){
  if ($("#booleanRepas").val() == 0) {
    $("#nbRepas").css('visibility', 'hidden');
    $("#divNbDeRepas").prepend("Il n’est pas servi de repas ce jour-là");
  }
}


function creationDesNotif(){

  $.notiModal.init("alerteGaucher", {
    title:"Vous êtes gaucher ? ",
    content:"Si vous êtes gaucher, nous vous conseillons de vous inscrire sur les postes 2, 4 ou 6",
    ok:"Retourner au planning",
    close: "Poursuivre",
    max_width: 800,
    sound: false,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../";
    }
  });


  $.notiModal.init("notifRangeurNonDispo", {
    title:"Nombre de rangeur insuffisant",
    content:"En prenant ce rangeur, vous empiétez sur un rangeur suivant qui est déja réservé",
    ok:"Retourner au planning",
    close: "Fermer",
    max_width: 800,
    sound: false,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../";
    }
  });


  $.notiModal.init("alerteChefGroupe", {
    title:"Vous êtes chef de groupe ?",
    content:"Attention, vous prenez la responsabilité d’être chef de groupe et de composer les groupes de la société. Il n’y a qu’un chef de groupe par société. Si vous n’occupez pas cette fonction, merci de cliquer sur « non ».",
    ok:"Retourner au planning",
    close: "Fermer",
    max_width: 800,
    sound: false,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../";
    }
  });

  $.notiModal.init("alerteDejaInscrit", {
    title:"Numéro de licence déja inscrit",
    content:"Impossible de s'incrire, il y a déja une inscription pour ce numéro de licence",
    ok:"Retourner au planning",
    close: "Fermer",
    max_width: 800,
    sound: false,
    force: true,

    onOkClick:function(noti_modal){
      window.location="../";
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

function verifMdp(champ)
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

function verifMdp(champ)
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


function verifMdpConfirm(champ)
{
  if(champ.value.length < 2 || champ.value.length > 50)
  {
    surligne(champ, true);
    return false;
  }
  else if(champ.value != mdp.value)
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

  //line added for the var that will have the result
  var result = false;
  $.ajax({
    type: "POST",
    url: '../../jQuery/SignInBundle/horaireByHeure.php',
    data: ({
      jour : $("#jour").val(),
      heure : $("#heure").val()
    }),
    dataType: "json",
    //line added to get ajax response in sync
    async: false,
    success: function(datas) {

      $.each(datas, function(i, data){
        var idHoraireDebut = parseInt(data.idHoraire);
        var idHoraireFin = parseInt(idHoraireDebut) + parseInt(rangeur - 1);

        $.ajax({
          type: "POST",
          url: '../../jQuery/SignInBundle/horaireByID.php',
          data: ({
            idDebut : idHoraireDebut,
            idFin : idHoraireFin,
            idPoste : $("#poste").val()
          }),
          dataType: "json",
          //line added to get ajax response in sync
          async: false,
          success: function(datas) {

            $.each(datas, function(i, data){
              if(data.nbIdHoraire == 0){
                //line added to save ajax response in var result
                result = true;
              }else {

              }
            });
          },
          error: function() {
            alert('Error occured');
          }
        });

      });

    },
    error: function() {
      alert('Error occured');
    }
  });
  //line added to return ajax response
  return result;

}

function isUnique(){
  var rangeur = $("#idLicence").val();
  var result = false;
  $.ajax({
    type: "POST",
    url: '../../jQuery/SignInBundle/participationById.php',
    data: ({
      idLicence : $("#idLicence").val()
    }),
    dataType: "json",
    //line added to get ajax response in sync
    async: false,
    success: function(datas) {
      $.each(datas, function(i, data){
        console.log(data.nbIdLicence);
        if(data.nbIdLicence == 0){
          //line added to save ajax response in var result
          result = true;
          console.log(result);
        }
      });

    },
    error: function() {
      alert('Error occured');
    }
  });
  //line added to return ajax response
  return result;

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


  var mdpOk = verifMdp(f.mdp);
  var mdpConfirmOk = verifMdpConfirm(f.mdpConfirm)

  var verifUnique = isUnique();
  var verifRanger = isRangerOk();

  console.log(verifUnique);


  if(nomOk && prenomOk && licenceOk && adresseOk && villeOk && CPOk && mailOk && naissanceOk && mdpOk && mdpConfirmOk){
    if(verifUnique){
      if (verifRanger) {
        return true;
      }else{
        $.notiModal.get("notifRangeurNonDispo").show();
        return false;
      }
    }else{
      $.notiModal.get("alerteDejaInscrit").show();
      return false;
    }
  }
  else
  {
    alert("Veuillez remplir correctement tous les champs");
    return false;
  }
}
