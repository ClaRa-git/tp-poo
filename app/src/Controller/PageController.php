<?php

namespace App\Controller;

use Symplefony\View;
use PDO;
use App\Model\UserModel;
use Symplefony\Database;

class PageController
{
    // Page d'accueil
    public function index(): void
    {
        $view = new View( 'page:home' );

        $data = [
            'title' => 'Accueil - Autodingo.com'
        ];

        $view->render( $data );
    }

    // Page mentions légales
    public function legalNotice(): void
    {
        echo 'Les mentions légales !';

        var_dump( UserModel::getById(4456) );
    }
}