<?php
  include "db/db.php";


if(isset($_POST['connexion'])){

  $reponseAdmin = $bdd->query('SELECT login, mdp FROM Admin WHERE login=\'' . $_POST['mail'] . '\'');
  $donneesAdmin = $reponseAdmin->fetch();

  $reponseTireur = $bdd->query('SELECT t.mail, t.mdp, p.idLivret, p.nbRepas, o.date, o.idPoste, o.idHoraire
                                FROM Tireur t
                                JOIN Participation p ON t.idLicence=p.idLicence
                                JOIN Occupe o ON o.numLivret=p.idLivret
                                WHERE mail=\'' . $_POST['mail'] . '\'');
  $donneesTireur = $reponseTireur->fetch();

  $idPoste = $donneesTireur['idPoste'];
  $date = $donneesTireur['date'];
  $idHoraire = $donneesTireur['idHoraire'];
  $numLivret = $donneesTireur['idLivret'];
  $repas = $donneesTireur['nbRepas'];


  if($_POST['mail']==$donneesAdmin['login'] && $_POST['mdp']==$donneesAdmin['mdp']){
    echo $this->render('DuillierAdminBundle:Default:index.html.php');
  }else if($_POST['mail']==$donneesTireur['mail'] && $_POST['mdp']==$donneesTireur['mdp']){
    echo $this->render('DuillierAdminBundle:Default:modifierRangeur.html.php', array(
      'idPoste' => $idPoste,
      'date' => $date,
      'idHoraire' => $idHoraire,
      'numLivret' => $numLivret,
      'repas' => $repas,
    ));
  }else{
    echo $this->render('DuillierAdminBundle:Default:refusConnexion.html.php');
  }

}
