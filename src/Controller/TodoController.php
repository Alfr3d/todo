<?php

namespace Alfred\Todo\Controller;

use Alfred\Todo\Service\TodoService;

class TodoController
{
    private TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function getList()
    {
        // Getting all todos.
        $todoList = $this->todoService->getContentFromFile();

        // Rendering Template with smarty.
        $smarty = new \Smarty();
        $smarty->assign('todoList', $todoList);
        $smarty->display(__DIR__ . '/../View/list.tpl');
    }

    public function create(array $request)
    {
        if (empty($request)) {
            throw new \Exception('Request is empty.');
        }

        $this->todoService->create($request);

        header("Location: /todo/list", TRUE, 301);
    }
}