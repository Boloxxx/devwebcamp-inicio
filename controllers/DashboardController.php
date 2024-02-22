<?php

namespace Controllers;

use MVC\Router;

class DashboardController
{

    public static function index(Router $router)
    {
        if(!is_auth()) {
            header('Location: /');
        }

        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administracion'
        ]);
    }
}