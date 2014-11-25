<?php

namespace Mayank\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($city)
    {
        return $this->render('MayankCrudBundle:Default:index.html.twig', array('city' => $city));
    }
}
