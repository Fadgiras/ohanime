<?php
session_start();
include('bibliotheque.php');

unset($_SESSION['pseudo']);
$message = 'Vous êtes déconnecté.';
$erreur = false;

///////////////////////////////////// PARTIE VISIBLE /////////////////////////////////////
include('entete.html');
echo $message;
if ($erreur)
  {
    echo ' <a href="compte.php">Veuillez réessayer</a>';
  }
include('pied.html');

?>
