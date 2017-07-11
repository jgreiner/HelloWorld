<?php

namespace HelloWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('HelloWorld::content.Theme');
    }
}