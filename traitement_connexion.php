<?php
session_start();
include('bibliotheque.php');

$pseudo = $_POST['pseudo'];
$motdepasse = $_POST['mot_de_passe'];

$requete = "SELECT pseudo, mot_de_passe FROM client
            WHERE pseudo='$pseudo' AND mot_de_passe='$motdepasse'";
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
if (mysqli_num_rows($resultat) == 0)
  {
    $message = 'Mauvais pseudo/mot de passe.';
    $erreur = true;
  }
else
  {
    $message = 'Vous êtes connect&eacute;.';
    $erreur = false;
    $_SESSION['pseudo'] = $pseudo;
  }

///////////////////////////////////// PARTIE VISIBLE /////////////////////////////////////
include('entete.html');
echo $message;
if ($erreur)
  {
    echo ' <a href="compte.php">Veuillez r&eacute;essayer</a>';
  }
include('pied.html');
?>
