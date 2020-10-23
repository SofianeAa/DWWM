<?php
class Carre
{
   //Attributs
   private $nbcote;
   private $surface;
   private $tailleSegment;

   //Getter & Setter

   public function getNbcote()
   {
      return $this->nbcote;
   }

   public function setNbcote($nbcote)
   {
      $this->nbcote = $nbcote;
   }

   public function getSurface()
   {
      return $this->surface;
   }

   public function setSurface($surface)
   {
      $this->surface = $surface;
   }

   public function getTailleSegment()
   {
      return $this->tailleSegment;
   }

   public function setTailleSegment($tailleSegment)
   {
      $this->tailleSegment = $tailleSegment;
   }

   // construct

   public function __construct(array $options = [])
   {
       if (!empty($options)) // empty : renvoi vrai si le tableau est vide
       {
           $this->hydrate($options);
       }
   }
   public function hydrate($data)
   {
       foreach ($data as $key => $value)
       {
           $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
           if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
           {
               $this->$methode($value);
           }
       }
   }


   // Autres fonctions
   public function verifCarre()
   {
      return $this->_nbcote == 4 && $this->_tailleSegment ;
   }
   

   
}