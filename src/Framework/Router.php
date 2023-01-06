<?php

namespace Alfred\Todo\Framework;

use Alfred\Todo\Controller\HomePageController;
use Alfred\Todo\Controller\TodoController;

class Router
{
    private HomePageController $homePageController;
    private TodoController $todoController;

    public function __construct(
        HomePageController $homePageController,
        TodoController $todoController
    ) {
        $this->homePageController = $homePageController;
        $this->todoController = $todoController;
    }

    public function process(string $route, array $request = null)
    {
        switch ($route) {
            case '/':
                $this->homePageController->loadHomePage();
                break;
            case '/list':
                $this->todoController->getList();
                break;
            case '/create':
                $this->todoController->create($request);
                break;
            default:
                break;
        }
    }
}