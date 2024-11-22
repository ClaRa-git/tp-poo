<?php

// Chargement du système d'autoload
require_once '../vendor/autoload.php';

// Déclaration des classes que l'on va utiliser dans le fichier
use App\App;

$truc = new App();

$truc->toto();
