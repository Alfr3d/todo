<?php

namespace Alfred\Todo\Controller;


class HomePageController
{
    public function loadHomePage()
    {
        // Render template with Smarty.
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . '/../View/homePage.tpl');
    }

    public function loadNotFoundPage()
    {
        // Render template with Smarty.
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . '/../View/notFoundPage.tpl');
    }
}