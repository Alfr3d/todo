<?php

namespace Alfred\Todo\Framework;

use Alfred\Todo\Controller\HomePageController;
use Alfred\Todo\Controller\TodoController;
use Alfred\Todo\Service\HomePageService;
use Alfred\Todo\Service\TodoService;
use RuntimeException;

class DiContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {
        $this->set(
            Router::class,
            function (DiContainer $container) {
                return new Router(
                    $container->get(HomePageController::class),
                    $container->get(TodoController::class)
                );
            }
        );

        $this->set(
            HomePageController::class,
            function (DiContainer $container) {
                return new HomePageController();
            }
        );

        $this->set(
            TodoController::class,
            function (DiContainer $container) {
                return new TodoController(
                    $container->get(TodoService::class)
                );
            }
        );

        $this->set(
            TodoService::class,
            function (DiContainer $container) {
                return new TodoService();
            }
        );
    }
}