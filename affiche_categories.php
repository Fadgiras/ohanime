<nav>
<ul class="menu">

<?php
  $categories = array('discussion générale');

  foreach ($categories as $cat)

  {
    echo '<center><a class="onglets" href="forum.php?cat='.$cat.'">'.$cat.'</a></center>';
  }
?>

</ul>

<br><br><br><br>

</nav>
