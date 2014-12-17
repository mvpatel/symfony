<?php

// src/Acme/AccountBundle/Controller/AccountController.php

namespace Acme\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AccountBundle\Form\Type\RegistrationType;
use Acme\AccountBundle\Form\Type\UpdateType;
use Acme\AccountBundle\Form\Model\Registration;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller {
    
    
    /**
     * @Route("/registerform")
     */
    public function registerAction() {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
                        'AcmeAccountBundle:Account:register.html.twig', array('form' => $form->createView())
        );
    }

    public function createAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            $em->persist($registration->getUser());
            $em->flush();
// if form is valid then do ready for it to submit
//            return $this->redirect(...);
        }

        return $this->render(
                        'AcmeAccountBundle:Account:register.html.twig', array('form' => $form->createView())
        );
    }

    public function madeAction() {
        echo 'hi';
    }

    public function alluserAction() {
        $users = $this->getDoctrine()
                ->getRepository('AcmeAccountBundle:User')
                ->findAll();

        if (!$users) {
            throw $this->createNotFoundException(
                    'No user found for id ' . $id
            );
        } else {
            return $this->render('AcmeAccountBundle:Account:list.html.twig', array(
                        'users' => $users
            ));
        }
    }

    public function updateuserAction(request $request) {
        $registration = new Registration();
        $form = $this->createForm(new registrationType(), $registration);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // the validation passed, do something with the $author object
//        return $this->redirect($this->generateUrl(...));
        }

        return $this->render('AcmeAccountBundle:Account:update.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
