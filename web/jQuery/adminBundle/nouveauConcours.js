$(document).ready(function() {
  console.log("JQuery récupéré ! nouveauConcours");


  $("#nbJour").change(function() // lorsqu'un nouveau nbJour est sélectionné
  {   
    $("#jour").empty();
    var nbJour = $("select[name='nbJour'] > option:selected").val();

    for (pas = 1; pas <= nbJour; pas++) {
      $('<br><label for="jour'+ pas +'">Jour de tir '+ pas +'</label><input placeholder="YYYY-MM-JJ" type="date" name="jour'+ pas +'"><label for="de'+ pas +'">De </label><select name="heureDebut'+ pas +'"><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option></select><label for="hDebut'+ pas +'"> h à </label><select name="heureFin'+ pas +'"><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option></select><label for="repas'+ pas +'">h Repas : </label><input type="radio" name="isRepas'+ pas +'" id="isRepas'+ pas +'" value="1"><span>Oui</span><input type="radio" name="isRepas'+ pas +'" id="isRepas'+ pas +'" value="0" checked><span>Non</span><input type="hidden" name="nbJour" value='+pas+'>').appendTo("#jour");
    }

  });

});
