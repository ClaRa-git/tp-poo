<?php

namespace App\Controller;

use App\Model\Repository\RepoManager;
use PDO;

use Symplefony\Controller;
use Symplefony\Database;
use Symplefony\View;

use App\Model\UserModel;

class PageController extends Controller
{
    // Page d'accueil
    public function index(): void
    {
        $view = new View('page:home');

        $data = [
            'title' => 'Accueil - Autodingo.com'
        ];

        $view->render($data);
    }

    // Page mentions légales
    public function legalNotice(): void
    {
        echo 'Les mentions légales !';

        var_dump(RepoManager::getRM()->getUserRepo()->getById(2));
    }
}
