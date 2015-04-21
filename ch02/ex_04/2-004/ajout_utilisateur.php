<?php
/* ---------------------------------------------------------------------
 *                        Exercice 2-002                            
 * Nom du fichier: ajout_utilisateur.php
 * Auteur: PKR 
 * Date: Janvier 2008
 * Description: Ce script affiche un formulaire d'inscription                              
 * ---------------------------------------------------------------------
 */
// Variables
//  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Exercice 2-002</title>
  </head>
  <body>

  <h2>Inscris-toi!</h2>
  <form name="form1" method="post" action="ajout_utilisateur_post.php">
    <p>Login<br>
      <input type="text" name="login" />
    </p>
    <p>Mot de passe<br>
      <input type="text" name="passwd" />
    </p>
     <p>Présentation<br>
      <textarea name="presentation" id="textarea" cols="45" rows="5"></textarea>
    </p>
    <p>Majeur<br>
      <select name="majeur">
        <option value="1">Oui</option>
        <option value="0">Non</option>
      </select>
    </p>
    <p>Type<br>
      <input name="type" type="radio" value="F" />
      Femme
      <input name="type" type="radio" value="H" />
      Homme </p>
    <p>Options<br>
      <input name="lettre_nouvelle" type="checkbox" id="lettre_nouvelle" value="1" />
      Lettre de nouvelle
      <input name="membre_soutien" type="checkbox" id="membre_soutien" value="1" />
      Membre de soutien </p>
    <p>
      <input type="submit" name="Submit" value="S'inscrire">
      <br>
    </p>
  </form>

</body>
</html>
