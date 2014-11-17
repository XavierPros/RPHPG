<?php

namespace RPHPG\User_Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RPHPGUser_Bundle:Default:index.html.twig', array('name' => $name));
    }
}
