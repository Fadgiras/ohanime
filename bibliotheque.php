<?php
function connecter()
  {
    $hote       = 'localhost';
    $utilisateur= 'root';
    $passe      = 'root';
    $base       = 'ohanime';
    $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);
	// instruction qui permet de conserver les accents lors de la connexion au serveur de bases de données
    mysqli_query($connexion, 'SET NAMES UTF8');
    return $connexion;
  }

function en_euros($montant)
  {
    return number_format($montant, 2, ',', ' ').'&nbsp;€';
  }
function afficher_ligne($quantite, $prix, $designation, $ligne)
  { 
?>
        <tr>
          <td> <?php echo $quantite; ?> </td>
          <td> &times; </td>
          <td> <?php echo $designation; ?> </td>
          <td> = </td>
          <td> <?php echo en_euros($quantite * $prix); ?> </td>
          <td>
            <form action="traitement_panier.php" method="post">
              <input type="hidden" name="ligne" value="<?php echo $ligne; ?>">
              <input type="submit" name="envoi" value="Supprimer">
            </form> 
          </td>
        </tr>
<?php
  }
?>
