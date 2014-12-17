<?php
// src/AppBundle/Controller/DefaultController.php
namespace Acme\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LocalController extends Controller
{
    /**
     * @Route("/locall", name="local")
     */
    public function localAction()
    {
        return new Response('Welcome to Symfony!');
    }
}