<?php

// src/Acme/TaskBundle/Controller/DefaultController.php

namespace Acme\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function newAction(Request $request) {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
                ->add('task', 'text')
                ->add('dueDate', 'date')
                ->add('save', 'submit', array('label' => 'Create Task'))
                ->add('saveAndAdd', 'submit', array('label' => 'Save and Add'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database

            $nextAction = $form->get('saveAndAdd')->isClicked() ? 'task_new' : 'task_success';

            return $this->redirect($this->generateUrl('task_success'));
        }

        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
    
    public function successAction() {
        
        return $this->render('AcmeTaskBundle:Default:sucess.html.twig');
    }

}
