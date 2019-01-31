<div id="panier">
<h2> Mon panier </h2>
<?php

// Compter le nombre de lignes
if (isset($_SESSION['id']))
  {
    $nblignes = count($_SESSION['id']);
  }
else
 		 {
    $nblignes = 0;
  }


// S'il n'y a pas de lignes, le panier est vide.
if ($nblignes == 0)
  {
    echo 'Votre panier est vide.';
  }
Else
{



    echo '<table>';
    $cumul = 0;

    // Affichage des lignes du panier

    for ($ligne = 0; $ligne < $nblignes; $ligne++)
      {
        $quantite = $_SESSION['quantite'][$ligne];
        $nom = $_SESSION['nomart'][$ligne];
        $prix = $_SESSION['prix'][$ligne];

        $cumul = $cumul + $quantite * $prix;

        afficher_ligne($quantite, $prix, $nom, $ligne);
      }
      
?>
    </table>

      <!-- Affichage du total -->
        <tr>
          <td colspan="4"> Total </td>
          <td> <?php echo en_euros($cumul); ?> </td>
        </tr>

    <!-- Affichage des boutons avec 3 formulaires dans un tableau -->
    <table>
        <tr>

          <td>
            <form action="traitement_panier.php" method="post">
              <input type="submit" name="envoi" value="Vider le panier">
            </form>
          </td>
        </tr>
      
    
      <tr>
        <td>
          <form action="traitement_achat.php" method="post">
            <input type="submit" name="envoi" value="Acheter">
          </form>
        </td>
        <td>
          <form action="traitement_panier.php" method="post">
            <input type="submit" name="envoi" value="Vider le panier et déconnecter">
          </form>
        </td>
      </tr>
    </table>

<?php
  	}
?>
</div>
