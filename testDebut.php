<?php

$dateCrea = new DateTime();
var_dump($dateCrea);
echo $dateCrea->format('d/m/Y').'<BR/>';

// TO DO : à compléter


echo '-------------------------------------------------------------<BR/>';
$dbh = new PDO ('mysql:host=localhost;port=3307;dbname=bdproduits;charset=utf8', 'dev2', 'qZuL8GuDBjM8mU1I', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$req=$dbh->query('SELECT id, description, prix FROM produit;');
// TO DO : à compléter
