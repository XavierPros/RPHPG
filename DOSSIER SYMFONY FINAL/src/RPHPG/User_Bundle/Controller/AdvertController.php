<?php

namespace RPHPG\User_Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')->render('RPHPGUser_Bundle:Advert:index.html.twig', array('nom'=>'xavier'));
    	return new Response($content);
    }
}