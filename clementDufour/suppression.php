<?php include("inc/header.inc.php"); ?>



<?php


$objpdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
//On supprime la table about
$result = $objpdo->exec("DELETE FROM about;");

//On supprime la table profile
$pdu = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result2 = $pdu->exec("DELETE FROM profile;");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<h2>Vos données ont bien été supprimées</h2>


































<?php include("inc/footer.inc.php"); ?>