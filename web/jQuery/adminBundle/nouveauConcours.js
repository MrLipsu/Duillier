$(document).ready(function() {
  console.log("JQuery récupéré ! nouveauConcours");

  verifDate();

  $("#nbJour").change(function() // lorsqu'un nouveau nbJour est sélectionné
  {   
    $("#jour").empty();
    var nbJour = $("select[name='nbJour'] > option:selected").val();

    for (pas = 1; pas <= nbJour; pas++) {
      $('<br><label for="jour'+ pas +'">Jour de tir '+ pas +'</label><input placeholder="YYYY-MM-JJ" type="date" name="jour'+ pas +'"><label for="de'+ pas +'">De </label><select name="heureDebut'+ pas +'"><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select><label for="hDebut'+ pas +'"> h à </label><select name="heureFin'+ pas +'"><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select><label for="repas'+ pas +'">h Repas : </label><input type="radio" name="isRepas'+ pas +'" id="isRepas'+ pas +'" value="1"><span>Oui</span><input type="radio" name="isRepas'+ pas +'" id="isRepas'+ pas +'" value="0" checked><span>Non</span><input type="hidden" name="nbJour" value='+pas+'>').appendTo("#jour");
    }

  });



});

function verifDate(){
  $.post(
      '../../jQuery/adminBundle/date.php',
      {

      },

      function(datas){
        $.each(datas, function(i, data){
          var date = data.date;
          var annee = date.substring(0,4);
          var mois = date.substring(5,7);
          var jour = date.substring(8,10);
          var nbMoisEcart = 1;
          var moisAutorisationNouveauConcours = parseInt(mois) + parseInt(nbMoisEcart);
          if(moisAutorisationNouveauConcours<10){
            moisAutorisationNouveauConcours="0"+moisAutorisationNouveauConcours;
          }
          var dateAutorisationNouveauConcours = annee+"-"+moisAutorisationNouveauConcours+"-"+jour;

          var dateDuJour = new Date();
          var dayNow=dateDuJour.getDate();
          var monthNow=dateDuJour.getMonth()+1;
          if(monthNow<10){
            monthNow="0"+monthNow;
          }
          var yearNow=dateDuJour.getFullYear();
          dateDuJour = yearNow+"-"+monthNow+"-"+dayNow;

          if(dateDuJour<dateAutorisationNouveauConcours){
            console.log("non autorisé");
            $("#prochaineEdition").css('visibility', 'hidden');
          }else{
            console.log("autorisé");
            $("#prochaineEdition").css('visibility', 'visible');
          }
        });

      },
      'json'
  );
}
