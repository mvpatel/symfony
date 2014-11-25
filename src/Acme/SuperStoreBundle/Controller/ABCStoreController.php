<?php

namespace Acme\SuperStoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ABCStoreController extends Controller
{
    /**
     * @Route("/store/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('storename' => $name);
    }
}
