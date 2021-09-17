<h1>Page 2</h1>
<hr>
<a href="index.php">Retour</a>

<hr>

<?php

// S'il y a des infos dans l'URL, je les affiche 
if($_GET) {
echo $_GET['produit'] . '<br>';
echo $_GET['couleur'] . '<br>';
echo $_GET['prix'] . '<br>';
}

?>
