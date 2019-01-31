<?php
session_start();

if (isset($_POST['envoi']) && ($_POST['envoi'] == 'Acheter'))
  {
    if (!isset($_SESSION['pseudo']))
      {
        include('bibliotheque.php');

		include('entete.html');

        echo 'Merci de <a href="compte.php">se connecter</a> pour effectuer l\'achat.'.PHP_EOL;
		
		include('pied.html');
      }
    else
      {
      	include('bibliotheque.php');

		include('entete.html');

        echo 'Page en développement'.PHP_EOL;
		
		include('pied.html');
      }
  }
?>
