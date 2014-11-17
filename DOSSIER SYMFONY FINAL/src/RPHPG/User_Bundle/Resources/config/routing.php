<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('rphpg_user._homepage', new Route('/hello/{name}', array(
    '_controller' => 'RPHPGUser_Bundle:Default:index',
)));

return $collection;
