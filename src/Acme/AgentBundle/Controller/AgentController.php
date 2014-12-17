<?php

namespace Acme\AgentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\AgentBundle\Entity\Agent;
use Acme\AgentBundle\Form\AgentType;

/**
 * Agent controller.
 *
 * @Route("/agent")
 */
class AgentController extends Controller
{

    /**
     * Lists all Agent entities.
     *
     * @Route("/", name="agent")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeAgentBundle:Agent')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Agent entity.
     *
     * @Route("/", name="agent_create")
     * @Method("POST")
     * @Template("AcmeAgentBundle:Agent:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Agent();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agent_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Agent entity.
     *
     * @param Agent $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Agent $entity)
    {
        $form = $this->createForm(new AgentType(), $entity, array(
            'action' => $this->generateUrl('agent_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Agent entity.
     *
     * @Route("/new", name="agent_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Agent();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Agent entity.
     *
     * @Route("/{id}", name="agent_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeAgentBundle:Agent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Agent entity.
     *
     * @Route("/{id}/edit", name="agent_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeAgentBundle:Agent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agent entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Agent entity.
    *
    * @param Agent $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Agent $entity)
    {
        $form = $this->createForm(new AgentType(), $entity, array(
            'action' => $this->generateUrl('agent_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Agent entity.
     *
     * @Route("/{id}", name="agent_update")
     * @Method("PUT")
     * @Template("AcmeAgentBundle:Agent:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeAgentBundle:Agent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agent_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Agent entity.
     *
     * @Route("/{id}", name="agent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeAgentBundle:Agent')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Agent entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agent'));
    }

    /**
     * Creates a form to delete a Agent entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agent_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
