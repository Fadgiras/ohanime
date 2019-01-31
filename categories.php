<div id="categorie-liste">

<h3> Cat&eacute;gories </h3>

<ul>

<?php
$connexion = connecter();

$requete= "SELECT categorie FROM article GROUP BY categorie ;";

$resultat = mysqli_query($connexion, $requete);

while ($tab = mysqli_fetch_assoc($resultat))

{
$cat = $tab['categorie'];
echo '<li><a href="shop.php?cat='.urlencode($cat).'">'.$cat."</a></li>".PHP_EOL;
}

mysqli_free_result($resultat);
mysqli_close($connexion);
?>

</ul>

</div>