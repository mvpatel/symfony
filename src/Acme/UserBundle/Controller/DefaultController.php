<?php

namespace Acme\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('AcmeUserBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/welcome/{name}", name="hello")
     */
    public function helloAction($name, $_format) {
        return $this->render('AcmeUserBundle:Default:hello.' . $_format . '.twig', array(
                    'name' => $name
        ));
    }

    public function redirectAction($name) {
//        return $this->render('AcmeUserBundle:Default:index.html.twig', array('name' => $name));
//        return $this->redirectToRoute('welcome_rout');
        return $this->redirect($this->generateUrl('welcome_rout', array('name' => $name)));


//        return $this->forward('AcmeUserBundle:Default:hello', array(
//                    'name' => $name,
//                    '_format' => 'xml'
//        ));
//        return $this->redirect('welcome_rout');
    }

    public function errorAction() {
//        echo 'error for 404 and 500';
//        404 error
//        throw $this->createNotFoundException();
//        500 error
//        throw new \Exception('Something went horribly wrong!');
//        return $this->render('AcmeUserBundle:Default:index.html.twig', array('name' => 'name'));


        return $this->forward('AcmeUserBundle:Default:hello', array(
                    'name' => 'hjhjk',
                    '_format' => 'xml'
        ));
    }

    public function sessionAction(Request $request) {
        $session = $request->getSession();
        // store an attribute for reuse during a later user request
        $session->set('foo', 'nooo');

        // get the value of a session attribute
        $foo = $session->get('foo');

        // use a default value if the attribute doesn't exist
        $foo = $session->get('foo', 'default_value');
        
//        
        foreach ($session->getFlashBag()->get('notice', array()) as $notice) {
        echo '<div class="flash-notice">'.$notice.'</div>';}

        return $this->forward('AcmeUserBundle:Default:hello', array(
                    'name' => $foo,
                    '_format' => 'html',
//                    'notice' => $notice
        ));
    }

    public function getlastAction(Request $request) {

        $session = $request->getSession();

        $foo = $session->get('foo');
        $session->getFlashBag()->add('notice', 'Profile is not updated');
        
//        $this->addFlash('notice', 'Congratulations, your action succeeded!');

        
        return $this->render('AcmeUserBundle:Default:hello.html.twig', array(
                    'name' => 'name',
//                    'notice' => 'notice'
        ));
    }

}
