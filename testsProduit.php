<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ceci est une page de test pour les méthodes de la classe Produit</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Page de test pour les méthodes de la classe Produit</h1>
        
        <h2>Les lignes suivantes font appel à des méthodes de la classe Produit stockées dans class.Produit.inc.php</h2>
		
		<?php 
            // on récupère le code de la classe
            include ('class.Produit.inc.php');
		?>
		<h3>Test n°1 : function __construct() : le constructeur</h3>
		<?php
			// création d'une instance de la classe pour invoquer les méthodes
			$p1=new Produit ('Clé USB Lexar 64Go USB 3.0 Flash drive' , 34.99); 
		?>
		<h3>Test n°2 : getNom()</h3>
		<p>
            <?php echo 'nom du produit : '.$p1->getNom(); ?>
        </p>
		<h3>Test n°3 : sans  __toString()</h3>
        <p>
		<?php echo 'produit p1: '.$p1; ?>
        </p>
				
    </body>
</html>
