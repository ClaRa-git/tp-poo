<?php
/**
 * Classe de démarrage de l'application
 */

// Déclaration du namespace de ce fichier
namespace App;

use Exception;

class App
{
    // Singleton Etape 2: on crée une propriété statique pour stocker l'instance unique
    // "?self" :
    // - self représente le type de la class dans laquelle on est (ici = App)
    // - ? précise que la valeur peut aussi contenir null
    private static ?self $app_instance = null;
    private string $last_message;

    // Singleton Etape 3: On crée un méthode publique statique qui permet d'obtenir l'instance unique
    public static function getApp(): self
    {
        // Si l'instance n'existe pas encore on la crée
        if( is_null( self::$app_instance ) ) {
            self::$app_instance = new self();
        }

        return self::$app_instance;
    }

    public function toto( string $msg ): void
    {
        $this->last_message = $msg;
        echo $msg. ' Je suis Toto !';
    }

    // Singleton Etape 1: Bloquer l'utilisation de "new" depuis l'extérieur
    // => passer le constructeur en "private"
    private function __construct() { } 
    // Singleton Etape 4: Bloquer l'utilisation de "clone" depuis l'extérieur
    private function __clone() { }
    // Singleton Etape 5: Bloquer la désérialisation de l'objet (depuis la session par exemple)
    // "private" est interdit pour ce cas, on va donc lui faire lancer une erreur
    public function __wakeup()
    {
        throw new Exception( "Non c'est interdit !" );
    }
}