<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
