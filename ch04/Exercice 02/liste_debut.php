<!DOCTYPE html>
<?php


// Pour se connecter à la base de données
const DB_SERVER = 'localhost';
const DB_USER   = 'cpnv';
const DB_PWD    = 'cpnv1234';
const DB_NAME   = 'ch04';
// Variables


?>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice 4-002</title>
</head>
<body>


<a href="">Ajouter une addresse mail</a>
<a href="">Modifier</a>
<a href="">Supprimer</a>


<?php

// on se connecte à la base de données
$link = @new mysqli(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
if ($link->connect_errono) {
	echo "Problème de connexion à la base de données";
	exit();
}

echo "<h2>Voici la liste des emails</h2>";

// la requête d'affichage des utilisateurs
$sql = "SELECT email_id, email, date_inscription FROM liste_email
			  ORDER BY date_inscription";

//echo $sql;

if (!$result = $link->query($sql)) {
  echo "Problème lors de l'exécution de la requête!";
  exit();
}

// est-ce que la requête retourne quelque chose
if ($link->numrows($result) < 1){
	echo "<h3>Il n'y a pas d'email</h3>";
	exit();
}


// on affiche les éléments de la table liste_email

	while ($row = $link->fetch_assoc() ) {
		echo $row['email_id'] . ' | ' . $row['email'] . ' | ' .  $row['date_inscription'] . <a href="">Modifier</a> '<br>';
	}
	

?>
</body>
</html>
