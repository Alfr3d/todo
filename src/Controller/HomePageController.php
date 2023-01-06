<?php

namespace Alfred\Todo\Controller;


class HomePageController
{
    public function loadHomePage()
    {
        require(__DIR__ . '/../View/homePage.tpl');
    }
}