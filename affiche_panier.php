<?php
    echo '<table>';
    $cumul = 0;

    // Affichage des lignes du panier

    for ($ligne = 0; $ligne < $nblignes; $ligne++)
      {
        $quantite = $_SESSION['Qtte'][$ligne];
        $nom = $_SESSION['nom'][$ligne];
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
