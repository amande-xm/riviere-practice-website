<?php
$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connexion échouée : ' . $e->getMessage();
}
echo 'Connexion à la base réussie';
$date = date("Y-m-d H:i:s");
$sql = "UPDATE users set updated = '$date'";
$count = $dbh -> exec($sql);
echo "Modification de $count lignes.\n";

?>