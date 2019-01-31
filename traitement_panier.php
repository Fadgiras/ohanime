<?php
session_start();

$envoi = $_POST['envoi'];
switch ($envoi)
  {
    case 'Ajouter au panier' :
        if (isset($_POST['quantite']) && !empty($_POST['quantite']))
        {
            $_SESSION['id'][] = $_POST['id'];
            $_SESSION['nomart'][] = $_POST['nomart'];
            $_SESSION['prix'][] = $_POST['prix'];
            $_SESSION['quantite'][] = $_POST['quantite'];
			
         }
      break;
    case 'Supprimer' :
        $ligne = $_POST['ligne'];
        array_splice($_SESSION['id'], $ligne, 1);
        array_splice($_SESSION['nomart'], $ligne, 1);
        array_splice($_SESSION['prix'], $ligne, 1);
        array_splice($_SESSION['quantite'], $ligne, 1);
      break;
    case 'Vider le panier' :
        unset($_SESSION['id']);
        unset($_SESSION['nomart']);
        unset($_SESSION['prix']);
        unset($_SESSION['quantite']);
      break;
    case 'Vider le panier et déconnecter' :
        session_unset();
        session_destroy();
      break;
  }

 header('Location: shop.php');
?>
