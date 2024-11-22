<?php

// Chargement du système d'autoload
require_once '../vendor/autoload.php';

// Déclaration des classes que l'on va utiliser dans le fichier
use App\App;
use Symplefony\Database;

var_dump( App::getApp() );
var_dump( Database::getDd() );

$truc = App::getApp();
$machin = clone $truc;

$truc->toto( 'Truc a dit' );
$truc->toto( 'Et ensuite il a dit ' );
$machin->toto( 'Machin a dit' );
var_dump( $truc );
var_dump( $machin );