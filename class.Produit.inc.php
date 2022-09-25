<?php
/** 
* fichier class.Produit.inc.php
* contient la classe Produit
* @mainpage La documentation de la mission 1
*/

/** 
* classe Produit 
 
* @version 1
* @date juin 2022
* @author Marielle Jouin <marielle.jouin@ac-orleans-tours.fr>
* @details La classe permet de gérer des produits commercialisés
*/

class Produit
{   	
	/**
	* nom du produit
	* @var string $nom
	*/
    private string $nom; // en POO PHP on type les données
			
	/**
	* prix du produit
	* @var float $prix
	*/ 		
	private float $prix;
	/**
	* tva du produit
	* @var float $taux
	*/ 
	private float $taux;
    

    /**
	 * Constructeur
	 * @param string le nom du produit 
	 * @param string le prix du produit 
	 * @param string le taux de tva du produit  (si pas fourni, valeur par défaut 0.20)
	*/
    public function __construct(string $leNom, float $lePrix, float $leTaux=0.20) // Constructeur demandant 3 paramètres dont un avec une valeur par défaut
	  {
		$this->nom=$leNom;
		$this->prix=$lePrix;
		$this->taux=$leTaux;

	  }

  	/**
	 * Retourne le nom du produit
	 *
	 * @return string le nom du produit 
	*/
	public function getNom(): string
	{
		return $this->nom;
	}
	/**
	 * Retourne le prix du produit
	 *
	 * @return float le prix du produit 
	*/
	public function getPrix(): float
	{
		return $this->prix;
	}
	/**
	 * Retourne le taux de tva du produit
	 *
	 * @return float le taux de tva du produit 
	*/
	public function getTaux():float
	{
		return $this->taux;
	}
	/**
	 * Donne une valeur au nom du produit
	 *
	 * @param string le nom du produit 
	*/
	public function setNom(string $leNom):void
	{
		$this->nom=$leNom;
	}
	/**
	 * Donne une valeur au prix du produit
	 *
	 * @param float le prix du produit 
	*/
	public function setPrix(float $lePrix):void
	{
		$this->prix=$lePrix;
	}
	/**
	 * Donne une valeur au taux de tva du produit
	 *
	 * @param float le taux de tva du produit 
	*/
	public function setTaux(float $leTaux):void
	{
		$this->taux=$leTaux;
	}

    /**
     * permet de pouvoir caster un objet de la classe Produit en string
     * @return string chaîne qui contient les caractéristiques du produit
	*/
	/*
    public function __toString(): string
	{
		return 'Nom : '.$this->nom.', prix HT : '.$this->prix.'€, taux TVA: '.($this->taux*100).'%.';
	}*/
}
?>