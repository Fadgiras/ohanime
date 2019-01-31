<?php
session_start();
include('bibliotheque.php');

include('entete.html');

// Panier
include('panier.php');

// Catégories
include('categories.php');

if (isset($_GET['id_produit']) && !empty($_GET['id_produit']))
  {
    // Fiche produit
    include('fiche_produit.php');
  }
else
  {
    // Catalogue
    include('catalogue.php');
  }


include('pied.html');
?>

