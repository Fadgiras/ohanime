<?php
$id = $_GET['id_produit'];
$requete = 'SELECT * FROM article WHERE id = '.$id;

$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);
$ligne = mysqli_fetch_assoc($resultat);
?>

<div id="produit">
  <h2> <?php echo $ligne['nomart']; ?> </h2>
  <img class="resize" src="images/<?php echo $ligne['image']; ?>" alt="">
  <div id="descriptif">
  <p>
  <?php echo $ligne['description']; ?>
  
  </p>
  
  Prix unitaire : <?php echo en_euros($ligne['prix']); ?>
 <form action="traitement_panier.php" method="post">
    <input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
    <input type="hidden" name="nomart" value="<?php echo $ligne['nomart']; ?>">
    <input type="hidden" name="prix" value="<?php echo $ligne['prix']; ?>">
    <input type="number" name="quantite"  min="1">
    <input type="submit" name="envoi" value="Ajouter au panier">
  </form>
  </div>
  
</div>

