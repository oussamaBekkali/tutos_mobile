<?php
require_once 'categorie.php';

$cat = new categorie();
$cat->setNom("iphone");
$cat->setId(2);
$cat->setCouleur("black");
$cat->setIcon("apple");

echo $cat->getCouleur() . "<br>";
echo $cat->getIcon() . "<br>";
echo $cat->getId() . "<br>";
echo $cat->getNom() . "<br>";
