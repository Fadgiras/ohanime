<?php
session_start();
include('entete.html');

echo '<h2>Mon compte</h2>';

if (!isset($_SESSION['pseudo']))
  {
    include('form_connexion.html');
    include('form_inscription.html');
  }

else
  	 {
   	 include('form_deconnexion.html');
 	 }

include('pied.html');
?>

