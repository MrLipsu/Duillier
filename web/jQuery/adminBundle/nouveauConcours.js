$(document).ready(function() {
  console.log("JQuery récupéré !");


  $("#nbJour").change(function() // lorsqu'un nouveau nbJour est sélectionné
  {   
    var nbJour = $("select[name='nbJour'] > option:selected").val();

    for (pas = 0; pas < nbJour; pas++) {
      console.log(nbJour); 
    }

  });

});
