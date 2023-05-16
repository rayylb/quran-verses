<!doctype html>
<html>
<head> <meta charset="utf8">
<link rel="stylesheet" href="style.css">
</head>
<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=quran;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$nb = rand(1, 6236);
$recipesStatement = $db->prepare("SELECT * FROM fr_hamidullah WHERE id = $nb");
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
var_dump($recipes);
?>
<body>
<?php
foreach ($recipes as $recipe) {
    echo $recipe['text']; 
    echo "<br>Sourate ", $recipe['sura'], "Verset ", $recipe['aya'] ;
}
?>
</body>
</html>