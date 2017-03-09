<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <script src="../../jQuery/jQuery.js"></script>
  <script src="../../jQuery/SignInBundle/Inscription.js"></script>

</head>
<body>
    <h1 class="page-header text-center">Connexion administrateur</h1>
        <form class="form-horizontal " method="post"  action="verifConnexionAdmin"  >
          <div class="form-group">
            <label  class="col-sm-4 control-label"for="login">Nom d'utilisateur</label>

            <div class="col-sm-3">
              <input type="text" id="login" name="login" class=" form-control " onblur="verifNom(this)" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-4 control-label"for="mdp">Mot de passe</label>

            <div class="col-sm-3">
              <input type="password" id="mdp" name="mdp" class=" form-control " onblur="verifNom(this)" value="" required>
            </div>
          </div>

          <div class="col-sm-6">
            <input type="submit" name="connexionAdmin" class="btn btn-success btn-s" value="Connexion">
            <input type="hidden" name="connexionAdmin">
            <a href="#" class="btn btn-warning">Annuler</a>
          </div>

        </form>



</body>
