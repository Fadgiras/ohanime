<div id="catalogue">
  <h2> Boutique Ohanime </h2>
  <table>
<?php
$requete = 'SELECT id,nomart,image,prix FROM article';
if (isset($_GET['cat']) && !empty($_GET['cat']))
  {
    $requete .= " WHERE categorie = '".$_GET['cat']."'";
  }
$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);

$ligne = mysqli_fetch_assoc($resultat);
while ($ligne) // while($ligne != false)
  {
?>
    <tr>
       <td> <a href="shop.php?id_produit=<?php echo $ligne['id']; ?>">
	    <img class="resize2" src="images/<?php echo $ligne['image']; ?>" alt="">
          <?php echo $ligne['nomart']; ?>
       </a> </td>
       <td> <?php echo en_euros($ligne['prix']); ?> </td>
       <td>
      
       </td>
    </tr>
<?php
    $ligne = mysqli_fetch_assoc($resultat);
  }
?>
  </table>
</div>
