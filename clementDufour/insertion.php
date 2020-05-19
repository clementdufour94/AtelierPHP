<?php include("inc/header.inc.php"); ?>


<?php

//J'ai essayé ici de relier ma base de donnée profile à ma page pour pouvoir récuperer l'url de la photo de profile mais cela ne fonctionne pas

$pdu = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


          $result2 = $pdu->query("SELECT * FROM profile");
           $profil = $result2->fetch(PDO::FETCH_OBJ);

$image =$pdu->prepare('INSERT INTO profile VALUES)(NOT NULL, :url)');
$image->bindValue(':url', $_POST['url'], PDO::PARAM_STR);





$objpdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');

$pdostat = $objpdo->prepare('INSERT INTO about VALUES(NOT NULL , )');

$pdostat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdostat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdostat->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
$pdostat->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
$pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdostat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
$pdostat->bindValue(':expt1', $_POST['expt1'], PDO::PARAM_STR);
$pdostat->bindValue(':experience1', $_POST['experience1'], PDO::PARAM_STR);
$pdostat->bindValue(':date1', $_POST['date1'], PDO::PARAM_STR);
$pdostat->bindValue(':expt2', $_POST['expt2'], PDO::PARAM_STR);
$pdostat->bindValue(':experience2', $_POST['experience2'], PDO::PARAM_STR);
$pdostat->bindValue(':date2', $_POST['date2'], PDO::PARAM_STR);
$pdostat->bindValue(':expt3', $_POST['expt3'], PDO::PARAM_STR);
$pdostat->bindValue(':experience3', $_POST['experience3'], PDO::PARAM_STR);
$pdostat->bindValue(':date3', $_POST['date3'], PDO::PARAM_STR);
$pdostat->bindValue(':expt4', $_POST['expt4'], PDO::PARAM_STR);
$pdostat->bindValue(':experience4', $_POST['experience4'], PDO::PARAM_STR);
$pdostat->bindValue(':date4', $_POST['date4'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole1', $_POST['ecole1'], PDO::PARAM_STR);
$pdostat->bindValue(':diplome1', $_POST['diplome1'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole_date1', $_POST['ecole_date1'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole2', $_POST['ecole2'], PDO::PARAM_STR);
$pdostat->bindValue(':diplome2', $_POST['diplome2'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole_date2', $_POST['ecole_date2'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole3', $_POST['ecole3'], PDO::PARAM_STR);
$pdostat->bindValue(':diplome3', $_POST['diplome3'], PDO::PARAM_STR);
$pdostat->bindValue(':ecole_date3', $_POST['ecole_date3'], PDO::PARAM_STR); 


//J'ai essayé ici de modifier des valeurs dans ma base de donnée sauf que le soucis c'est quand je ne met rien dans le formulaire cela me détruit ce que j'y est écrit pour y insérer un blanc

$result = $pdo->exec("UPDATE about SET prenom = '$_POST[prenom]' ");
$result = $pdo->exec("UPDATE about SET nom = '$_POST[nom]' ");
$result = $pdo->exec("UPDATE about SET adresse = '$_POST[adresse]' ");
$result = $pdo->exec("UPDATE about SET telephone = '$_POST[telephone]' ");
$result = $pdo->exec("UPDATE about SET email = '$_POST[email]' ");
$result = $pdo->exec("UPDATE about SET description = '$_POST[description]' ");
$result = $pdo->exec("UPDATE about SET expt1 = '$_POST[expt1]' ");
$result = $pdo->exec("UPDATE about SET experience1 = '$_POST[experience1]' ");
$result = $pdo->exec("UPDATE about SET experience2 = '$_POST[experience2]' ");
$result = $pdo->exec("UPDATE about SET expt2 = '$_POST[expt2]' ");
$result = $pdo->exec("UPDATE about SET date2 = '$_POST[date2]' ");
$result = $pdo->exec("UPDATE about SET expt3 = '$_POST[expt3]' ");
$result = $pdo->exec("UPDATE about SET date3 = '$_POST[date3]' ");
$result = $pdo->exec("UPDATE about SET expt4 = '$_POST[expt4]' ");
$result = $pdo->exec("UPDATE about SET experience4 = '$_POST[experience4]' ");
$result = $pdo->exec("UPDATE about SET date4 = '$_POST[date4]' ");
$result = $pdo->exec("UPDATE about SET ecole1 = '$_POST[ecole1]' ");
$result = $pdo->exec("UPDATE about SET diplome1 = '$_POST[diplome1]' ");
$result = $pdo->exec("UPDATE about SET ecole_date1 = '$_POST[ecole_date1]' ");
$result = $pdo->exec("UPDATE about SET ecole2 = '$_POST[ecole2]' ");
$result = $pdo->exec("UPDATE about SET diplome2 = '$_POST[diplome2]' ");
$result = $pdo->exec("UPDATE about SET ecole_date2 = '$_POST[ecole_date2]' ");
$result = $pdo->exec("UPDATE about SET ecole3 = '$_POST[ecole3]' ");
$result = $pdo->exec("UPDATE about SET diplome3 = '$_POST[diplome3]' ");
$result = $pdo->exec("UPDATE about SET ecole_date3 = '$_POST[ecole_date3]' ");


echo "Le profil à été mis à jour";













?>


<?php include("inc/footer.inc.php"); ?>