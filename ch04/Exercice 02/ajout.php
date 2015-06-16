<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Un titre</title>
</head>

<body>

<?php

	if ($_POST['envoyer']) {
		
		$email = $_POST['email'];
		
        $email_nettoye = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email_nettoye, FILTER_VALIDATE_EMAIL)) {
                
            echo "adresse valide<br>";
        } else {
            echo "adresse non valide<br>";
        }
        echo "<hr>";
        
        
        
		/*Insertion dans la base de donnée */
		//Etape connexion serveur
		
		$dbh = new mysqli( "localhost" , "cpnv", "cpnv1234", "ch04" );
		
		if ( $dbh->connect_errno ) {
			echo "Erreur de connexion" .$dbh->connect->error;
		}
		
		//Etape préparation et envoi de la requete
		
		$sql = "INSERT INTO liste_email VALUES (NULL, '" . $email_nettoye . "', NOW() )";
        if ( $result = $dbh->query( $sql ) ) {
            echo $result->nom_rows . " lignes ajouté.";
        } else {
            echo "L'erreur : ", $dbh->error, " est survenue<br>";
        }
		
    } else { 
?>



<form id="insert" name="insert" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

<p> Entrez votre adresse email : <input type="email" id="email" name="email" required="required"></p>
<input type="submit" id="envoyer" name="envoyer" value="Envoyer">

</form>
<?php
    }
?>

<?php
    mixed mysqli::query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )

?>

</body> 
</html>
