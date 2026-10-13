<?php
require_once '../../backend/classes/User.php';
require_once '../../backend/classes/Auteur.php';
// require_once '../../backend/classes/GestionCategorie.php';

// class CategorieController
// {
//     public function listerCategories(): void
//     {
//         $gestion = new GestionCategorie();
//         $categories = $gestion->getAll();

//         foreach ($categories as $cat) {
//             echo $cat->getNom() . "<br>";
//         }
//     }
// }

// Test d'exécution
// $controller = new CategorieController();
// $controller->listerCategories();
$user = new User();
$auteur = new Auteur();
echo $user->getRoleName();
echo "<br>";
echo $auteur->getRoleName();
